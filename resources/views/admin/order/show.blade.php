@extends('admin.layouts.app')

@push('libs-style')
@endpush

@section('contents')
  <!-- Row -->
  <div class="row">
    <div class="col-xl-4 col-lg-4 col-md-12">
      <div class="card box-widget widget-user">
        <div class="widget-user-image mx-auto mt-5"><img alt="User Avatar" class="rounded-circle"
            src="{{ asset('admin/images/users/2.jpg') }}"></div>
        <div class="  card-body text-center">
          <div class="pro-user">
            <h4 class="pro-user-username mb-1 font-weight-bold">{{ $order->getNameAttributes() }}</h4>
            <a href="javascript:void0;" class="btn btn-success mt-3"><i class="fe fe-check me-2"></i>Approve</a>
            <a href="javascript:void0;" class="btn btn-danger mt-3"><i class="fe fe-trash me-2"></i> Decline</a>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Order Details</h3>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered mb-0">
              <tbody>
                <tr>
                  <td class="">
                    <span class="font-weight-semibold w-50">Name </span>
                  </td>
                  <td class="">{{ $order->getNameAttributes() }}</td>
                </tr>
                <tr>
                  <td class="">
                    <span class="font-weight-semibold w-50">Track ID </span>
                  </td>
                  <td class="">{{ $order->uid }}</td>
                </tr>
                <tr>
                  <td class="">
                    <span class="font-weight-semibold w-50">Amount in USD </span>
                  </td>
                  <td class="">{{ number_format($order->btc_amount, 2) }}</td>
                </tr>
                <tr>
                  <td class="">
                    <span class="font-weight-semibold w-50">Local Amount </span>
                  </td>
                  <td class="">{{ number_format($order->local_amount, 2) }}</td>
                </tr>
                <tr>
                  <td class="">
                    <span class="font-weight-semibold w-50">State </span>
                  </td>
                  <td class="">{{ $order->state }}</td>
                </tr>
                <tr>
                  <td class="">
                    <span class="font-weight-semibold w-50">Country </span>
                  </td>
                  <td class="">{{ $order->country }}</td>
                </tr>
                <tr>
                  <td class="">
                    <span class="font-weight-semibold w-50">Mobile </span>
                  </td>
                  <td class="">{{ $order->mobile }}</td>
                </tr>
                <tr>
                  <td class="">
                    <span class="font-weight-semibold w-50">Email </span>
                  </td>
                  <td class="">{{ $order->email }}</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-8 col-lg-8 col-md-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Bank Details</h3>
        </div>
        <div class="card-body">
          <div class="main-profile-contact-list d-lg-flex">
            <div class="media me-5">
              <div class="media-icon bg-secondary-transparent text-secondary me-4">
                <i class="fe fe-building"></i>
              </div>
              <div class="media-body">
                <h6 class="font-weight-bold mb-1">{{ $order->bank_name }}
                </h6>
              </div>
            </div>
            <div class="media me-5">
              <div class="media-icon bg-success-transparent text-success me-4">
                <i class="fe fe-briefcase"></i>
              </div>
              <div class="media-body">
                <h6 class="font-weight-bold mb-1">{{ $order->account_number }}</h6>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Payment Screenshort</h3>
        </div>
        <div class="card-body">
          <div class="main-profile-contact-list d-lg-flex">
            <img src="{{ asset('storage/orders/' . $order->screenshot) }}" class="img-fluid"
              alt="Payment Screenshort">
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('libs-script')
@endpush
