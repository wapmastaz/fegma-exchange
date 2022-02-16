<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

  <!-- Meta data -->
  <meta charset="UTF-8">
  <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>

  <!-- Title -->
  <title>@yield('title')</title>

  <!--Favicon -->
  <link rel="icon" href="https://spruko.com/demo/azea/Azea/assets/images/brand/favicon.ico" type="image/x-icon" />

  <!--Bootstrap css -->
  <link href="{{ asset('admin/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Style css -->
  <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet" />
  <link href="{{ asset('admin/css/dark.css') }}" rel="stylesheet" />
  <link href="{{ asset('admin/css/skin-modes.css') }}" rel="stylesheet" />

  <!-- Animate css -->
  <link href="{{ asset('admin/css/animated.css') }}" rel="stylesheet" />

  <!---Icons css-->
  <link href="{{ asset('admin/css/icons.css') }}" rel="stylesheet" />
  @stack('lib-style')
  <!-- Color Skin css -->
  <link id="theme" href="{{ asset('admin/colors/color1.css') }}" rel="stylesheet" type="text/css" />

</head>

<body class="register-2">
  <div class="page">
    <div class="page-content">
      <div class="container">
        <div class="row">
          <div class="col mx-auto">
            <div class="row justify-content-center">
              <div class="col-md-4">
                <div class="text-center mb-5">
                  <img src="{{ asset('project-pictures/logo-2.jpg') }}" class="header-brand-img desktop-lgo"
                    alt="Azea logo">
                </div>
                @yield('content')
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Jquery js-->
  <script src="{{ asset('admin/js/jquery.min.js') }}"></script>

  <!-- Bootstrap5 js-->
  <script src="{{ asset('admin/plugins/bootstrap/popper.min.js') }}"></script>
  <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

  <!--Othercharts js-->
  <script src="{{ asset('admin/plugins/othercharts/jquery.sparkline.min.js') }}"></script>

  <!-- Circle-progress js-->
  <script src="{{ asset('admin/js/circle-progress.min.js') }}"></script>

  <!-- Jquery-rating js-->
  <script src="{{ asset('admin/plugins/rating/jquery.rating-stars.js') }}"></script>

  <!-- Show Password -->
  <script src="{{ asset('admin/js/bootstrap-show-password.min.js') }}"></script>

  @stack('lib-script')

  @include('partial/notification')

  <!-- Custom js-->
  <script src="{{ asset('admin/js/custom.js') }}"></script>

</body>

</html>
