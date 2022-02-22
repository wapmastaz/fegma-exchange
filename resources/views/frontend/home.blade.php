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
                Tired of low rate
              </h6>
              <h1 class="hero-title wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay=".50s">
                We Offer The <span>Best</span> Value
              </h1>
              <p class="wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay=".75s">
                Good rates and available around the clock
              </p>
              <div class="hero-btn wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                <a href="#" class="theme-btn">Get Started</a>
              </div>
            </div>
          </div>
          {{-- <div class="col-md-6 col-lg-6">
            <div class="hero-img wow animate__animated animate__fadeInRight" data-wow-duration="1s" data-wow-delay=".25s">
              <img src="{{ asset('project-pictures/bg-removebg-preview.png') }}" alt="">
            </div>
          </div> --}}
        </div>
      </div>
    </div>
  </div>

  <div class="road-map py-120" style="background-color: #f7f7f7">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mx-auto">
          <div class="site-heading text-center">
            <span class="site-title-tagline"> Credibility and Assurance</span>
            <h2 class="site-title">Why our customers love us </h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="road-map-timeline">
          <ul class="road-map-timeline-list">
            <li class="road-map-timeline-item">
              <div class="road-map-item-single">
                <div class="road-map-item-content blur-bg-2">
                  <h3>Easy to Use</h3>
                  <div class="road-map-item-info d-flex justify-content-center align-items-center">
                    <img src="{{ asset('frontend/img/team/1.png') }}" style="width: 170px" alt="">
                    <p>A simple interface and easy navigation that offers a seamless trading experience.</p>
                  </div>
                </div>
              </div>
            </li>
            <li class="road-map-timeline-item">
              <div class="road-map-item-single">
                <div class="road-map-item-content blur-bg-2">
                  <h3>Fast Payment</h3>
                  <div class="road-map-item-info d-flex justify-content-center align-items-center">
                    <img src="{{ asset('frontend/img/team/2.png') }}" style="width: 170px" alt="">
                    <p>Sell your bitcoins fast. No more delays in payment.</p>
                  </div>
                </div>
              </div>
            </li>
            <li class="road-map-timeline-item">
              <div class="road-map-item-single">
                <div class="road-map-item-content blur-bg-2">
                  <h3>Registration Free</h3>
                  <div class="road-map-item-info d-flex justify-content-center align-items-center">
                    <img src="{{ asset('frontend/img/team/3.png') }}" style="width: 170px" alt="">
                    <p>Sit back and relax! No more hassles of registration!</p>
                  </div>
                </div>
              </div>
            </li>
            <li class="road-map-timeline-item">
              <div class="road-map-item-single">
                <div class="road-map-item-content blur-bg-2">
                  <h3>Safe and Secure</h3>
                  <div class="road-map-item-info d-flex justify-content-center align-items-center">
                    <img src="{{ asset('frontend/img/team/4.png') }}" style="width: 170px" alt="">
                    <p>We strive to create a trusted environment where customers feel confident in making transactions.
                    </p>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="counter-area pd-50 text-white">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mx-auto">
          <div class="site-heading text-center">
            <h2 class="site-title text-white">How It Works </h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <div class="feature-item">
            <div class="feature-content">
              <h5 class="text-white">1. Copy Wallet address</h5>
              <p class="text-white">All you need to do is copy our wallet address, then transfer bitcoins using your
                bitcoin wallet.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="feature-item">
            <div class="feature-content">
              <h5 class="text-white">2. Input Details</h5>
              <p class="text-white">Fill out the required information in the exchange form and send your order</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="feature-item">
            <div class="feature-content">
              <h5 class="text-white">3. Get Paid</h5>
              <p class="text-white">Upon verification of your order, we pay the equivalent amount requested to your
                bank account</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="download-area py-120">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="download-img">
            <img src="{{ asset('frontend/img/download/02.png') }}" alt="">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="download-content">
            <div class="site-heading mb-3">
              <span class="site-title-tagline">Cryptox App</span>
              <h2 class="site-title my-3">Download Our <span>App</span></h2>
            </div>
            <p class="about-text">There are many variations of passages of Lorem Ipsum available,
              but the majority have suffered alteration in some form, by injected humour, or
              randomised words which don't look even.</p>
            <p class="mt-3">It is a long established fact that a reader will be distracted by the
              readable content of a page when looking at its layout. </p>
            <div class="download-btn">
              <a href="#" class="theme-btn">
                <span class="download-btn-content">
                  <span class="fab fa-google-play download-btn-icon"></span>
                  <span class="download-text">
                    <span class="download-text-subtitle">Get It On</span>
                    <span class="download-text-title">Google Play</span>
                  </span>
                </span>
              </a>
              <a href="#" class="theme-btn theme-btn2">
                <span class="download-btn-content">
                  <span class="fab fa-apple download-btn-icon"></span>
                  <span class="download-text">
                    <span class="download-text-subtitle">Get It On</span>
                    <span class="download-text-title">App Store</span>
                  </span>
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
