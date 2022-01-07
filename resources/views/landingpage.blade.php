<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Buku Catatan Keuangan - CATUANG</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets-landing/img/favicon.png" rel="icon">
  <link href="assets-landing/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="{{ asset('assets-landing/vendor/aos/aos.css') }}">
  <link rel="stylesheet" href="{{ asset('assets-landing/vendor/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets-landing/vendor/bootstrap-icons/bootstrap-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('assets-landing/vendor/glightbox/css/glightbox.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets-landing/vendor/remixicon/remixicon.css') }}">
  <link rel="stylesheet" href="{{ asset('assets-landing/vendor/swiper/swiper-bundle.min.css') }}">

  <!-- Template Main CSS File -->
  <link href="assets-landing/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart - v1.9.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <span>CATUANG</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="btn" href="{{ route('login')}}">Login</a></li>
          <li><a class="btn" href="{{ route('register')}}">Register</a></li>
          <!-- <li><a href="blog.html">Blog</a></li> -->
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Aplikasi Pembukuan Keuangan Mitra UMKM </h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Inovasi Pembukuan Digital Berbasis Website untuk Memudahkan Keuangan Mitra UMKM</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              {{-- <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Get Started</span>
                <i class="bi bi-arrow-right"></i> --}}
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets-landing/img/BACKGROUND.png" class="w-75" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
   
    <!-- ======= Team Section ======= -->
    <section id="team" class="team">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Team</h2>
          <p>Kelompok A-02 Informatika Terapan</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="assets-landing/img/team/team-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Dzulfiar Zahran Safhana</h4>
                <span>152018004</span>
                </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="assets-landing/img/team/team-2.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Fannie Muhamad Fadillah S</h4>
                <span>152018002</span>
                </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="assets-landing/img/team/team-3.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Andika Fauzi H</h4>
                <span>152018019</span>
                </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="assets-landing/img/team/team-4.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>M Yuan Ruslandi</h4>
                <span>152018105</span>
                </div>
            </div>
          </div>
          
        </div>
      </div>
    </section><!-- End Team Section -->

  
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>FlexStart</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->
      <!-- Main Content -->
      @yield('content')

      @yield('modal')

      <footer class="main-footer">
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="{{asset('assets-landing/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{asset('assets-landing/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets-landing/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets-landing/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets-landing/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets-landing/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets-landing/vendor/php-email-form/validate.js')}}"></script>

  @yield('lib-script')

  @yield('page-script')
  
  <!-- Template JS File -->
  <script src="assets-landing/js/main.js"></script>

  @yield('line-script')
</body>
</html>