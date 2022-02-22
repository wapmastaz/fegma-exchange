@extends('layouts.frontend')

@section('page-title', 'Faqs')


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
                @php
                  use Illuminate\Support\Str;
                @endphp
                @if (count($faqs) > 0)
                  @foreach ($faqs as $key => $faq)
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="heading1">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                          data-bs-target="#{{ Str::slug($faq->question, '-') }}" aria-expanded="true"
                          aria-controls="{{ Str::slug($faq->question, '-') }}">
                          <span><i class="far fa-question"></i></span> {{ $faq->question }}
                        </button>
                      </h2>
                      <div id="{{ Str::slug($faq->question, '-') }}" class="accordion-collapse collapse"
                        aria-labelledby="heading1" data-bs-parent="#{{ Str::slug($faq->question, '-') }}">
                        <div class="accordion-body">
                          {{ $faq->answer }}
                        </div>
                      </div>
                    </div>
                  @endforeach
                @endif

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
