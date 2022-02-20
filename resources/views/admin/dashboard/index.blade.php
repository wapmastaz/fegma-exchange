@extends('admin.layouts.app')

@section('contents')
  <div class="row">
    <div class="col-xl-3 col-lg-6 col-md-12">
      <div class="card">
        <div class="card-body">
          <svg class="card-custom-icon header-icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24"
            width="24px" fill="#000000">
            <path d="M0 0h24v24H0V0z" fill="none"></path>
            <path d="M5 8v12h14V8H5zm7 6c-2.76 0-5-2.24-5-5h2c0 1.66 1.34 3 3 3s3-1.34 3-3h2c0 2.76-2.24 5-5 5z"
              opacity=".3"></path>
            <path
              d="M17 6c0-2.76-2.24-5-5-5S7 3.24 7 6H5c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2h-2zm-5-3c1.66 0 3 1.34 3 3H9c0-1.66 1.34-3 3-3zm7 17H5V8h14v12zm-7-8c-1.66 0-3-1.34-3-3H7c0 2.76 2.24 5 5 5s5-2.24 5-5h-2c0 1.66-1.34 3-3 3z">
            </path>
          </svg>
          <p class=" mb-1">All Orders</p>
          <h2 class="mb-1 font-weight-bold">{{ $countAllOrder }}</h2>
          <a href="{{ route('order.index') }}">
            <span class="mb-1 text-muted"><span class="text-success"><i class="fa fa-caret-up  me-1"></i></span>
              View</span>
          </a>

        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-12">
      <div class="card">
        <div class="card-body">
          <svg class="card-custom-icon header-icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24"
            width="24px" fill="#000000">
            <path d="M0 0h24v24H0V0z" fill="none"></path>
            <path d="M3.31 11l2.2 8.01L18.5 19l2.2-8H3.31zM12 17c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"
              opacity=".3"></path>
            <path
              d="M22 9h-4.79l-4.38-6.56c-.19-.28-.51-.42-.83-.42s-.64.14-.83.43L6.79 9H2c-.55 0-1 .45-1 1 0 .09.01.18.04.27l2.54 9.27c.23.84 1 1.46 1.92 1.46h13c.92 0 1.69-.62 1.93-1.46l2.54-9.27L23 10c0-.55-.45-1-1-1zM12 4.8L14.8 9H9.2L12 4.8zM18.5 19l-12.99.01L3.31 11H20.7l-2.2 8zM12 13c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z">
            </path>
          </svg>
          <p class=" mb-1">Approved Order</p>
          <h2 class="mb-1 font-weight-bold">{{ $countApprovedOrders }}</h2>
          <a href="{{ route('order.index') }}">
            <span class="mb-1 text-muted"><span class="text-success"><i
                  class="fa fa-caret-up  me-1"></i></span>View</span>
          </a>

        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-12">
      <div class="card">
        <div class="card-body">
          <svg class="card-custom-icon header-icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24"
            width="24px" fill="#000000">
            <path d="M0 0h24v24H0V0z" fill="none"></path>
            <path
              d="M11.99 18.54l-7.37-5.73L3 14.07l9 7 9-7-1.63-1.27zM12 16l7.36-5.73L21 9l-9-7-9 7 1.63 1.27L12 16zm0-11.47L17.74 9 12 13.47 6.26 9 12 4.53z">
            </path>
          </svg>
          <p class="fs-13 mb-1">All Rates</p>
          <h2 class="mb-1 font-weight-bold">{{ $countRates }}</h2>
          <a href="{{ route('rate.index') }}">
            <span class="mb-1 text-muted"><span class="text-danger"><i
                  class="fa fa-caret-down  me-1"></i></span>View</span>
          </a>

        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-12">
      <div class="card">
        <div class="card-body">
          <svg class="card-custom-icon header-icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24"
            width="24px" fill="#000000">
            <path d="M0 0h24v24H0V0z" fill="none"></path>
            <path
              d="M12 4c-4.42 0-8 3.58-8 8s3.58 8 8 8 8-3.58 8-8-3.58-8-8-8zm4.25 12.15L11 13V7h1.5v5.25l4.5 2.67-.75 1.23z"
              opacity=".3"></path>
            <path
              d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z">
            </path>
          </svg>
          <p class=" mb-1">All Faqs</p>
          <h2 class="mb-1 font-weight-bold">{{ $countFaqs }}</h2>
          <a href="{{ route('faq.index') }}">
            <span class="mb-1 text-muted"><span class="text-success"><i
                  class="fa fa-caret-up  me-1"></i></span>View</span>
          </a>

        </div>
      </div>
    </div>

    <div class="col-12 mt-4">
      <!--div-->
      <div class="card">
        <div class="card-header">
          Latest Transactions
        </div>
        <div class="card-body">
          <div class="">
            @include('admin.order._table')
          </div>
        </div>
      </div>
      <!--/div-->
    </div>
  </div>
@endsection
