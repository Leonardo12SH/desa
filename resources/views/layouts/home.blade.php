<!DOCTYPE html>
<html dir="ltr" lang="id">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta name="author" content="PEMERINTAH DESA BONTO SALAMA" />
  <meta name="description" content="Desa Bonto Salama berinovasi dengan digitalisasi untuk meningkatkan pelayanan masyarakat. Temukan informasi terbaru dan layanan desa kami di sini.">
  
  <!-- Optional SEO meta tags -->
  <meta name="keywords" content="desa, bonto salama, BontoSalama KKN,Bonto Salama KKN UNHAS, bonto salama info, digitalisasi, pemerintah desa, layanan desa, bontosalama_info, Bonto salama info" />
  <meta name="robots" content="index, follow" />
  <link rel="canonical" href="https://bontosalama.info/" />
  
  <title>Desa Bonto Salama - Digitalisasi untuk Pelayanan Masyarakat</title>
  <link href="{{ asset('cdn/img/image_3.png') }}" rel="icon" />

  <!-- Preconnect and preload for performance -->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="preload" href="{{ asset('cdn/css/style.css') }}" as="style" />
  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400;1,700&amp;family=Rubik:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap" as="style" />

  <!-- Stylesheets -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400;1,700&amp;family=Rubik:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('cdn/css/style.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous"
        referrerpolicy="no-referrer" />
  
  @yield('css-tambahan')
</head>


<body class="body-scroll">
          <div class="wrapper clearfix" id="wrapperParallax">
                    <header class="header header-transparent header-sticky">
                              <nav class="navbar navbar-sticky navbar-expand-lg" id="primary-menu">
                                        <div class="container"> 
                                          <a class="logo navbar-brand" href="/">
                                            <div class="row">
                                              <div class="col-lg-2 col-xl-2 col-sm-3 col-md-3 col-6 me-3 text-center">
                                                <img class="logo logo-dark" src="https://2.bp.blogspot.com/-59DNjzogh0o/XBL5TFdklpI/AAAAAAAAQ5w/KtF4wSFV-p8AxsULi2LTCQVFXStjC-J7wCLcBGAs/s1600/Sinjai.png"
                                                width="120" alt="Logo" />
                                            <img class="logo logo-light" src="https://2.bp.blogspot.com/-59DNjzogh0o/XBL5TFdklpI/AAAAAAAAQ5w/KtF4wSFV-p8AxsULi2LTCQVFXStjC-J7wCLcBGAs/s1600/Sinjai.png" width="120" alt="Logo" />

                                              </div>
                                              <div class="col-lg-5 col-xl-5 col-sm-5 col-md-5 col-9 my-auto mt-4 col-2 ms-2">
                                                <h6>
                                                  Sinjai Barat
                                                  <p>
                                                    PEMERINTAH DESA BONTO SALAMA
                                                  </p>
                                                 </h6>
                                              </div>
                                            </div>
                                         
                                          
                                          </a>
                                                  <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarContent"
                                                            aria-expanded="false"><span class="navbar-toggler-icon"></span></button>
                                                  <div class="collapse navbar-collapse" id="navbarContent">
                                                            <ul class="navbar-nav ms-auto">
                                                                      <li class="nav-item active"><a class="nav-link" href="{{ url('/') }}#hero">Home</a></li>
                                                                      <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#statistik">Statistik</a></li>
                                                                      <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#features">Struktur</a></li>
                                                                      <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#berita">Berita</a></li>
                                                                      <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#about">Wisata</a></li>
                                                                      <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#register">Hubungi</a></li>
                                                            </ul>
                                                            @guest
                                                                      <div class="module-container">
                                                                                <div class="module module-cta"><a class="btn scroll-to" href="{{ route('login') }}">
                                                                                                    <span>Login</span></a></div>
                                                                      </div>
                                                            @else
                                                                      @if (auth()->user()->role == 'admin')
                                                                                <div class="module-container">
                                                                                          <div class="module module-cta"><a class="btn scroll-to" href="{{ route('admin') }}">
                                                                                                              <span>Admin Panel</span></a></div>
                                                                                </div>
                                                                      @elseif(auth()->user()->role == 'rw')
                                                                                <div class="module-container">
                                                                                          <div class="module module-cta"><a class="btn scroll-to" href="{{ route('role.rw') }}">
                                                                                                              <span>RW Panel</span></a></div>
                                                                                </div>
                                                                      @elseif(auth()->user()->role == 'rt')
                                                                                <div class="module-container">
                                                                                          <div class="module module-cta"><a class="btn scroll-to" href="{{ route('role.rt') }}">
                                                                                                              <span>RT Panel</span></a></div>
                                                                                </div>
                                                                      @else
                                                                                <div class="module-container">
                                                                                          <div class="module module-cta"><a class="btn scroll-to" href="{{ route('login') }}">
                                                                                                              <span>Logout</span></a></div>
                                                                                </div>
                                                                      @endif
                                                            @endguest
                                                  </div>
                                        </div>
                              </nav>
                    </header>

                    @yield('content')

                    <section class="cta" id="register">
                              <div class="container">
                                        <div class="row">
                                                  <!-- contact us -->
                                                  <div class="col-md-12">
                                                            <div class="heading text-center">
                                                                      <h5 class="heading-title">Hubungi Desa ?</h5>
                                                                      <p class="heading-subtitle">Isi Form ini untuk layangan pengaduan dan informasi desa</p>
                                                            </div>
                                                            @if ($message = Session::get('success'))
                                                                      <div class="alert alert-success alert-block">
                                                                                <strong>{{ $message }}</strong>
                                                                      </div>
                                                            @endif
                                                            <form class="contactForm shadow p-4 rounded-3" action="{{ route('contact') }}" method="POST">
                                                                      @csrf
                                                                      <div class="row">
                                                                                <div class="col-12 col-md-6">
                                                                                          <input class="form-control border-primary" type="text" id="wa_name" name="name"
                                                                                                    placeholder="Nama Lengkap" required="" />
                                                                                </div>
                                                                                <div class="col-12 col-md-6">
                                                                                          <input class="form-control border-primary" type="email" id="wa_email" name="email" placeholder="Email"
                                                                                                    required="" />
                                                                                </div>
                                                                                <div class="col-12 mb-4">
                                                                                          <textarea class="form-control border-primary" id="exampleFormControlTextarea1" placeholder="Isi pesan disini" name="body" rows="3"></textarea>
                                                                                          <small class="text-danger">Note : Segala pertanyaan anda akan kami balas memalui EMail
                                                                                                    yang anda
                                                                                                    kirimkan.</small>
                                                                                </div>
                                                                                <div class="col-12 text-center">
                                                                                          <button class="btn btn--secondary send_form" type="submit">Kirim Permintaan</button>
                                                                                </div>
                                                                      </div>
                                                            </form>
                                                  </div>
                                                  <!-- maps -->
                                                 
                                        </div>
                              </div>
                    </section>

                    <footer class="footer bg-secondary" id="footer">
                              <div class="footer-bottom">
                                        <div class="container">
                                                  <div class="row">
                                                            <div class="col-12">
                                                                      <div class="footer-copyright"><span>&copy; <script>document.write(new Date().getFullYear());</script> <a href="/">Desa Bonto Salama</a> Pengabdian
                                                                                          Masyarakat x PEMERINTAH BONTO SALAMA</span></div>
                                                            </div>
                                                  </div>
                                        </div>
                              </div>
                    </footer>
          </div>

          <script type="application/ld+json">
            {
              "@context": "https://schema.org",
              "@type": "LocalInformation",
              "name": "Desa Bonto Salama",
              "description": "Desa Bonto Salama berinovasi dengan digitalisasi untuk meningkatkan pelayanan masyarakat.",
              "url": "https://bontosalama.info/",
              "address": {
                "@type": "PostalAddress",
                "addressLocality": "Sinjai Barat",
                "addressRegion": "Sulawesi Selatan",
                "postalCode": "92612"
              },
            }
            </script>
            
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
                    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
                    crossorigin="anonymous">
          </script>
          <script src="{{ asset('cdn/js/script.js') }}"></script>
          <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=622e52b5e00e31001acff4d4&product=inline-reaction-buttons" async="async"></script>
          @yield('js-tambahan')
</body>

</html>