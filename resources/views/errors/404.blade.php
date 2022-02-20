<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Mirrored from spruko.com/demo/azea/Azea/LTR/Vertical-IconSidebar-Light/404.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Aug 2021 23:51:29 GMT -->

<head>

  <!-- Meta data -->
  <meta charset="UTF-8">
  <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>

  <!-- Title -->
  <title>404 error</title>

  <!--Favicon -->
  <link rel="icon" href="https://spruko.com/demo/azea/Azea/assets/images/brand/favicon.ico" type="image/x-icon" />

  <!--Bootstrap css -->
  <link href="{{ asset('admin/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />

  <!-- Style css -->
  <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet" />
  <link href="{{ asset('admin/css/dark.css') }}" rel="stylesheet" />
  <link href="{{ asset('admin/css/skin-modes.css') }}" rel="stylesheet" />

  <!-- Animate css -->
  <link href="{{ asset('admin/css/animated.css') }}" rel="stylesheet" />

  <!---Icons css-->
  <link href="{{ asset('admin/css/icons.css') }}" rel="stylesheet" />

  <!-- Color Skin css -->
  <link id="theme" href="{{ asset('admin/colors/color1.css') }}" rel="stylesheet" type="text/css" />
</head>

<body class="h-100vh bg-light">

  <div class="box">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>

  <div class="page">
    <div class="page-content">
      <div class="container text-center">
        <div class="row">
          <div class="col-md-12">
            <div class="">
              <div class="text-primary">
                <div class="display-1 mb-5 font-weight-bold error-text">404</div>
                <h1 class="h3  mb-3 font-weight-bold">Sorry, an error has occured, Requested Page not found!</h1>
                <p class="h5 font-weight-normal mb-7 leading-normal">You may have mistyped the address or the page may
                  have moved.</p>
                <a class="btn text-primary border-primary mb-5 ms-2 fs-18" href="{{ route('dashboard') }}">Back to
                  Home</a>
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

  <!-- Custom js-->
  <script src="{{ asset('admin/js/custom.js') }}"></script>

</body>

</html>
