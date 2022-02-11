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
              <h2 class="site-title">We Offer Best ICO Crypto Solutions For You
              </h2>
            </div>
            <p class="about-text">There are many variations of passages of Lorem Ipsum available,
              but the majority have suffered alteration in some form, by injected humour, or
              randomised words which don't look even.</p>
            <div class="about-list-wrapper">
              <ul class="about-list list-unstyled">
                <li>
                  <div class="icon"><span class="fas fa-check-circle"></span></div>
                  <div class="text">
                    <p>Take a look at our round up of the best shows</p>
                  </div>
                </li>
                <li>
                  <div class="icon"><span class="fas fa-check-circle"></span></div>
                  <div class="text">
                    <p>It has survived not only five centuries</p>
                  </div>
                </li>
                <li>
                  <div class="icon"><span class="fas fa-check-circle"></span></div>
                  <div class="text">
                    <p>Lorem Ipsum has been the ndustry standard dummy text</p>
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
