@extends('layouts.frontend')

@section('page-title', 'Trade Your Bitcoin')


@section('content')

  <div class="site-breadcrumb">
    <div class="container wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
      <h2 class="breadcrumb-title">Trade your Bitcoin</h2>
      <ul class="breadcrumb-menu">
        <li><a href="{{ route('home') }}"><i class="far fa-home"></i> Home</a></li>
        <li class="active">Sell</li>
      </ul>
    </div>
  </div>

  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
      <path
        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
    </symbol>
    <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
      <path
        d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
    </symbol>
    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
      <path
        d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
    </symbol>
  </svg>

  <div class="token-sale pd-50 shape-2">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 mx-auto">
          <div class="alert alert-primary d-flex" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
              <use xlink:href="#info-fill" />
            </svg>
            <div>
              <h5 class="text-danger mb-2">Notice</h5>
              Any amount sent less than $500 will not be refunded.
              Please ensure to refresh this page due to Wallet address changes
            </div>
          </div>
        </div>
      </div>

      <div class="feature-area pd-50">
        <div class="container">
          <div class="feature-area-wrapper">
            <div class="row">
              <div class="col-md-6 col-lg-4">
                <div class="feature-item wow animate__ animate__fadeInUp animated" data-wow-duration="1s"
                  data-wow-delay=".25s"
                  style="visibility: visible; animation-duration: 1s; animation-delay: 0.25s; animation-name: fadeInUp;">
                  <div class="feature-icon">
                    <img src="{{ asset('frontend/img/icon/social-assistant.svg') }}" alt="">
                  </div>
                  <div class="feature-content">
                    <h5>Copy our Wallet Address</h5>
                    <p>It is a long established fact that a reader will be distracted by the readable
                      content.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="feature-item wow animate__ animate__fadeInUp animated" data-wow-duration="1s"
                  data-wow-delay=".50s"
                  style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInUp;">
                  <div class="feature-icon">
                    <img src="{{ asset('frontend/img/icon/phone-analytics.svg') }}" alt="">
                  </div>
                  <div class="feature-content">
                    <h5>Transfer</h5>
                    <p>It is a long established fact that a reader will be distracted by the readable
                      content.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="feature-item wow animate__ animate__fadeInUp animated" data-wow-duration="1s"
                  data-wow-delay=".75s"
                  style="visibility: visible; animation-duration: 1s; animation-delay: 0.75s; animation-name: fadeInUp;">
                  <div class="feature-icon">
                    <img src="{{ asset('frontend/img/icon/block-chain.svg') }}" alt="">
                  </div>
                  <div class="feature-content">
                    <h5>Input your Details</h5>
                    <p>It is a long established fact that a reader will be distracted by the readable
                      content.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="pd-50">
        <div class="container">
          <div class="row">
            <div class="col-md-8 mx-auto">
              <form action="{{ route('order.store') }}" method="post" class="shadow p-5"
                style="background-color: #eff0f6;border: .01rem solid #e0e1ed;" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group mb-4">
                      <label for="title">Title</label>
                      <select id="title" class="form-control @error('title') is-invalid @enderror" name="title">
                        <option value="">--choose title--</option>
                        <option value="mr" @if (old('title') == 'mr') selected @endif>Mr.</option>
                        <option value="ms" @if (old('title') == 'ms') selected @endif>Ms.</option>
                        <option value="mrs" @if (old('title') == 'mrs') selected @endif>Mrs.</option>
                        <option value="prof" @if (old('title') == 'prof') selected @endif>Prof.</option>
                        <option value="dr" @if (old('title') == 'dr') selected @endif>Dr.</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group mb-4">
                      <label for="first-name">First name <span class="text-danger">*</span> </label>
                      <input id="first-name" class="form-control @error('first_name') is-invalid @enderror" type="text"
                        value="{{ old('first_name') }}" name="first_name">
                      @error('first_name')
                        <small class="form-text text-danger">{{ $message }}</small>
                      @enderror
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group mb-4">
                      <label for="last-name">Last name <span class="text-danger">*</span></label>
                      <input id="last-name" class="form-control @error('last_name') is-invalid @enderror" type="text"
                        value="{{ old('last_name') }}" name="last_name">
                      @error('last_name')
                        <small class="form-text text-danger">{{ $message }}</small>
                      @enderror
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group mb-4">
                      <label for="email-address">Email address <span class="text-danger">*</span></label>
                      <input id="email-address" class="form-control @error('email') is-invalid @enderror" type="email"
                        value="{{ old('email') }}" name="email">
                      @error('email')
                        <small class="form-text text-danger">{{ $message }}</small>
                      @enderror
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group mb-4">
                      <label for="mobile">Phone Number <span class="text-danger">*</span></label>
                      <input id="mobile" class="form-control @error('mobile') is-invalid @enderror" type="tel"
                        value="{{ old('mobile') }}" name="mobile">
                      @error('mobile')
                        <small class="form-text text-danger">{{ $message }}</small>
                      @enderror
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group mb-4">
                      <label for="state">State <span class="text-danger">*</span></label>
                      <input id="state" class="form-control @error('state') is-invalid @enderror" type="text"
                        value="{{ old('state') }}" name="state">
                      @error('state')
                        <small class="form-text text-danger">{{ $message }}</small>
                      @enderror
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group mb-4">
                      <label for="country">Country</label>
                      <select id="country" class="form-control" name="country">
                        <option value="">--Select Country--</option>
                        <option value="nigeria">Nigeria</option>
                        <option value="ghana">Ghana</option>
                      </select>
                      @error('country')
                        <small class="form-text text-danger">{{ $message }}</small>
                      @enderror
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group mb-4">
                      <label for="account-number">Bank Account Number <span class="text-danger">*</span></label>
                      <input id="account-number" class="form-control @error('account_number') is-invalid @enderror"
                        value="{{ old('account_number') }}" type="number" name="account_number">
                      @error('account_number')
                        <small class="form-text text-danger">{{ $message }}</small>
                      @enderror
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group mb-4">
                      <label for="bank-name">Bank Name <span class="text-danger">*</span></label>
                      <input id="bank-name" class="form-control @error('bank_name') is-invalid @enderror" type="text"
                        value="{{ old('bank_name') }}" name="bank_name">
                      @error('bank_name')
                        <small class="form-text text-danger">{{ $message }}</small>
                      @enderror
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-group">
                      <label for="amount">Bitcoin Amount In Dollars <span class="text-danger">*</span></label>
                      <input id="amount" class="form-control @error('amount') is-invalid @enderror" type="number"
                        min="500" name="amount" value="{{ old('amount') }}">
                      @error('amount')
                        <small class="form-text text-danger">{{ $message }}</small>
                      @enderror
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-group">
                      <label for="local_amount">Local Amount <span class="text-danger">*</span></label>
                      <input id="local_amount" class="form-control " type="number" name="local_amount">
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-group">
                      <label for="image">Upload Screenshot</label>
                      <input id="image" class="form-control-file @error('image') is-invalid @enderror" type="file"
                        name="image">
                      @error('image')
                        <small class="form-text text-danger">{{ $message }}</small>
                      @enderror
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-check form-group mb-4">
                      <input class="form-check-input" type="checkbox" name="terms" id="agree">
                      <label class="form-check-label" for="agree">
                        I agree with the <a href="#">Terms Of Service.</a>
                      </label>
                      <small>I have read and agree to these terms and conditions set out. </small>
                      @error('terms')
                        <small class="form-text text-danger">{{ $message }}</small>
                      @enderror
                    </div>
                  </div>
                  <button type="submit" class="btn theme-btn">Send Order</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection

@push('page-script')
  <script>
    var country = $('#country');
    var localAmount = $('#local_amount');
    var amount = $('#amount');

    amount.on('keyup', function() {
      let value = $(this).val()
      // console.log(value)
      // perform ajax Request
      $.ajax({
        type: 'POST',
        url: "{{ route('ajax.get-rate') }}",
        data: {
          '_token': '{{ csrf_token() }}',
          'country': country.val(),
        },
        beforeSend: function() {
          localAmount.attr('disabled', true)
        },
        success: function(data) {
          console.log(data)
          console.log(value)
          if (data.message == "success") {
            var rate = data.data;
            var valueInLocal = rate.value * value
            localAmount.val(valueInLocal.toFixed(2))
          } else {
            localAmount.val(0)
          }
        }
      });
    })
  </script>
@endpush
