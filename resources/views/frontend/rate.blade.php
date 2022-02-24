@extends('layouts.frontend')

@section('page-title', 'Rate')


@section('content')

  <div class="site-breadcrumb">
    <div class="container wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
      <h2 class="breadcrumb-title">Exchange Rate</h2>
      <ul class="breadcrumb-menu">
        <li><a href="{{ route('home') }}"><i class="far fa-home"></i> Home</a></li>
        <li class="active">Exchange Rate</li>
      </ul>
    </div>
  </div>

  <div class="token-sale py-120 shape-2">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mx-auto">
          <div class="site-heading text-center wow animate__ animate__fadeInUp animated" data-wow-duration="1s"
            data-wow-delay=".25s"
            style="visibility: visible; animation-duration: 1s; animation-delay: 0.25s; animation-name: fadeInUp;">
            <h2 class="site-title">Exchange <span>Rates</span></h2>
            <p style="color: #000" class="mt-2">
              It is a long established fact that a reader will be distracted by the readable
              content
              of a page when looking at its layout.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <div class="token-info blur-bg-2 wow animate__ animate__fadeInLeft animated" data-wow-duration="1s"
            data-wow-delay=".25s"
            style="visibility: visible; animation-duration: 1s; animation-delay: 0.25s; animation-name: fadeInLeft;">
            <h4>Our Exchange Rates</h4>
            <div class="token-info-table table-responsive">
              <table class="table">
                <thead>
                  <th>Country</th>
                  <th>Value</th>
                  <th>USD</th>
                </thead>
                <tbody>
                  @if (count($rates) > 0)
                    @foreach ($rates as $key => $rate)
                      <tr>
                        <td>
                          <span class="icon pe-2">
                            <img src="{{ asset('country/' . $rate->country . '.svg') }}"
                              style="width: 20px; height: 20px;"
                              alt="{{ getCountryData($rate->country)['countryname'] }} Flag">
                          </span>
                          {{ getCountryData($rate->country)['countryname'] }}
                        </td>
                        <td>{!! moneyFormat($rate->country, $rate->value) !!}</td>
                        <td>{{ '$' . number_format($rate->amount_in_usd, 2) }}</td>
                      </tr>
                    @endforeach
                  @endif

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection
