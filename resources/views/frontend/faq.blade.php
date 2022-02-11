@extends('layouts.frontend')

@section('page-title', 'About-us')


@section('content')

  <div class="site-breadcrumb">
    <div class="container wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
      <h2 class="breadcrumb-title">FAQ</h2>
      <ul class="breadcrumb-menu">
        <li><a href="{{ route('home') }}"><i class="far fa-home"></i> Home</a></li>
        <li class="active">Faq</li>
      </ul>
    </div>
  </div>

  <div class="faq-area py-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mx-auto">
          <div class="site-heading text-center">
            <span class="site-title-tagline">Faq's</span>
            <h2 class="site-title">General Asked Questions</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="faq-wrapper">
          <div class="row align-items-center">
            <div class="col-md-6">
              <div class="faq-img">
                <img src="{{ asset('frontend/img/faq/faq.png') }}" alt="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="accordion" id="accordion1">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="heading1">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1"
                      aria-expanded="true" aria-controls="collapse1">
                      <span><i class="far fa-question"></i></span> Do I Need A Business Plan ?
                    </button>
                  </h2>
                  <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1"
                    data-bs-parent="#accordion1">
                    <div class="accordion-body">
                      We denounce with righteous indignation and dislike men who
                      are so beguiled and demoralized by the charms of pleasure of the moment, so
                      blinded by desire.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="heading2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                      <span><i class="far fa-question"></i></span> How Long Should A Business Plan Be
                      ?
                    </button>
                  </h2>
                  <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2"
                    data-bs-parent="#accordion1">
                    <div class="accordion-body">
                      We denounce with righteous indignation and dislike men who
                      are so beguiled and demoralized by the charms of pleasure of the moment, so
                      blinded by desire.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="heading3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                      <span><i class="far fa-question"></i></span> What Payment Gateway You Support ?
                    </button>
                  </h2>
                  <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
                    data-bs-parent="#accordion1">
                    <div class="accordion-body">
                      We denounce with righteous indignation and dislike men who
                      are so beguiled and demoralized by the charms of pleasure of the moment, so
                      blinded by desire.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
