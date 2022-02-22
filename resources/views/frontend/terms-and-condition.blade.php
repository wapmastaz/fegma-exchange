@extends('layouts.frontend')

@section('page-title', 'Terms and Condition')

@push('page-style')
  <style>
    .contact-area p {
      margin-bottom: 25px
    }

    .contact-area ul {
      margin-bottom: 25px
    }

    .contact-area ul li {
      display: flex;
      align-items: baseline;
      margin-bottom: 15px
    }

    .contact-area .title {
      margin-bottom: 10px;
      font-size: 20px;
    }

  </style>
@endpush


@section('content')

  <div class="site-breadcrumb">
    <div class="container wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
      <h2 class="breadcrumb-title">Terms And Condition</h2>
      <ul class="breadcrumb-menu">
        <li><a href="{{ route('home') }}"><i class="far fa-home"></i> Home</a></li>
        <li class="active">Terms And Condition</li>
      </ul>
    </div>
  </div>

  <div class="contact-area pd-50">
    <div class="container">
      <div class="contact-wrapper">
        <div class="row">
          <div class="col-md-12">
            <ul style="list-style-type:circle">
              <li><span class="fas fa-check me-2"></span>
                <span>At Sellfastpayfast LTD, we DO NOT trade on your behalf, we are
                  strictly a intermediary consulting firm
                  between buyers and sellers of bitcoin.</span>
              </li>
              <li><span class="fas fa-check me-2"></span>
                <span>Any amount sent less than $500 will not be refunded . Please ensure to refresh this page due to
                  wallet
                  address changes .</span>

              </li>
              <li><span class="fas fa-check me-2"></span> <span>We do NOT store or keep bitcoins for clients. If FOR ANY
                  REASON
                  this is done, it will be at your own
                  discretion we WILL NOT be held liable for any losses which may have occurred or you may have incurred
                  due
                  to any transactions willingly done by you.</span> </li>
              <li><span class="fas fa-check me-2"></span> <span>We do not trade or represent ourself as any form of
                  investment
                  company, therefore you are very aware
                  that we are not offering any form of investment packages.</span> </li>
              <li><span class="fas fa-check me-2"></span> <span>Take note of the following; if you choose to proceed and
                  deposit
                  your bitcoins on our website, ANY
                  action taken by you after depositing these bitcoins DIRECTLY into the wallet on our website will be at
                  your own risk.</span> </li>
              <li><span class="fas fa-check me-2"></span> <span>Sellfastpayfast Ltd will not be held liable for any losses
                  you
                  may incur or which may occur due to the
                  action you have taken after depositing your bitcoins.</span> </li>
            </ul>
            <h4 class="title">DISCLAIMER</h4>
            <p>Any money sent to us privately apart from selling your bitcoins on our website is at your own Risk.
              Sellfastpayfast LTD will not be responsible for any such losses.
              You are fully aware, not under duress or undue influence, of age, of sound mind and willingly agreeing to
              these terms and conditions set out on our website.</p>
            <p>Sellfast payfast will not be responsible for any loss of investment in bitcoins.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
