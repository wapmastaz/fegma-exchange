<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Femag-Exchange || @yield('page-title')</title>
  <link rel="icon" type="image/x-icon" href="{{ asset('project-pictures/logo.jpg') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/flaticon.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/animate.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  @stack('page-style')
</head>

<body class="home-5">

  <header class="header">
    <div class="main-navigation">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('project-pictures/logo-2.jpg') }}" alt="logo">
          </a>
          <div class="mobile-menu-right">
            <a href="#" class="mobile-search-btn search-box-outer"><i class="far fa-search"></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"
              aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"><i class="far fa-stream"></i></span>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="main_nav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item"><a class="nav-link" href="{{ route('sell') }}">Sell</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ route('exchange-rate') }}">Rates</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ route('faq') }}">Faq</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ route('support') }}">Support </a></li>
            </ul>
            <div class="header-nav-right">
              <div class="header-btn">
                <a href="{{ route('sell') }}" class="theme-btn">Trade Now</a>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>

  <main class="main">

    @yield('content')

  </main>

  <footer class="footer-area">

    <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 align-self-center">
            <p class="copyright-text">
              &copy; Copyright <span id="date"></span> <a href="#"> Cryptox </a> All Rights Reserved.
            </p>
          </div>
          <div class="col-lg-5 align-self-center">
            <ul class="footer-menu">
              <li><a href="{{ route('terms-condition') }}">Terms and Conditions</a></li>
              <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
            </ul>
          </div>
          <div class="col-lg-2 align-self-center">
            <ul class="footer-social">
              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fab fa-instagram"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>


  <a href="#" id="scroll-top"><i class="far fa-long-arrow-up"></i></a>
  <script src="{{ asset('frontend/js/jquery-3.6.0.min.js') }}"></script>
  <script src="{{ asset('frontend/js/modernizr.min.js') }}"></script>
  <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/js/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('frontend/js/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.appear.min.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('frontend/js/counter-up.js') }}"></script>
  <script src="{{ asset('frontend/js/countdown.min.js') }}"></script>
  <script src="{{ asset('frontend/js/chart.min.js') }}"></script>
  <script src="{{ asset('frontend/js/wow.min.js') }}"></script>
  <script src="{{ asset('frontend/js/main.js') }}"></script>
  @include('partial.notification')
  @stack('page-script')
</body>

</html>
