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
            @if ($order->status == 1)
              <button type="button" class="btn btn-success mt-3"><i class="fe fe-check me-2"></i>Order Approved</button>
            @endif
            @if ($order->status == 2)
              <button type="button" class="btn btn-danger mt-3"><i class="fe fe-times me-2"></i>Order Cancelled</button>
            @endif
            <hr>
            <a class="modal-effect btn btn-success mt-3" data-bs-effect="effect-fall" data-bs-toggle="modal"
              href="#approve"><i class="fe fe-check me-2"></i>Approve</a>
            <a class="modal-effect btn btn-danger mt-3" data-bs-effect="effect-fall" data-bs-toggle="modal"
              href="#decline"><i class="fe fe-trash me-2"></i> Decline</a>

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
                  <td class="">{{ getCountryName($order->country) }}</td>
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
                <h6 class="font-weight-bold mb-1">Bank Name
                </h6>
                <h6 class="font-weight-bold">{{ $order->bank_name }}
                </h6>
              </div>
            </div>
            <div class="media me-5">
              <div class="media-icon bg-success-transparent text-success me-4">
                <i class="fe fe-briefcase"></i>
              </div>
              <div class="media-body">
                <h6 class="font-weight-bold mb-1">Account Number
                </h6>
                <h6 class="font-weight-bold">{{ $order->account_number }}</h6>
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

      @if ($order->status == 1)
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Approve Screenshort</h3>
          </div>
          <div class="card-body">
            <div class="main-profile-contact-list">
              @if ($order->approve_image == null)
                <h4 class="text-danger">No Image Provided</h4>
              @else
                <img src="{{ asset('storage/approve/' . $order->approve_image) }}" class="img-fluid"
                  alt="Approve Screenshort">
              @endif
              <hr>
              <div class="mt-5">
                <h4 class="text-primary">Approve Message</h4>
                @if ($order->approve_message == null)
                  <p><small>Not provided</small></p>
                @else
                  {{ $order->approve_message }}
                @endif
              </div>


            </div>
          </div>
        </div>
      @endif

      @if ($order->status == 2)
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Order Cancelled Reason</h3>
          </div>
          <div class="card-body">
            <div class="main-profile-contact-list">
              @if ($order->reject_image == null)
                <h4 class="text-danger">No Image Provided</h4>
              @else
                <img src="{{ asset('storage/decline/' . $order->reject_image) }}" class="img-fluid"
                  alt="Approve Screenshort">
              @endif
              <hr>
              <div class="mt-5">
                <h4 class="text-primary">Decline Message</h4>
                @if ($order->reject_message == null)
                  <p><small>Not Provided</small></p>
                @else
                  {{ $order->reject_message }}
                @endif
              </div>


            </div>
          </div>
        </div>
      @endif

    </div>
  </div>

  <!-- MODAL EFFECTS -->
  <div class="modal fade" id="approve">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content modal-content-demo">
        <div class="modal-header">
          <h6 class="modal-title">Approve Order</h6><button aria-label="Close" class="btn-close"
            data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">

          <form action="{{ route('order.approve', $order->uid) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="approve-message">Approve Message</label>
              <textarea id="approve-message" class="form-control" cols="20" rows="5" name="approve_message"></textarea>
            </div>
            <div class="form-group">
              <label for="approve-image">Approve Image</label>
              <input id="approve-image" class="form-control" type="file" name="approve_image">
            </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" type="submit">Submit Request</button> <button class="btn btn-secondary"
            data-bs-dismiss="modal" type="button">Close</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- MODAL EFFECTS -->
  <div class="modal fade" id="decline">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content modal-content-demo">
        <div class="modal-header">
          <h6 class="modal-title">Decline Order</h6><button aria-label="Close" class="btn-close"
            data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('order.decline', $order->uid) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="approve-image">Decline Message</label>
              <textarea name="decline_message" id="decline-message" cols="20" rows="5" class="form-control"></textarea>
            </div>
            <div class="form-group">
              <label for="decline-image">Decline Image</label>
              <input id="decline-image" class="form-control" type="file" name="decline_image">
            </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" type="submit">Submit Request</button> <button class="btn btn-secondary"
            data-bs-dismiss="modal" type="button">Close</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  <!-- End Page -->
@endsection

@push('libs-script')
@endpush
