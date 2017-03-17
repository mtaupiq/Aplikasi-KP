<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap material admin template">
  <meta name="author" content="">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title')</title>

  <link rel="apple-touch-icon" href="{{asset('images/apple-touch-icon.png')}}">
  <link rel="shortcut icon" href="{{asset('images/logo-small.png')}}">

  @include('layouts.inc.style')

  <!-- Scripts -->
  <script src="{{asset('dist/vendor/modernizr/modernizr.min.js')}}"></script>
  <script src="{{asset('dist/vendor/breakpoints/breakpoints.min.js')}}"></script>
  <script>
    Breakpoints();
  </script>
  <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

  <nav class="site-navbar navbar navbar-inverse bg-light-blue-a400 navbar-fixed-top" role="navigation">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided"
      data-toggle="menubar">
        <span class="sr-only">Toggle navigation</span>
        <span class="hamburger-bar"></span>
      </button>
      <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse"
      data-toggle="collapse">
        <i class="icon md-more" aria-hidden="true"></i>
      </button>
      <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
        <img class="navbar-brand-logo" src="{{asset('images/logo-small.png')}}" title="Telkom Akses">
      </div>
    </div>

    <div class="navbar-container container-fluid">
      <!-- Navbar Collapse -->
      <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
        <!-- Navbar Toolbar -->
        <ul class="nav navbar-toolbar">
          <li class="hidden-float" id="toggleMenubar">
            <a data-toggle="menubar" href="#" role="button">
              <i class="icon hamburger hamburger-arrow-left">
                  <span class="sr-only">Toggle menubar</span>
                  <span class="hamburger-bar"></span>
                </i>
            </a>
          </li>
          <li class="hidden-xs" id="toggleFullscreen">
            <a class="icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
              <span class="sr-only">Toggle fullscreen</span>
            </a>
          </li>
        </ul>
        <!-- End Navbar Toolbar -->

        <div class="nav navbar-toolbar navbar-right navbar-toolbar-right">
          <p class="navbar-text" style="font-size: 12pt;"><span class="glyphicon glyphicon-calendar"></span> {{Carbon\Carbon::now()->format('l, d F Y')}}</p>
        </div>

        <div class="navbar-brand navbar-brand-center">
          <a href="{{url('/')}}">
            <img class="navbar-brand-logo" src="{{asset('images/logo.png')}}" title="Telkom Akses">
          </a>
        </div>
      </div>
      <!-- End Navbar Collapse -->

    </div>
  </nav>
  <div class="site-menubar">
    <div class="site-menubar-header">
      <div class="cover overlay">
        <img class="cover-image" src="{{asset('images/dashboard-header.jpg')}}" alt="...">
        <div class="overlay-panel vertical-align overlay-background">
          <div class="vertical-align-middle">
            <a class="avatar avatar-lg" href="javascript:void(0)">
              <img src="{{asset('images/pic.png')}}" alt="">
            </a>
            <div class="site-menubar-info">
              <h5 class="site-menubar-user">{{ Auth::user()->name }}</h5>
              <p class="site-menubar-email">{{ Auth::user()->email }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    @include('layouts.inc.menubar')


  <!-- Page -->
  <div class="page animsition">
    <div class="page-header text-center">
      @yield('header')
    </div>
    <div class="page-content">
      @yield('content')
    </div>
  </div>
  <!-- End Page -->


  <!-- Footer -->
  <footer class="site-footer">
    <div class="site-footer-legal">© 2016 <a href="{{url('/')}}">Logbook Gangguan OSS</a></div>
    <div class="site-footer-right">
      Crafted with <i class="red-600 icon md-favorite"></i> by <a href="mailto:mtaupiq@gmail.com">Me</a>
    </div>
  </footer>
  
  @include('layouts.inc.scripts')
</body>
</html>