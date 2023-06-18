<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>tiketkita</title>

    <!-- Favicons -->
	  <link href="http://localhost:8000/assets/img/logo.png" rel="icon">
	  <link href="http://localhost:8000/assets/img/logo.png" rel="apple-touch-icon">

	  <!-- Google Fonts -->
	  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	  <!-- Vendor CSS Files -->
	  <link href="http://localhost:8000/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
	  <link href="http://localhost:8000/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
	  <link href="http://localhost:8000/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	  <link href="http://localhost:8000/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	  <link href="http://localhost:8000/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	  <link href="http://localhost:8000/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	  <link href="http://localhost:8000/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
	  <link href="http://localhost:8000/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

	  <!-- Template Main CSS File -->
	  <link href="http://localhost:8000/assets/css/style.css" rel="stylesheet">
</head>
<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">tiketkita</a></h1>
	  
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="/">Beranda</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang Kami</a></li>
          <li><a class="nav-link scrollto" href="#services">Layanan</a></li>
		  <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
          <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                   
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
		
    </div>
  </header><!-- End Header -->
  
    <div id="app">

        <!-- ======= Hero Section ======= -->
		<section id="hero" class="d-flex align-items-center" style="margin-top:100px">
            @yield('content')
        </section>
    </div>

  <!-- ======= Footer ======= -->
  <footer id="footer" style="margin-top:200px">
    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>tiketkita</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="http://localhost:8000/assets/vendor/purecounter/purecounter.js"></script>
  <script src="http://localhost:8000/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="http://localhost:8000/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="http://localhost:8000/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="http://localhost:8000/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="http://localhost:8000/assets/js/main.js"></script>
</body>
</html>