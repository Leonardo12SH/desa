@extends('layouts.admin.master')
@section('title')
    Admin Dashboard
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
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box">
                            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-home"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Total Dusun</span>
                                <span class="info-box-number">
                                    {{ $statistik->jumlahdusun }}
                                    <small>Dasun</small>
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Total Penduduk</span>
                                <span class="info-box-number">
                                    {{ $statistik->jumlahpenduduk }}
                                    <small>Penduduk</small>
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->

                    <!-- fix for small devices only -->
                    <div class="clearfix hidden-md-up"></div>

                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-truck-pickup"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Total Wisata</span>
                                <span class="info-box-number">
                                    {{ $wisata }}
                                    <small>Wisata</small>
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Total RT&RW</span>
                                <span class="info-box-number">{{ $statistik->jumlahrt + $statistik->jumlahrw }}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                </div>

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Mohon dibaca dan dipahami</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body" style="display: block;">
                        <div class="row">
                            <div class="col-md-3 col-12">
                                <img src="https://2.bp.blogspot.com/-59DNjzogh0o/XBL5TFdklpI/AAAAAAAAQ5w/KtF4wSFV-p8AxsULi2LTCQVFXStjC-J7wCLcBGAs/s1600/Sinjai.png" alt="Dashboard" class="brand-image"
                                    width="80%" />
                            </div>
                            <div class="col-md-9 col-12">
                                <div class="alert alert-info alert-dismissible">
                                    <h5><i class="icon fas fa-info"></i> Perhatian !</h5>
                                    Segala Jenis Input data harap dipahami dan dilakukan secara prosedur, mengingat demi
                                    kelancaran para pengguna lainnya.
                                </div>
                                <p class="text-muted">Dibuat oleh : KKN UNHAS 112</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
@section('css-tambahan')

@endsection

@section('js-tambahan')

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@endsection
