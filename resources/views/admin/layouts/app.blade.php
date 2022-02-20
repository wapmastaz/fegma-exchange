<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <!-- Meta data -->
  <meta charset="UTF-8">
  <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
  <!-- Title -->
  <title>@yield('title')</title>
  <!--Bootstrap css -->
  <link href="{{ asset('admin/plugins/bootstrap/css/bootstrap.min.css') }}" rel=" stylesheet">
  <!-- Style css -->
  <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet" />
  <link href="{{ asset('admin/css/dark.css') }}" rel="stylesheet" />
  <link href="{{ asset('admin/css/skin-modes.css') }}" rel="stylesheet" />
  <!-- Animate css -->
  <link href="{{ asset('admin/css/animated.css') }}" rel="stylesheet" />
  <!--Sidemenu css -->
  <link href="{{ asset('admin/css/sidemenu.css') }}" rel="stylesheet" id="sidemenu-theme">
  <!-- P-scroll bar css-->
  <link href="{{ asset('admin/plugins/p-scrollbar/p-scrollbar.css') }}" rel="stylesheet" />
  <!---Icons css-->
  <link href="{{ asset('admin/css/icons.css') }}" rel="stylesheet" />
  <!-- Simplebar css -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/simplebar/css/simplebar.css') }}">
  <!-- Color Skin css -->
  <link id="theme" href="{{ asset('admin/colors/color1.css') }}" rel="stylesheet" type="text/css" />

  @stack('libs-style')

  <!-- INTERNAL Switcher css -->
  <link href="{{ asset('admin/switcher/css/switcher.css') }}" rel="stylesheet" />
  <link href="{{ asset('admin/switcher/demo.css') }}" rel="stylesheet" />
</head>

