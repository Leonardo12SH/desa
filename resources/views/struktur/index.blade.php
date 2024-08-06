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
                                                 <img src="https://th.bing.com/th/id/R.32d2d26ae912f1a8ca4129111a752411?rik=ck9AYbtC2pzijw&riu=http%3a%2f%2f2.bp.blogspot.com%2f-BgAfxrRA4Ng%2fUmD0Ppj9YYI%2fAAAAAAAABD8%2fjDnT62ak7hg%2fs1600%2fstruktur%2bdesa.jpg&ehk=vfvj%2bEBzslMUF%2fS%2fCxuXCdT9tYUEIaJ6l2Kk%2f1QnHSw%3d&risl=&pid=ImgRaw&r=0" alt="" height="700px">
                                        </div>
                              </div>
                    </section>
                    <!-- /.content -->
          </div>
@endsection


