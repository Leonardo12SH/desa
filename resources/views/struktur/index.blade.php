@extends('layouts.admin.master')
@section('title')
          Struktur Organisasi
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
                                        <div class="row justify-content-center">
                                            <img src="{{ asset('struktur_fix.jpeg') }}" alt="gambar tidak ada" height="700px">
                                        </div>
                              </div>
                    </section>
                    <!-- /.content -->
          </div>
@endsection


