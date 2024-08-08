@extends('layouts.admin.master')
@section('title')
    Data Statistik 
@endsection


@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>@yield('title')</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('admin') }}">Admin</a></li>
                            <li class="breadcrumb-item active">@yield('title')</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <button type="button" class="btn btn-primary btn-sm float-right" id="createNewItem"><i
                                        class="fas fa-plus mr-2"></i>Buat Baru</button>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered table-hover datatable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tahun</th>
                                            <th>Jumlah Dusun</th>
                                            <th>Jumlah Penduduk</th>
                                            <th>Jumlah RT</th>
                                            <th>Jumlah RW</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Tahun</th>
                                            <th>Jumlah Dusun</th>
                                            <th>Jumlah Penduduk</th>
                                            <th>Jumlah RT</th>
                                            <th>Jumlah RW</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    {{-- ajax dataa --}}
    <div class="modal fade" id="ajaxModel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modelHeading"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="ItemForm" name="ItemForm" class="form-horizontal">
                        <input type="hidden" name="Item_id" id="Item_id">
                        <div class="mb-2">
                            <label for="tahun" class="form-label">Tahun</label>
                            <input type="text" name="tahun" class="form-control" id="tahun" placeholder=""
                                autocomplete="off" required>
                        </div>
                        <div class="mb-2">
                            <label for="jumlahdusun" class="form-label">Jumlah Dusun</label>
                            <input type="number" name="jumlahdusun" class="form-control" id="jumlahdusun" placeholder=""
                                autocomplete="off" required>
                        </div>
                        <div class="mb-2">
                            <label for="jumlahpenduduk" class="form-label">Jumlah Penduduk</label>
                            <input type="number" name="jumlahpenduduk" class="form-control" id="jumlahpenduduk" placeholder=""
                                autocomplete="off" required>
                        </div>
                        <div class="mb-2">
                            <label for="jumlahrt" class="form-label">Jumlah RT</label>
                            <input type="number" name="jumlahrt" class="form-control" id="jumlahrt" placeholder=""
                                autocomplete="off" required>
                        </div>
                        <div class="mb-2">
                            <label for="jumlahrw" class="form-label">Jumlah RW</label>
                            <input type="number" name="jumlahrw" class="form-control" id="jumlahrw" placeholder=""
                                autocomplete="off" required>
                        </div>
                       
                        <hr>
                        <button class="btn btn-secondary tombol float-right mt-3" id="saveBtn" value="create"></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
     <div class="modal fade" id="editModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModelHeading"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editForm" name="editForm" class="form-horizontal">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" id="editItem_id">
                        <div class="mb-2">
                            <label for="edit_tahun" class="form-label">Tahun</label>
                            <input type="text" name="tahun" class="form-control" id="edit_tahun" placeholder=""
                                autocomplete="off" required>
                        </div>
                        <div class="mb-2">
                            <label for="edit_jumlahdusun" class="form-label">Jumlah Dusun</label>
                            <input type="number" name="jumlahdusun" class="form-control" id="edit_jumlahdusun" placeholder=""
                                autocomplete="off" required>
                        </div>
                        <div class="mb-2">
                            <label for="edit_jumlahpenduduk" class="form-label">Jumlah Penduduk</label>
                            <input type="number" name="jumlahpenduduk" class="form-control" id="edit_jumlahpenduduk" placeholder=""
                                autocomplete="off" required>
                        </div>
                        <div class="mb-2">
                            <label for="edit_jumlahrt" class="form-label">Jumlah RT</label>
                            <input type="number" name="jumlahrt" class="form-control" id="edit_jumlahrt" placeholder=""
                                autocomplete="off" required>
                        </div>
                        <div class="mb-2">
                            <label for="edit_jumlahrw" class="form-label">Jumlah RW</label>
                            <input type="number" name="jumlahrw" class="form-control" id="edit_jumlahrw" placeholder=""
                                autocomplete="off" required>
                        </div>
                        <button type="submit" class="btn btn-primary float-right mt-3">
                            <i class="fas fa-save mr-2"></i>Update
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('css-tambahan')
    <link rel="stylesheet" href="{{ asset('assets/theme/datatables/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/theme/datatables/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/theme/datatables/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection

