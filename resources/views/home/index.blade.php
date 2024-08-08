@extends('layouts.home')

@section('title')
    Selamat datang di desa bonto salama
@endsection

@section('content')
    <section class="hero hero-lead hero-lead-1 bg-gray" id="hero">
        <div class="hero-cotainer">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6 d-flex justify-content-center">
                        <div class="hero-content">
                            <h1 class="hero-title">Selamat Datang Di Desa Bonto Salama ...</h1>
                            <p class="hero-desc">Website Layanan Terpadu Desa Bonto Salama, Informasi Potensi Desa dan
                                Digitalisasi Desa</p>
                            <div class="hero-action"><a class="btn btn--primary scroll-to" href="#features">Cek
                                    Potensi</a></div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="hero-img">
                            <div class="ignielYTlazy rounded-20" data-embed="P5OWsFDfUQQ">
                                <span class="button"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-divider-bottom">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                    preserveAspectRatio="none">
                    <path
                        d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                        class="shape-fill"></path>
                </svg>
            </div>
        </div>
    </section>

    <section class="processes" id="berita">
        <div class="container">
            <div class="row clearfix">
                <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                    <div class="heading heading-3 text-center">
                        <p class="heading-subtitle">Data Statistik</p>
                        <h2 class="heading-title">Statistik Desa Bonto Salama</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                 <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                        <div class="card shadow ounded-3 border-success">
                          <div class="card-body p-3">
                            <div class="row">
                              <div class="col-8">
                                <div class="numbers">
                                  <p class="text-sm mb-0 text-capitalize font-weight-bold">Jumlah Penduduk</p>
                                  <h5 class="font-weight-bolder">
                                    {{ $statistik->jumlahpenduduk }}
                                  </h5>
                                </div>
                            </div>
                            <span class="">Jumlah penduduk di Desa Bonto Salama Tahun {{ $statistik->tahun }}</span>
                              
                            </div>
                          </div>
                        </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card shadow rounded-3 border-primary">
                      <div class="card-body p-3">
                        <div class="row">
                          <div class="col-8">
                            <div class="numbers">
                              <p class="text-sm mb-0 text-capitalize font-weight-bold">Jumlah Dusun</p>
                              <h5 class="font-weight-bolder">
                                {{ $statistik->jumlahdusun }}
                              </h5>
                            </div>
                        </div>
                        <span class="">Jumlah penduduk di Desa Bonto Salama Tahun {{ $statistik->tahun }}</span>
                         
                        </div>
                      </div>
                    </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card shadow ounded-3 border-info">
                  <div class="card-body p-3">
                    <div class="row">
                      <div class="col-8">
                        <div class="numbers">
                          <p class="text-sm mb-0 text-capitalize font-weight-bold">Jumlah RT</p>
                          <h5 class="font-weight-bolder">
                            {{ $statistik->jumlahrt }}
                          </h5>
                        </div>
                    </div>
                    <span class="">Jumlah penduduk di Desa Bonto Salama Tahun {{ $statistik->tahun }}</span>
                    
                    </div>
                  </div>
                </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card shadow ounded-3 border-warning">
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-8">
                    <div class="numbers">
                      <p class="text-sm mb-0 text-capitalize font-weight-bold">Jumlah RW</p>
                      <h5 class="font-weight-bolder">
                        {{ $statistik->jumlahrw }}
                      </h5>
                    </div>
                </div>
                <span class="">Jumlah penduduk di Desa Bonto Salama Tahun {{ $statistik->tahun }}</span>
                 
                </div>
              </div>
            </div>
    </div>
            </div>
        </div>
    </section>
    <section class="processes text-center" id="features">
        <div class="container">
            <div class="row clearfix">
                <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                    <div class="heading heading-3 text-center">
                        <p class="heading-subtitle">Struktur Organisasi</p>
                        <h2 class="heading-title">Struktur Desa Bonto Salama</h2>
                        <div class="divider">
                            <div class="line"></div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="row">

                <div class="col-12 col-lg-4">
                    <div class="process-card process-card-1">
                        <div class="process-content">
                            <div class="process-phase">
                                <p><i class="fas fa-user"></i></p>
                            </div>
                            <h3 class="process-title">Warga Desa</h3>
                            <p class="process-desc">Pengelolaan Data Warga Digitalisasi</p>
                        </div>
                    </div>
                </div>


                <div class="col-12 col-lg-4">
                    <div class="process-card process-card-2">
                        <div class="process-content">
                            <div class="process-phase">
                                <p><i class="fas fa-search"></i></p>
                            </div>
                            <h3 class="process-title">Wisata</h3>
                            <p class="process-desc">Pengelolaan Wisata Desa Digital
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-12 col-lg-4">
                    <div class="process-card process-card-3">
                        <div class="process-content">
                            <div class="process-phase">
                                <p><i class="fas fa-book"></i></p>
                            </div>
                            <h3 class="process-title">Buku Digital</h3>
                            <p class="process-desc">Menjadikan Desa Digitalisasi</p>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="row">
                <div class="row justify-content-center">
                    <img src="https://th.bing.com/th/id/R.32d2d26ae912f1a8ca4129111a752411?rik=ck9AYbtC2pzijw&riu=http%3a%2f%2f2.bp.blogspot.com%2f-BgAfxrRA4Ng%2fUmD0Ppj9YYI%2fAAAAAAAABD8%2fjDnT62ak7hg%2fs1600%2fstruktur%2bdesa.jpg&ehk=vfvj%2bEBzslMUF%2fS%2fCxuXCdT9tYUEIaJ6l2Kk%2f1QnHSw%3d&risl=&pid=ImgRaw&r=0" alt="" height="700px">
           </div>
            </div>
        </div>
    </section>

    <section class="processes" id="">
        <div class="container">
            <div class="row clearfix">
                <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                    <div class="heading heading-3 text-center">
                        <p class="heading-subtitle">Berita Desa</p>
                        <h2 class="heading-title">Layanan Informasi Seputar Desa</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @forelse ($info as $blog)
                    <div class="col-md-4 col-10">
                        <a href="{{ route('home.berita.baca', $blog->slug_url) }}">
                            <div class="card rounded-20 shadow-sm p-3">
                                <img src="{{ asset('cdn/blog/' . $blog->image) }}" alt="{{ $blog->title }}"
                                    class="img-fluid rounded-20">
                                <div class="artikel">
                                    <h5 class="text-limit">{{ $blog->title }}</h5>
                                    <p class="text-limit">{{ $blog->kategori }}</p>
                                </div>
                                <hr class="mb-3">
                                <small class="text-muted">Selengkapnya ...</small>
                            </div>
                        </a>
                    </div>
                @empty
                    <div class="col-md-3 col-12">
                        <img src="{{ asset('cdn/img/error.svg') }}" alt="Artikel Kosong">
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <section class="about bg-gray" id="about">
        <div class="container">
            <div class="row align-items-center text-center-xs">
                <div class="col-12 col-md-6 col-lg-6">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="img-fluid mb-5 rounded-50" src="{{ asset('cdn/img/image_1.jpg') }}"
                                    alt="App screenshot" />
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid mb-5 rounded-50" src="{{ asset('cdn/img/image_2.jpg') }}"
                                    alt="App screenshot" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-5 offset-lg-1">
                    <div class="heading heading-1">
                        <p class="heading-subtitle">Potensi Wisata</p>
                        <h2 class="heading-title">Wisata Menarik</h2>
                        <p class="heading-desc">Beberapa objek wisata yang kamu kunjungi di desa bonto salama ini
                        </p>
                    </div>
                    <div class="about-action"><a class="btn btn--primary" href="{{ route('home.wisata') }}">Lihat Daftar
                            Wisata</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
