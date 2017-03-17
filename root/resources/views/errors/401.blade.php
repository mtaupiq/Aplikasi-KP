<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap material admin template">
  <meta name="author" content="">

  <title>Error 401</title>

  <link rel="apple-touch-icon" href="{{asset('images/apple-touch-icon.png')}}">
  <link rel="shortcut icon" href="{{asset('images/logo-small.png')}}">

  @include('layouts.inc.style')
  <style type="text/css">
  	.page-error .error-mark{
  		margin-bottom:33px
  	}
  	.page-error header h1{
  		font-size:10em;
  		font-weight:400
  	}
  	.page-error header p{
  		margin-bottom:30px;
  		font-size:30px;
  		text-transform:uppercase
  	}
  	.page-error h2{
  		margin-bottom:30px
  	}
  	.page-error .error-advise{
  		margin-bottom:25px;
  		color:#A9AFB5
  	}
  </style>
  
  <!-- Scripts -->
  <script src="{{asset('vendor/modernizr/modernizr.min.js')}}"></script>
  <script src="{{asset('vendor/breakpoints/breakpoints.min.js')}}"></script>
  <script>
    Breakpoints();
  </script>
</head>
<body class="page-error page-error-404 layout-full">
  <!-- Page -->
  <div class="page animsition vertical-align text-center" data-animsition-in="fade-in"
  data-animsition-out="fade-out">
    <div class="page-content vertical-align-middle">
      <header>
        <h1 class="animation-slide-top">401</h1>
        <p>Kamu siapa?</p>
      </header>
      <p class="error-advise">SEPERTINYA KAMU BUKAN ORANG SPESIAL!</p>
      <a class="btn btn-primary btn-round" href="{{url('/')}}"><i class="icon md-home"></i>PULANG</a>

      <footer class="page-copyright">
        <p>PT. Telkom Akses Tasikmalaya</p>
        <p>© 2016. All RIGHT RESERVED.</p>
        <div class="social">
          <a href="javascript:void(0)">
            <i class="icon bd-twitter" aria-hidden="true"></i>
          </a>
          <a href="javascript:void(0)">
            <i class="icon bd-facebook" aria-hidden="true"></i>
          </a>
          <a href="javascript:void(0)">
            <i class="icon bd-dribbble" aria-hidden="true"></i>
          </a>
        </div>
      </footer>
    </div>
  </div>
  <!-- End Page -->

  @include('layouts.inc.scripts')
</body>
</html>