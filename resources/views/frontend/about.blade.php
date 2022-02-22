@extends('layouts.frontend')

@section('page-title', 'About-us')


@section('content')

  <div class="site-breadcrumb">
    <div class="container wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
      <h2 class="breadcrumb-title">About Us</h2>
      <ul class="breadcrumb-menu">
        <li><a href="{{ route('home') }}"><i class="far fa-home"></i> Home</a></li>
        <li class="active">About Us</li>
      </ul>
    </div>
  </div>

  <div class="about-area py-120">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="about-left">
            <div class="about-img">
              <img src="{{ asset('frontend/img/about/02.png') }}" alt="">
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="about-right">
            <div class="site-heading mb-3">
              <span class="site-title-tagline">About Us</span>
              <h2 class="site-title">Good rates and available around the clock
              </h2>
            </div>
            <p class="about-text">Femag-Exchange is a platform that enables customers to convert their bitcoins
              to cash at a reasonable price or preferred local currency..</p>
            <div class="about-list-wrapper">
              <ul class="about-list list-unstyled">
                <li>
                  <div class="icon"><span class="fas fa-check-circle"></span></div>
                  <div class="text">
                    <p>Customers can however sell their bitcoins and have money from the sales of the btc sent to their
                      bank account.</p>
                  </div>
                </li>
                <li>
                  <div class="icon"><span class="fas fa-check-circle"></span></div>
                  <div class="text">
                    <p>Banks don’t support bitcoin but we offer a secure medium of exchange where bitcoins would be
                      exchanged with local currency.</p>
                  </div>
                </li>
              </ul>
            </div>
            {{-- <a href="about.html" class="theme-btn">Discover More</a> --}}
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
