<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Data\Kartu_keluarga;
use App\Models\Data\Keluarga;
use App\Models\Desa\Rt;
use App\Models\Desa\Wisata;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $statistik = Rt::first();
        $dawis = Keluarga::all()->count();
        $wisata = Wisata::all()->count();
        $keluarga = Kartu_keluarga::all()->count();
        return view('admin.index', compact('dawis', 'wisata', 'keluarga', 'statistik'));
    }
}
