@extends('layouts.frontend')

@section('page-title', 'About-us')


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
                  <tr>
                    <td>
                      <span class="icon pe-2">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_1"
                          x="0px" y="0px" viewBox="0 0 512 512"
                          style="enable-background:new 0 0 512 512; width: 30px; height: 30px" xml:space="preserve">
                          <circle style="fill:#F0F0F0;" cx="256" cy="256" r="256"></circle>
                          <g>
                            <path style="fill:#6DA544;"
                              d="M0,256c0,110.072,69.472,203.906,166.957,240.078V15.924C69.472,52.094,0,145.93,0,256z">
                            </path>
                            <path style="fill:#6DA544;"
                              d="M512,256c0-110.07-69.472-203.906-166.957-240.076v480.155C442.528,459.906,512,366.072,512,256z">
                            </path>
                          </g>
                          <g> </g>
                          <g> </g>
                          <g> </g>
                          <g> </g>
                          <g> </g>
                          <g> </g>
                          <g> </g>
                          <g> </g>
                          <g> </g>
                          <g> </g>
                          <g> </g>
                          <g> </g>
                          <g> </g>
                          <g> </g>
                          <g> </g>
                        </svg>
                      </span>
                      Nigeria
                    </td>
                    <td>550</td>
                    <td>$1</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection
