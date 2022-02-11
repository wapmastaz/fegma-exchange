<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('page-title')</title>
  <link rel="icon" type="image/x-icon" href="{{ asset('frontend/img/logo/favicon.png') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/all-fontawesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/flaticon.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/animate.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
</head>

<body class="home-5">
  {{-- <div class="preloader">
    <div class="loader">
      <div class="loader-box-1"></div>
      <div class="loader-box-2"></div>
    </div>
  </div> --}}
  <header class="header">
    <div class="main-navigation">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index-2.html">
            <img src="{{ asset('frontend/img/logo/logo.png') }}" alt="logo">
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
              <li class="nav-item"><a class="nav-link" href="#">Sell</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Rates</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ route('faq') }}">Faq</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ route('support') }}">Support </a></li>
            </ul>
            <div class="header-nav-right">
              <div class="header-nav-search">
                <a href="#" class="search-box-outer"><i class="far fa-search"></i></a>
              </div>
              <div class="header-btn">
                <a href="#" class="theme-btn">Trade Now</a>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>


  <div class="search-popup">
    <button class="close-search"><span class="far fa-times"></span></button>
    <form action="#">
      <div class="form-group">
        <input type="search" name="search-field" placeholder="Search Here..." required>
        <button type="submit"><i class="far fa-search"></i></button>
      </div>
    </form>
  </div>

  <main class="main">

    @yield('content')

  </main>

  <footer class="footer-area">
    <div class="footer-widget">
      <div class="container">
        <div class="row footer-widget-wrapper pt-100 pb-70">
          <div class="col-md-6 col-lg-4">
            <div class="footer-widget-box about-us">
              <a href="#" class="footer-logo">
                <img src="{{ asset('frontend/img/logo/logo.png') }}" alt="">
              </a>
              <p class="mb-20">
                We are many variations of passages available but the majority have suffered alteration
                in some form by injected humour.
              </p>
              <div class="footer-contact">
                <ul>
                  <li><i class="far fa-map-marker-alt"></i>25/B Milford Road, New York, USA</li>
                  <li><a href="tel:+21236547898"><i class="far fa-phone"></i>+2 123 654 7898</a></li>
                  <li><a
                      href="https://live.themewild.com/cdn-cgi/l/email-protection#89fafcf9f9e6fbfdc9ecf1e8e4f9e5eca7eae6e4"><i
                        class="far fa-envelope"></i><span class="__cf_email__"
                        data-cfemail="1c6f696c6c736e685c79647d716c7079327f7371">[email&#160;protected]</span></a> </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-2">
            <div class="footer-widget-box list">
              <h4 class="footer-widget-title">Company</h4>
              <ul class="footer-list">
                <li><a href="#"><i class="fas fa-caret-right"></i> About Us</a></li>
                <li><a href="#"><i class="fas fa-caret-right"></i> Latest Blog</a></li>
                <li><a href="#"><i class="fas fa-caret-right"></i> Terms Of Service</a></li>
                <li><a href="#"><i class="fas fa-caret-right"></i> Privacy Policy</a></li>
                <li><a href="#"><i class="fas fa-caret-right"></i> Team Members</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-2">
            <div class="footer-widget-box list">
              <h4 class="footer-widget-title">Quick Links</h4>
              <ul class="footer-list">
                <li><a href="#"><i class="fas fa-caret-right"></i> Contact Us</a></li>
                <li><a href="#"><i class="fas fa-caret-right"></i> FAQ's</a></li>
                <li><a href="#"><i class="fas fa-caret-right"></i> Token Sale</a></li>
                <li><a href="#"><i class="fas fa-caret-right"></i> Help Center</a></li>
                <li><a href="#"><i class="fas fa-caret-right"></i> Live Chat</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="footer-widget-box list">
              <h4 class="footer-widget-title">Newsletter</h4>
              <div class="footer-newsletter">
                <p>Subscribe Our Newsletter To Get Latest Update And News, Stay Connected With Us.</p>
                <div class="subscribe-form">
                  <form action="#">
                    <div class="form-group">
                      <input type="email" class="form-control" placeholder="Your Email">
                      <button class="theme-btn" type="submit">
                        Subscribe <i class="far fa-paper-plane"></i>
                      </button>
                    </div>
                  </form>
                </div>
              </div>
              <ul class="footer-social">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 align-self-center">
            <p class="copyright-text">
              &copy; Copyright <span id="date"></span> <a href="#"> Cryptox </a> All Rights Reserved.
            </p>
          </div>
          <div class="col-lg-6 align-self-center">
            <ul class="footer-menu">
              <li><a href="#">Support</a></li>
              <li><a href="#">Terms Of Services</a></li>
              <li><a href="#">Privacy Policy</a></li>
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
</body>

</html>
