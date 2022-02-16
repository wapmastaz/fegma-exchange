@extends('auth.layouts.app')

@section('title', 'Login')

@section('content')
  {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
  <div class="card">
    <div class="card-body">
      <div class="text-center mb-3">
        <h1 class="mb-2">Log In</h1>
        <a href="javascript:void0;" class="">Welcome Back !</a>
      </div>
      <form method="POST" class="mt-5" action="{{ route('login') }}">
        @csrf
        <div class="input-group mb-4">
          <div class="input-group-text">
            <i class="fe fe-user"></i>
          </div>
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
            value="{{ old('email') }}" required autocomplete="email" placeholder="Email address" autofocus>

          {{-- @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror --}}
        </div>
        <div class="input-group mb-4">
          <div class="input-group" id="Password-toggle1">
            <a href="#" class="input-group-text">
              <i class="fe fe-eye" aria-hidden="true"></i>
            </a>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
              name="password" required placeholder="Password" autocomplete="current-password">
          </div>
        </div>
        <div class="form-group">
          <label class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" name="remember" id="remember"
              {{ old('remember') ? 'checked' : '' }} />
            <span class="custom-control-label">Remember me</span>
          </label>
        </div>
        <div class="form-group text-center mb-3">
          <button class="btn btn-primary w-100 br-7" type="submit">Log In</button>
        </div>
        <div class="form-group fs-13 text-center">
          Forget Password ?
        </div>
        @if (Route::has('password.request'))
          <div class="form-group fs-14 text-center font-weight-bold">
            <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
          </div>
        @endif

      </form>
    </div>
  </div>
@endsection
