@extends('layouts.home')

@section('title')
Desa Bonto Salama
@endsection

@section('content')
    <!-- Hero Section -->
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
                            <img src="image.png" alt="Peta Desa Bonto Salama" height="100%">
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-divider-bottom">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
                </svg>
            </div>
        </div>
    </div>
</section>

    <!-- Statistik Desa -->
    <section class="processes" id="statistik">
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
                @php
                    $card_colors = ['success', 'primary', 'info', 'warning'];
                @endphp
                @foreach ([
                    ['Jumlah Penduduk', $statistik->jumlahpenduduk ?? 0],
                    ['Jumlah Dusun', $statistik->jumlahdusun ?? 0],
                    ['Jumlah RT', $statistik->jumlahrt ?? 0],
                    ['Jumlah RW', $statistik->jumlahrw ?? 0]
                ] as $index => [$title, $value])
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card shadow rounded-3 border-{{ $card_colors[$index] }} animate__animated animate__fadeIn">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold">{{ $title }}</p>
                                        <h5 class="font-weight-bolder">{{ $value }}</h5>
                                    </div>
                                </div>
                                <span>Data Tahun {{ $statistik->tahun ?? 'N/A' }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Struktur Organisasi -->
    <section class="processes text-center" id="features">
        <div class="container">
            <div class="row clearfix">
                <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 mb-xl-0">
                    <div class="heading heading-3 text-center">
                        <p class="heading-subtitle">Struktur Organisasi</p>
                        <h2 class="heading-title">Struktur Desa Bonto Salama</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <img src="{{ asset('struktur_fix.jpeg') }}" alt="Struktur Desa" class="img-fluid animate__animated animate__fadeIn">
                </div>
            </div>
        </div>
    </section>

    <!-- Berita Desa -->
    <section class="processes" id="berita">
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
                    <div class="col-md-4 col-10 mb-4">
                        <a href="{{ route('home.berita.baca', $blog->slug_url) }}">
                            <div class="card rounded-20 shadow-sm p-3 animate__animated animate__fadeInUp">
                                <img src="{{ asset('cdn/blog/' . $blog->image) }}" alt="{{ $blog->title }}" class="img-fluid rounded-20">
                                <div class="artikel mt-3">
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
                        <img src="{{ asset('cdn/img/belajar.svg') }}" alt="Artikel Kosong">
                    </div>
                    <p class="text-center">Belum ada informasi</p>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Potensi Wisata -->
    <section class="about bg-gray" id="about">
        <div class="container">
            <div class="row align-items-center text-center-xs">
                <div class="col-12 col-md-6 col-lg-5 offset-lg-1">
                    <div class="heading heading-1">
                        <p class="heading-subtitle">Potensi Wisata</p>
                        <h2 class="heading-title">Wisata Menarik</h2>
                        <p class="heading-desc">Beberapa objek wisata yang dapat Anda kunjungi di Desa Bonto Salama</p>
                    </div>
                    <div class="about-action">
                        <a class="btn btn--primary mb-3" href="{{ route('home.wisata') }}">Lihat Daftar Wisata</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 400px">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63575.96615310825!2d119.99790192880353!3d-5.184120617021943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbe9bdf60993205%3A0x382ed37261f9e04d!2sBonto%20Salama%2C%20Kec.%20Sinjai%20Bar.%2C%20Kabupaten%20Sinjai%2C%20Sulawesi%20Selatan!5e0!3m2!1sid!2sid!4v1720926656963!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
