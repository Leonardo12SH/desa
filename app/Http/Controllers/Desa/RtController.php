<?php

namespace App\Http\Controllers\Desa;

use App\Http\Controllers\Controller;
use App\Models\Desa\Rt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class RtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            # jika request berasal dari ajax
            $data = Rt::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $editBtn = '<a href="javascript:void(0)" data-toggle="tooltip" data-id="' . $row->id . '" data-url="' . route('rt.edit', $row->id) . '" data-original-title="Edit" class="btn btn-warning btn-sm editItem"><i class="fas fa-edit"></i> Edit</a>';
                    $deleteBtn = '<a href="javascript:void(0)" data-toggle="tooltip" data-id="' . $row->id . '" data-url="' . route('rt.destroy', $row->id) . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteItem"><i class="fas fa-trash"></i> Hapus</a>';
                    return $editBtn . ' ' . $deleteBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('desa.rt.index');
    }

    public function edit($id)
    {
        $rt = Rt::findOrFail($id);
        return response()->json($rt);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'tahun' => 'required|unique:rts,tahun,' . $id,
            'jumlahdusun' => 'required|integer',
            'jumlahpenduduk' => 'required|integer',
            'jumlahrt' => 'required|integer',
            'jumlahrw' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->all()]);
        }

        $rt = Rt::findOrFail($id);
        $rt->update($request->all());

        return response()->json(['success' => 'Statistik Berhasil diperbarui']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $validator = Validator::make($request->all(), [
            'tahun' => 'required|unique:rts',
            'jumlahdusun' => 'required|integer',
            'jumlahpenduduk' => 'required|integer',
            'jumlahrt' => 'required|integer',
            'jumlahrw' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->all()]);
        }
        Rt::create($request->all());
        return response()->json(['success' => 'Statistik Berhasil ditambahkan']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Rt::find($id)->delete();
        return response()->json(['success' => 'RT Berhasil dihapus']);
    }
}
