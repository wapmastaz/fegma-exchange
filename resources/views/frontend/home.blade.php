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
          <div class="col-md-6 col-lg-6">
            <div class="hero-img wow animate__animated animate__fadeInRight" data-wow-duration="1s" data-wow-delay=".25s">
              <img src="assets/img/hero/hero-2.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="road-map py-120">
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
                  <h3>January 15, 2021</h3>
                  <div class="road-map-item-info">
                    <h5>Idea Generation</h5>
                    <p>There are many variations of passages available but the majority have
                      suffered alteration injected.</p>
                  </div>
                </div>
              </div>
            </li>
            <li class="road-map-timeline-item">
              <div class="road-map-item-single">
                <div class="road-map-item-content blur-bg-2">
                  <h3>February 20, 2021</h3>
                  <div class="road-map-item-info">
                    <h5>Market Research</h5>
                    <p>There are many variations of passages available but the majority have
                      suffered alteration injected.</p>
                  </div>
                </div>
              </div>
            </li>
            <li class="road-map-timeline-item">
              <div class="road-map-item-single">
                <div class="road-map-item-content blur-bg-2">
                  <h3>March 12, 2021</h3>
                  <div class="road-map-item-info">
                    <h5>Business Plan</h5>
                    <p>There are many variations of passages available but the majority have
                      suffered alteration injected.</p>
                  </div>
                </div>
              </div>
            </li>
            <li class="road-map-timeline-item road-map-timeline-point">
              <div class="road-map-item-single">
                <div class="road-map-item-content blur-bg-2">
                  <h3>April 29, 2021</h3>
                  <div class="road-map-item-info">
                    <h5>Start Development</h5>
                    <p>There are many variations of passages available but the majority have
                      suffered alteration injected.</p>
                  </div>
                </div>
              </div>
            </li>
            <li class="road-map-timeline-item road-map-timeline-point">
              <div class="road-map-item-single">
                <div class="road-map-item-content blur-bg-2">
                  <h3>May 18, 2021</h3>
                  <div class="road-map-item-info">
                    <h5>Pre Sale Launch</h5>
                    <p>There are many variations of passages available but the majority have
                      suffered alteration injected.</p>
                  </div>
                </div>
              </div>
            </li>
            <li class="road-map-timeline-item road-map-timeline-point">
              <div class="road-map-item-single">
                <div class="road-map-item-content blur-bg-2">
                  <h3>June 14, 2021</h3>
                  <div class="road-map-item-info">
                    <h5>Launch The Platform</h5>
                    <p>There are many variations of passages available but the majority have
                      suffered alteration injected.</p>
                  </div>
                </div>
              </div>
            </li>
          </ul>
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