@section('js-tambahan')
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('assets/theme/datatables/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/theme/datatables/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/theme/datatables/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/theme/datatables/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- Page specific script -->
    <script type="text/javascript">
        $(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var table = $('.datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('rt.index') }}",
                pageLength: 5,
                lengthMenu: [5, 10, 20, 50, 100, 200, 500],
                responsive: true,
                lengthChange: true,
                autoWidth: true,
                columns: [
                    { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                    { data: 'tahun', name: 'tahun' },
                    { data: 'jumlahpenduduk', name: 'jumlahpenduduk' },
                    { data: 'jumlahdusun', name: 'jumlahdusun' },
                    { data: 'jumlahrt', name: 'jumlahrt' },
                    { data: 'jumlahrw', name: 'jumlahrw' },
                    { data: 'action', name: 'action', orderable: true, searchable: true },
                ]
            });
            $('#createNewItem').click(function() {
                $('#saveBtn').val("create-Item");
                $('#Item_id').val('');
                $('#ItemForm').trigger("reset");
                $('#modelHeading').html("Tambah Data");
                $('.tombol').html("Submit");
                $('#ajaxModel').modal('show');
            });

            $('#saveBtn').click(function(e) {
                e.preventDefault();
                $.ajax({
                    data: $('#ItemForm').serialize(),
                    url: "{{ route('rt.store') }}",
                    type: "POST",
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            Swal.fire({
                                icon: "success",
                                title: "Selamat",
                                text: response.success
                            });
                            $('#ItemForm').trigger("reset");
                            $('#ajaxModel').modal('hide');
                            table.draw();
                        } else {
                            Swal.fire({
                                icon: "error",
                                title: "Mohon Maaf !",
                                text: response.error
                            });
                        }
                    },
                    error: function() {
                        Swal.fire({
                            icon: "error",
                            title: "Oops...",
                            text: "Something went wrong!"
                        });
                    }
                });
            });


            $('body').on('click', '.editItem', function() {
            console.log("Edit button clicked");
            var id = $(this).data("id");
            var url = $(this).data("url");
            console.log("ID:", id);
            console.log("URL:", url);
            $.get(url, function(data) {
                $('#editModelHeading').html("Edit Data Statistik");
                $('#editItem_id').val(data.id);
                $('#edit_tahun').val(data.tahun);
                $('#edit_jumlahdusun').val(data.jumlahdusun);
                $('#edit_jumlahpenduduk').val(data.jumlahpenduduk);
                $('#edit_jumlahrt').val(data.jumlahrt);
                $('#edit_jumlahrw').val(data.jumlahrw);
                $('#editModal').modal('show');
            });
            });

    $('#editForm').on('submit', function(e) {
        e.preventDefault();
        var id = $('#editItem_id').val();
        $.ajax({
            url: "{{ route('rt.update', '') }}/" + id,
            type: "PUT",
            data: $(this).serialize(),
            success: function(response) {
                if (response.success) {
                    Swal.fire({
                        icon: "success",
                        title: "Selamat",
                        text: response.success
                    }).then(() => {
                        $('#editModal').modal('hide');
                        table.draw();
                    });
                } else {
                    Swal.fire({
                        icon: "error",
                        title: "Mohon Maaf !",
                        text: response.error
                    });
                }
            },
            error: function() {
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Something went wrong!"
                });
            }
        });
    });
            $('body').on('click', '.deleteItem', function() {

                var Item_id = $(this).data("id");
                var url = $(this).data("url");
                Swal.fire({
                    title: 'Apakah Anda Yakin ?',
                    text: "Anda Akan Menghapus data Ini !",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Hapus Segera'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: "DELETE",
                            url: url,
                            success: function(response) {
                                if (response.success) {
                                    Swal.fire({
                                        icon: "success",
                                        title: "Selamat",
                                        text: response.success
                                    });
                                    $('#ItemForm').trigger("reset");
                                    $('#ajaxModel').modal('hide');
                                    table.draw();
                                } else {
                                    Swal.fire({
                                        icon: "error",
                                        title: "Mohon Maaf !",
                                        text: response.error
                                    });
                                }
                            },
                            error: function() {
                                Swal.fire({
                                    icon: "error",
                                    title: "Oops...",
                                    text: "Something went wrong!"
                                });
                            }
                        });
                    }
                })
            });
        });
    </script>
@endsection
