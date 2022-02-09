@extends('layouts.frontend')

@section('page-title', 'Homepage')


@section('content')
  <div class="hero-section">
    <div class="hero-wrapper">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 col-lg-6">
            <div class="hero-content">
              <h6 class="hero-sub-title wow animate__animated animate__fadeInUp" data-wow-duration="1s"
                data-wow-delay=".25s">
                Take Control Of Your Money
              </h6>
              <h1 class="hero-title wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay=".50s">
                Best Platform <span>For ICO Crypto</span> Currency
              </h1>
              <p class="wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay=".75s">
                There are many variations of passages available but the majority have suffered
                alteration in some form by injected humour or randomised words.
              </p>
              <div class="hero-btn wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                <a href="#" class="theme-btn">Get Started</a>
                <div class="video-btn">
                  <a href="https://www.youtube.com/watch?v=ckHzmP1evNU" class="play-btn popup-youtube"><i
                      class="fas fa-play"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-6">
            <div class="hero-img wow animate__animated animate__fadeInRight" data-wow-duration="1s" data-wow-delay=".25s">
              <img src="{{ asset('frontend/img/hero/hero-1.png') }}" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="hero-shape">
        <div class="hero-shap-1"></div>
        <img class="hero-shape-2" src="{{ asset('frontend/img/shape/1.svg') }}" alt="">
      </div>
    </div>
  </div>
@endsection
