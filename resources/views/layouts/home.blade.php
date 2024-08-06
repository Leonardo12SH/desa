<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
          <meta charset="utf-8" />
          <meta http-equiv="X-UA-Compatible" content="IE=edge" />
          <meta name="author" content="PEMERINTAH DESA BONTO SALAMA" />
          <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
          <meta name="description" content="Digitalisasi Desa Bonto Salama With PEMERINTAH DESA BONTO SALAMA" />
          <title>@yield('title')</title>
          <link href="{{ asset('cdn/images/favicon/favicon.png') }}" rel="icon" />

          <link rel="preconnect" href="https://fonts.gstatic.com" />
          <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400;1,700&amp;family=Rubik:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap"
                    rel="stylesheet" />
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
                                              <div class="col-lg-2 col-xl-2 col-sm-2 col-md-2 col-5 me-3">
                                                <img class="logo logo-dark" src="https://2.bp.blogspot.com/-59DNjzogh0o/XBL5TFdklpI/AAAAAAAAQ5w/KtF4wSFV-p8AxsULi2LTCQVFXStjC-J7wCLcBGAs/s1600/Sinjai.png"
                                                width="120" alt="Logo" />
                                            <img class="logo logo-light" src="https://2.bp.blogspot.com/-59DNjzogh0o/XBL5TFdklpI/AAAAAAAAQ5w/KtF4wSFV-p8AxsULi2LTCQVFXStjC-J7wCLcBGAs/s1600/Sinjai.png" width="120" alt="Logo" />

                                              </div>
                                              <div class="col-lg-5 col-xl-5 col-sm-5 col-md-5 col-3 my-auto mt-4">
                                                <h6>
                                                  PEMERINTAH DESA BONTO SALAMA
                                                  <p>Sinjai Barat</p>
                                                 </h6>
                                              </div>
                                            </div>
                                         
                                          
                                          </a>
                                                  <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarContent"
                                                            aria-expanded="false"><span class="navbar-toggler-icon"></span></button>
                                                  <div class="collapse navbar-collapse" id="navbarContent">
                                                            <ul class="navbar-nav ms-auto">
                                                                      <li class="nav-item active"><a class="nav-link" href="#hero">Home</a></li>
                                                                      <li class="nav-item"><a class="nav-link" href="#features">Layanan</a></li>
                                                                      <li class="nav-item"><a class="nav-link" href="#about">Wisata</a></li>
                                                                      <li class="nav-item"><a class="nav-link" href="#register">Hubungi</a></li>
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
                                                  <div class="col-md-6">
                                                            <div class="heading text-center">
                                                                      <h5 class="heading-title">Hubungi Desa ?</h5>
                                                                      <p class="heading-subtitle">Isi Form ini untuk layangan pengaduan dan informasi desa</p>
                                                            </div>
                                                            @if ($message = Session::get('success'))
                                                                      <div class="alert alert-success alert-block">
                                                                                <strong>{{ $message }}</strong>
                                                                      </div>
                                                            @endif
                                                            <form class="contactForm" action="{{ route('contact') }}" method="POST">
                                                                      @csrf
                                                                      <div class="row">
                                                                                <div class="col-12 col-md-6">
                                                                                          <input class="form-control" type="text" id="wa_name" name="name"
                                                                                                    placeholder="Nama Lengkap" required="" />
                                                                                </div>
                                                                                <div class="col-12 col-md-6">
                                                                                          <input class="form-control" type="email" id="wa_email" name="email" placeholder="Email"
                                                                                                    required="" />
                                                                                </div>
                                                                                <div class="col-12 mb-4">
                                                                                          <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Isi pesan disini" name="body" rows="3"></textarea>
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
                                                  <div class="col-md-6">
                                                            <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
                                                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63575.96615310825!2d119.99790192880353!3d-5.184120617021943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbe9bdf60993205%3A0x382ed37261f9e04d!2sBonto%20Salama%2C%20Kec.%20Sinjai%20Bar.%2C%20Kabupaten%20Sinjai%2C%20Sulawesi%20Selatan!5e0!3m2!1sid!2sid!4v1720926656963!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                            </div>
                                                  </div>
                                        </div>
                              </div>
                    </section>

                    <footer class="footer bg-secondary" id="footer">
                              <div class="footer-bottom">
                                        <div class="container">
                                                  <div class="row">
                                                            <div class="col-12">
                                                                      <div class="footer-copyright"><span>2021 &copy; <a href="/">Desa Bonto Salama</a> Pengabdian
                                                                                          Masyarakat x PEMERINTAH BONTO SALAMA</span></div>
                                                            </div>
                                                  </div>
                                        </div>
                              </div>
                    </footer>
          </div>

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