<body class="app sidebar-mini light-mode gradient-header light-menu">


  <!-- Switcher -->
  <div class="switcher-wrapper">
    <div class="demo_changer ">
      <div class="form_holder sidebar-right1">
        <div class="row">
          <div class="predefined_styles">
            <div class="swichermainleft text-center">
              <div class="p-3 d-grid gap-2">
                <a href="https://spruko.com/demo/azea/index.html" class="btn ripple btn-primary mt-0">View Demo</a>
                <a href="https://themeforest.net/user/spruko/portfolio" class="btn ripple btn-secondary">Buy Now</a>
                <a href="https://themeforest.net/user/spruko/portfolio" class="btn ripple btn-red">Our Portfolio</a>
              </div>
            </div>
            <div class="swichermainleft mb-4">
              <h4>Navigation Style</h4>
              <div class="ps-3 pe-3 pt-3 d-grid gap-2">
                <a class="btn btn-success " href="index-2.html"> Leftmenu</a>
                <a class="btn btn-danger" href="https://spruko.com/demo/azea/Azea/LTR/Horizantal-Light/index.html">
                  Horizontal </a>
              </div>
            </div>
            <div class="swichermainleft">
              <h4>Theme Layout</h4>
              <div class="switch_section d-flex my-4">
                <ul class="switch-buttons row">
                  <li class="col-md-6 mb-0">
                    <button type="button" id="background-left1" class="bg-left1 wscolorcode1 button-image"></button>
                    <span class="d-block">Light Theme</span>
                  </li>
                  <li class="col-md-6 mb-0">
                    <button type="button" id="background-left2" class="bg-left2 wscolorcode1 button-image"></button>
                    <span class="d-block">Dark Theme</span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="swichermainleft">
              <h4>Header Styles Mode</h4>
              <div class="switch_section d-flex my-4">
                <ul class="switch-buttons row">
                  <li class="col-md-6 light-bg">
                    <button type="button" id="background1" class="bg1 wscolorcode1 button-image"></button>
                    <span class="d-block">Light Header</span>
                  </li>
                  <li class="col-md-6">
                    <button type="button" id="background2" class="bg2 wscolorcode1 button-image"></button>
                    <span class="d-block">Color Header</span>
                  </li>
                  <li class="col-md-6 d-block mx-auto dark-bg">
                    <button type="button" id="background3" class="bg3 wscolorcode1 button-image"></button>
                    <span class="d-block">Dark Header</span>
                  </li>
                  <li class="col-md-6 d-block mx-auto">
                    <button type="button" id="background11" class="bg8 wscolorcode1 button-image"></button>
                    <span class="d-block">Gradient Header</span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="swichermainleft">
              <h4>Leftmenu Styles Mode</h4>
              <div class="switch_section d-flex my-4">
                <ul class="switch-buttons row">
                  <li class="col-md-6 mb-4">
                    <button type="button" id="background4" class="bg4 wscolorcode1 button-image"></button>
                    <span class="d-block">Light Menu</span>
                  </li>
                  <li class="col-md-6 mb-4">
                    <button type="button" id="background5" class="bg5 wscolorcode1 button-image"></button>
                    <span class="d-block">Color Menu</span>
                  </li>
                  <li class="col-md-6 mb-0 d-block mx-auto dark-bgmenu">
                    <button type="button" id="background6" class="bg6 wscolorcode1 button-image"></button>
                    <span class="d-block">Dark Menu</span>
                  </li>
                  <li class="col-md-6 mb-0 d-block mx-auto">
                    <button type="button" id="background10" class="bg7 wscolorcode1 button-image"></button>
                    <span class="d-block">Gradient Menu</span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="swichermainleft">
              <h4>Layout-width Styles Mode</h4>
              <div class="switch_section d-flex my-4">
                <ul class="switch-buttons row">
                  <li class="col-md-6 mb-4">
                    <button type="button" id="background14" class="bg-layf wscolorcode1 button-image"></button>
                    <span class="d-block">Full-Width</span>
                  </li>
                  <li class="col-md-6 mb-4">
                    <button type="button" id="background15" class="bg-laybx wscolorcode1 button-image"></button>
                    <span class="d-block">Boxed</span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="swichermainleft">
              <h4>Side-menu layout Styles Mode</h4>
              <div class="switch_section d-flex my-4">
                <ul class="switch-buttons row">
                  <li class="col-md-6 mb-4">
                    <button type="button" id="background18" class="bg-sided button-image wscolorcode1 default-menu"
                      data-sidetheme="../../assets/css/sidemenu.css"></button>
                    <span class="d-block">Default</span>
                  </li>
                  <li class="col-md-6 mb-4">
                    <button type="button" id="background19" class="bg-sideictxt button-image wscolorcode1 icontext-menu"
                      data-sidetheme="../../assets/css/sidemenu-icontext.css"></button>
                    <span class="d-block">Icon-with Text</span>
                  </li>
                  <li class="col-md-6 d-block mx-auto">
                    <button type="button" id="background20" class="bg-sideicon button-image wscolorcode1 sideicon-menu"
                      data-sidetheme="../../assets/css/sidemenu-icon.css"></button>
                    <span class="d-block">Icon</span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="swichermainleft">
              <h4>Layout Positions Mode</h4>
              <div class="switch_section d-flex my-4">
                <ul class="switch-buttons row">
                  <li class="col-md-6 mb-4">
                    <button type="button" id="background16" class="bg-left1 wscolorcode1 button-image"></button>
                    <span class="d-block">Fixed</span>
                  </li>
                  <li class="col-md-6 mb-4">
                    <button type="button" id="background17" class="bg-left1 wscolorcode1 button-image"></button>
                    <span class="d-block">Scrollable</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Switcher -->

  {{-- <!---Global-loader-->
  <div id="global-loader">
    <img src="https://spruko.com/demo/azea/Azea/assets/images/svgs/loader.svg" alt="loader">
  </div>
  <!--- End Global-loader--> --}}

  <!-- Page -->
  <div class="page">
    <div class="page-main">

      <!--aside open-->
      <aside class="app-sidebar">
        <div class="app-sidebar__logo">
          <a class="header-brand" href="{{ route('dashboard') }}">
            <img src="{{ asset('project-pictures/logo-2.jpg') }}" class="header-brand-img desktop-lgo" alt="">
            <img src="{{ asset('project-pictures/logo-2.jpg') }}" class="header-brand-img dark-logo" alt="">
            <img src="{{ asset('project-pictures/logo-2.jpg') }}" class="header-brand-img mobile-logo" alt="">
            <img src="{{ asset('project-pictures/logo-2.jpg') }}" class="header-brand-img darkmobile-logo" alt="">
          </a>
        </div>
        <ul class="side-menu app-sidebar3">
          <li class="slide">
            <a class="side-menu__item" href="{{ route('dashboard') }}">
              <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                <g>
                  <path d="M0,0h24v24H0V0z" fill="none" />
                </g>
                <g>
                  <g>
                    <path d="M3,11h8V3H3V11z M5,5h4v4H5V5z" />
                    <path d="M13,3v8h8V3H13z M19,9h-4V5h4V9z" />
                    <path d="M3,21h8v-8H3V21z M5,15h4v4H5V15z" />
                    <polygon points="18,13 16,13 16,16 13,16 13,18 16,18 16,21 18,21 18,18 21,18 21,16 18,16" />
                  </g>
                </g>
              </svg>
              <span class="side-menu__label">Dashboard</span></a>
          </li>
          <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void0;">
              <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                width="24">
                <path d="M0 0h24v24H0V0z" fill="none"></path>
                <path d="M5 5h15v3H5zm12 5h3v9h-3zm-7 0h5v9h-5zm-5 0h3v9H5z" opacity=".3"></path>
                <path
                  d="M20 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h15c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM8 19H5v-9h3v9zm7 0h-5v-9h5v9zm5 0h-3v-9h3v9zm0-11H5V5h15v3z">
                </path>
              </svg>
              <span class="side-menu__label">Manage Rates</span><i class="angle fe fe-chevron-right"></i></a>
            <ul class="slide-menu">
              <li>
                <a href="{{ route('rate.index') }}" class="slide-item"> All Rates</a>
              </li>
              <li>
                <a href="{{ route('rate.create') }}" class="slide-item">Create Rate</a>
              </li>
            </ul>
          </li>
          <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void0;">
              <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                width="24">
                <path d="M0 0h24v24H0V0z" fill="none" />
                <path
                  d="M4 8h4V4H4v4zm6 12h4v-4h-4v4zm-6 0h4v-4H4v4zm0-6h4v-4H4v4zm6 0h4v-4h-4v4zm6-10v4h4V4h-4zm-6 4h4V4h-4v4zm6 6h4v-4h-4v4zm0 6h4v-4h-4v4z" />
              </svg>
              <span class="side-menu__label">Manage Faqs</span><i class="angle fe fe-chevron-right"></i></a>
            <ul class="slide-menu">
              <li>
                <a href="{{ route('faq.index') }}" class="slide-item"> All Faqs</a>
              </li>
              <li>
                <a href="{{ route('faq.create') }}" class="slide-item"> Create Faq</a>
              </li>
            </ul>
          </li>
          <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void0;">
              <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                width="24">
                <path d="M0 0h24v24H0V0z" fill="none"></path>
                <path d="M3.31 11l2.2 8.01L18.5 19l2.2-8H3.31zM12 17c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"
                  opacity=".3"></path>
                <path
                  d="M22 9h-4.79l-4.38-6.56c-.19-.28-.51-.42-.83-.42s-.64.14-.83.43L6.79 9H2c-.55 0-1 .45-1 1 0 .09.01.18.04.27l2.54 9.27c.23.84 1 1.46 1.92 1.46h13c.92 0 1.69-.62 1.93-1.46l2.54-9.27L23 10c0-.55-.45-1-1-1zM12 4.8L14.8 9H9.2L12 4.8zM18.5 19l-12.99.01L3.31 11H20.7l-2.2 8zM12 13c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z">
                </path>
              </svg>
              <span class="side-menu__label">Manage Orders</span><i class="angle fe fe-chevron-right"></i></a>
            <ul class="slide-menu">
              <li>
                <a href="{{ route('order.index') }}" class="slide-item"> All Orders</a>
              </li>
            </ul>
          </li>
      </aside>
      <!--aside closed-->

      <!-- App-Content -->
      <div class="app-content main-content">
        <div class="side-app">

          <!--app header-->
          <div class="app-header header main-header1">
            <div class="container-fluid">
              <div class="d-flex">
                <a class="header-brand" href="index-2.html">
                  <img src="../../assets/images/brand/logo.png" class="header-brand-img desktop-lgo" alt="Azea logo">
                  <img src="../../assets/images/brand/logo1.png" class="header-brand-img dark-logo" alt="Azea logo">
                  <img src="../../assets/images/brand/favicon.png" class="header-brand-img mobile-logo"
                    alt="Azea logo">
                  <img src="../../assets/images/brand/favicon1.png" class="header-brand-img darkmobile-logo"
                    alt="Azea logo">
                </a>
                <div class="app-sidebar__toggle d-flex" data-bs-toggle="sidebar">
                  <a class="open-toggle" href="javascript:void0;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="feather feather-align-left header-icon" height="24"
                      viewBox="0 0 24 24" width="24">
                      <path d="M0 0h24v24H0V0z" fill="none" />
                      <path d="M3 19h18v2H3zM3 7h12v2H3zm0-4h18v2H3zm0 12h12v2H3zm0-4h18v2H3z" />
                    </svg>
                  </a>
                </div>
                <div class="mt-1 d-md-block d-none">
                  <form class="form-inline">
                    <div class="search-element">
                      <input type="search" class="form-control header-search mobile-view-search" placeholder="Search…"
                        aria-label="Search" tabindex="1">
                      <button class="btn btn-primary-color" type="submit">
                        <svg class="header-icon search-icon" xmlns="http://www.w3.org/2000/svg" height="24"
                          viewBox="0 0 24 24" width="24">
                          <path d="M0 0h24v24H0V0z" fill="none" />
                          <path
                            d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
                        </svg>
                      </button>
                      <a href="javascript:void0;" class="close-btn"><i class="fe fe-x search-bar-escape"></i></a>
                    </div>
                  </form>
                </div><!-- SEARCH -->
                <div class="d-flex order-lg-2 ms-auto main-header-end">
                  <button class="navbar-toggler navresponsive-toggler d-md-none" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                    aria-controls="navbarSupportedContent-4" aria-expanded="true" aria-label="Toggle navigation">
                    <i class="fe fe-more-vertical header-icons navbar-toggler-icon"></i>
                  </button>
                  <div class="navbar navbar-expand-lg navbar-collapse responsive-navbar p-0">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                      <div class="d-flex order-lg-2">
                        <div class="dropdown d-lg-none d-flex responsive-search">
                          <a href="javascript:void0;" class="nav-link icon" data-bs-toggle="dropdown">
                            <svg class="header-icon search-icon" xmlns="http://www.w3.org/2000/svg" height="24"
                              viewBox="0 0 24 24" width="24">
                              <path d="M0 0h24v24H0V0z" fill="none" />
                              <path
                                d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
                            </svg>
                          </a>
                          <div class="dropdown-menu header-search dropdown-menu-start">
                            <div class="input-group w-100 p-2">
                              <input type="text" class="form-control" placeholder="Search....">
                              <button class="btn btn-primary-color" type="submit">
                                <svg class="header-icon search-icon p-1 mt-1" xmlns="http://www.w3.org/2000/svg"
                                  height="24" viewBox="0 0 24 24" width="24">
                                  <path d="M0 0h24v24H0V0z" fill="none" />
                                  <path
                                    d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
                                </svg>
                              </button>
                            </div>
                          </div>
                        </div>

                        <div class="dropdown profile-dropdown d-flex">
                          <a href="javascript:void0;" class="nav-link pe-0 leading-none" data-bs-toggle="dropdown">
                            <span class="header-avatar1">
                              <img src="{{ asset('admin/images/users/2.jpg') }}" alt="img"
                                class="avatar avatar-md brround">
                            </span>
                          </a>
                          <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow animated">
                            <div class="text-center">
                              <div class="text-center user pb-0 font-weight-bold">Patrenna</div>
                              <span class="text-center user-semi-title">Web Designer</span>
                              <div class="dropdown-divider"></div>
                            </div>
                            <a class="dropdown-item d-flex" href="profile-1.html">
                              <svg class="header-icon me-2" xmlns="http://www.w3.org/2000/svg" height="24"
                                viewBox="0 0 24 24" width="24">
                                <path d="M0 0h24v24H0V0z" fill="none" />
                                <path
                                  d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM7.07 18.28c.43-.9 3.05-1.78 4.93-1.78s4.51.88 4.93 1.78C15.57 19.36 13.86 20 12 20s-3.57-.64-4.93-1.72zm11.29-1.45c-1.43-1.74-4.9-2.33-6.36-2.33s-4.93.59-6.36 2.33C4.62 15.49 4 13.82 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8c0 1.82-.62 3.49-1.64 4.83zM12 6c-1.94 0-3.5 1.56-3.5 3.5S10.06 13 12 13s3.5-1.56 3.5-3.5S13.94 6 12 6zm0 5c-.83 0-1.5-.67-1.5-1.5S11.17 8 12 8s1.5.67 1.5 1.5S12.83 11 12 11z" />
                              </svg>
                              <div class="fs-13">Profile</div>
                            </a>
                            <a class="dropdown-item d-flex" href="search.html">
                              <svg class="header-icon me-2" xmlns="http://www.w3.org/2000/svg" height="24"
                                viewBox="0 0 24 24" width="24">
                                <path d="M0 0h24v24H0V0z" fill="none" />
                                <path
                                  d="M19.43 12.98c.04-.32.07-.64.07-.98 0-.34-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.09-.16-.26-.25-.44-.25-.06 0-.12.01-.17.03l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.06-.02-.12-.03-.18-.03-.17 0-.34.09-.43.25l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98 0 .33.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.09.16.26.25.44.25.06 0 .12-.01.17-.03l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.06.02.12.03.18.03.17 0 .34-.09.43-.25l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zm-1.98-1.71c.04.31.05.52.05.73 0 .21-.02.43-.05.73l-.14 1.13.89.7 1.08.84-.7 1.21-1.27-.51-1.04-.42-.9.68c-.43.32-.84.56-1.25.73l-1.06.43-.16 1.13-.2 1.35h-1.4l-.19-1.35-.16-1.13-1.06-.43c-.43-.18-.83-.41-1.23-.71l-.91-.7-1.06.43-1.27.51-.7-1.21 1.08-.84.89-.7-.14-1.13c-.03-.31-.05-.54-.05-.74s.02-.43.05-.73l.14-1.13-.89-.7-1.08-.84.7-1.21 1.27.51 1.04.42.9-.68c.43-.32.84-.56 1.25-.73l1.06-.43.16-1.13.2-1.35h1.39l.19 1.35.16 1.13 1.06.43c.43.18.83.41 1.23.71l.91.7 1.06-.43 1.27-.51.7 1.21-1.07.85-.89.7.14 1.13zM12 8c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 6c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z" />
                              </svg>
                              <div class="fs-13">Settings</div>
                            </a>
                            <a class="dropdown-item d-flex" href="chat.html">
                              <svg class="header-icon me-2" xmlns="http://www.w3.org/2000/svg" height="24"
                                viewBox="0 0 24 24" width="24">
                                <path d="M0 0h24v24H0V0z" fill="none" />
                                <path
                                  d="M4 4h16v12H5.17L4 17.17V4m0-2c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2H4zm2 10h12v2H6v-2zm0-3h12v2H6V9zm0-3h12v2H6V6z" />
                              </svg>
                              <div class="fs-13">Messages</div>
                            </a>
                            <a class="dropdown-item d-flex" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                              <svg class="header-icon me-2" xmlns="http://www.w3.org/2000/svg"
                                enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24">
                                <g>
                                  <rect fill="none" height="24" width="24" />
                                </g>
                                <g>
                                  <path
                                    d="M11,7L9.6,8.4l2.6,2.6H2v2h10.2l-2.6,2.6L11,17l5-5L11,7z M20,19h-8v2h8c1.1,0,2-0.9,2-2V5c0-1.1-0.9-2-2-2h-8v2h8V19z" />
                                </g>
                              </svg>
                              <div class="fs-13">Sign Out</div>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                              class="d-none">
                              @csrf
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex">
                    <a class="nav-link icon demo-icon">
                      <svg class="header-icon settings-icon fa-spin" xmlns="http://www.w3.org/2000/svg" height="24px"
                        viewBox="0 0 24 24" width="24px" fill="#000000">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path
                          d="M19.28 8.6l-.7-1.21-1.27.51-1.06.43-.91-.7c-.39-.3-.8-.54-1.23-.71l-1.06-.43-.16-1.13L12.7 4h-1.4l-.19 1.35-.16 1.13-1.06.44c-.41.17-.82.41-1.25.73l-.9.68-1.05-.42-1.27-.52-.7 1.21 1.08.84.89.7-.14 1.13c-.03.3-.05.53-.05.73s.02.43.05.73l.14 1.13-.89.7-1.08.84.7 1.21 1.27-.51 1.06-.43.91.7c.39.3.8.54 1.23.71l1.06.43.16 1.13.19 1.36h1.39l.19-1.35.16-1.13 1.06-.43c.41-.17.82-.41 1.25-.73l.9-.68 1.04.42 1.27.51.7-1.21-1.08-.84-.89-.7.14-1.13c.04-.31.05-.52.05-.73 0-.21-.02-.43-.05-.73l-.14-1.13.89-.7 1.1-.84zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4z"
                          opacity=".3" />
                        <path
                          d="M19.43 12.98c.04-.32.07-.64.07-.98 0-.34-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.09-.16-.26-.25-.44-.25-.06 0-.12.01-.17.03l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.06-.02-.12-.03-.18-.03-.17 0-.34.09-.43.25l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98s.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.09.16.26.25.44.25.06 0 .12-.01.17-.03l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.06.02.12.03.18.03.17 0 .34-.09.43-.25l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zm-1.98-1.71c.04.31.05.52.05.73 0 .21-.02.43-.05.73l-.14 1.13.89.7 1.08.84-.7 1.21-1.27-.51-1.04-.42-.9.68c-.43.32-.84.56-1.25.73l-1.06.43-.16 1.13-.2 1.35h-1.4l-.19-1.35-.16-1.13-1.06-.43c-.43-.18-.83-.41-1.23-.71l-.91-.7-1.06.43-1.27.51-.7-1.21 1.08-.84.89-.7-.14-1.13c-.03-.31-.05-.54-.05-.74s.02-.43.05-.73l.14-1.13-.89-.7-1.08-.84.7-1.21 1.27.51 1.04.42.9-.68c.43-.32.84-.56 1.25-.73l1.06-.43.16-1.13.2-1.35h1.39l.19 1.35.16 1.13 1.06.43c.43.18.83.41 1.23.71l.91.7 1.06-.43 1.27-.51.7 1.21-1.07.85-.89.7.14 1.13zM12 8c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 6c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--/app header-->

          <!--Page header-->
          <div class="page-header">
            <div class="page-leftheader">
              <h4 class="page-title mb-0 text-primary">{{ isset($title) ? $title : '' }}</h4>
            </div>
          </div>
          <!--End Page header-->

          @yield('contents')

        </div>
      </div>
      <!-- End app-content-->


      <!--Footer-->
      <footer class="footer">
        <div class="container">
          <div class="row align-items-center flex-row-reverse">
            <div class="col-md-12 col-sm-12 text-center">
              Copyright © {{ date('Y') }} <a href="javascript:void0;">Femag-Exchange</a>.
            </div>
          </div>
        </div>
      </footer>
      <!-- End Footer-->
    </div>
  </div>
  <!-- End Page -->

  <!-- Back to top -->
  <a href="#top" id="back-to-top"><i class="fe fe-chevron-up"></i></a>
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

  <!--Sidemenu js-->
  <script src="{{ asset('admin/plugins/sidemenu/sidemenu.js') }}"></script>

  <!-- P-scroll js-->
  <script src="{{ asset('admin/p-scrollbar/p-scrollbar.js') }}"></script>
  <script src="{{ asset('admin/p-scrollbar/p-scroll1.js') }}"></script>
  <script src="{{ asset('admin/p-scrollbar/p-scroll.js') }}"></script>

  @stack('libs-script')

  <!--INTERNAL Index js-->
  <script src="{{ asset('admin/js/index1.js') }}"></script>


  <!-- Simplebar JS -->
  <script src="{{ asset('admin/plugins/simplebar/js/simplebar.min.js') }}"></script>

  <!-- Custom js-->
  <script src="{{ asset('admin/js/custom.js') }}"></script>

  <!-- Switcher js -->
  <script src="{{ asset('admin/switcher/js/switcher.js') }}"></script>

  @stack('lib-script')

  @include('partial/notification')

</body>

</html>
