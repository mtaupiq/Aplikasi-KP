<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap material admin template">
    <meta name="author" content="">

    <title>Login</title>

    <link rel="apple-touch-icon" href="{{asset('images/apple-touch-icon.png')}}">
    <link rel="shortcut icon" href="{{asset('images/logo-small.png')}}">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap.min3f0d.css?v2.2.0')}}">
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap-extend.min3f0d.css?v2.2.0')}}">
    <link rel="stylesheet" href="{{asset('dist/css/site.min3f0d.css?v2.2.0')}}">
    <link rel="stylesheet" href="{{asset('dist/css/login-v3.min3f0d.css?v2.2.0')}}">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{asset('dist/vendor/animsition/animsition.min3f0d.css?v2.2.0')}}">
    <link rel="stylesheet" href="{{asset('dist/vendor/asscrollable/asScrollable.min3f0d.css?v2.2.0')}}">
    <link rel="stylesheet" href="{{asset('dist/vendor/waves/waves.min3f0d.css?v2.2.0')}}">

    <!-- Fonts -->
    <link rel="stylesheet" href="{{asset('dist/fonts/material-design/material-design.min3f0d.css?v2.2.0')}}">
    <link rel="stylesheet" href="{{asset('dist/fonts/brand-icons/brand-icons.min3f0d.css?v2.2.0')}}">

    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,700'>

    <!-- Scripts -->
    <script src="{{asset('dist/vendor/modernizr/modernizr.min.js')}}"></script>
    <script src="{{asset('dist/vendor/breakpoints/breakpoints.min.js')}}"></script>
    <script>
        Breakpoints();
    </script>
</head>
<body class="page-login-v3 layout-full">
    <div class="page animsition vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">
        <div class="page-content vertical-align-middle">
            <div class="panel">
                <div class="panel-body">
                    <div class="brand">
                        <img class="brand-img" src="{{asset('images/logo.png')}}" alt="Telkom Akses" style="width: 80%;height: 80%;">
                        <h2 class="brand-text font-size-18">Login</h2>
                    </div>
                    <form role="form" method="POST" action="{{ route('login') }}" autocomplete="off">
                        {{ csrf_field() }}

                        <div class="form-group form-material floating{{ $errors->has('username') ? ' has-error' : '' }}">
                            <input type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus oninvalid="this.setCustomValidity('Username harus diisi!')" oninput="setCustomValidity('')">
                            <label class="floating-label">Username</label>
                            @if ($errors->has('username'))
                            <span class="help-block">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group form-material floating{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input type="password" class="form-control" name="password" value="{{ old('password') }}" required oninvalid="this.setCustomValidity('Password harus diisi!')" oninput="setCustomValidity('')">
                            <label class="floating-label">Password</label>
                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group clearfix">
                            <div class="checkbox-custom checkbox-inline checkbox-primary checkbox-lg pull-left">
                                <input type="checkbox" id="inputCheckbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="inputCheckbox">Remember me</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-lg margin-top-40">Sign in</button>
                    </form>
                </div>
            </div>

            <footer class="page-copyright page-copyright-inverse">
                <p>PT. Telkom Akses Tasikmalaya</p>
                <p>© 2016. All RIGHT RESERVED.</p>
                <div class="social">
                  <a class="btn btn-icon btn-pure" href="javascript:void(0)">
                    <i class="icon bd-twitter" aria-hidden="true"></i>
                </a>
                <a class="btn btn-icon btn-pure" href="javascript:void(0)">
                    <i class="icon bd-facebook" aria-hidden="true"></i>
                </a>
                <a class="btn btn-icon btn-pure" href="javascript:void(0)">
                    <i class="icon bd-google-plus" aria-hidden="true"></i>
                </a>
            </div>
        </footer>
    </div>
</div>

<!-- Core  -->
<script src="{{asset('dist/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('dist/vendor/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('dist/vendor/animsition/animsition.min.js')}}"></script>
<script src="{{asset('dist/vendor/asscroll/jquery-asScroll.min.js')}}"></script>
<script src="{{asset('dist/vendor/mousewheel/jquery.mousewheel.min.js')}}"></script>
<script src="{{asset('dist/vendor/asscrollable/jquery.asScrollable.all.min.js')}}"></script>
<script src="{{asset('dist/vendor/ashoverscroll/jquery-asHoverScroll.min.js')}}"></script>
<script src="{{asset('dist/vendor/waves/waves.min.js')}}"></script>

<!-- Plugins -->
<script src="{{asset('dist/vendor/jquery-placeholder/jquery.placeholder.min.js')}}"></script>

<!-- Scripts -->
<script src="{{asset('dist/js/core.min.js')}}"></script>
<script src="{{asset('dist/js/site.min.js')}}"></script>

<script src="{{asset('dist/js/components/asscrollable.min.js')}}"></script>
<script src="{{asset('dist/js/components/animsition.min.js')}}"></script>
<script src="{{asset('dist/js/components/jquery-placeholder.min.js')}}"></script>
<script src="{{asset('dist/js/components/material.min.js')}}"></script>


<script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;
      $(document).ready(function() {
        Site.run();
    });
  })(document, window, jQuery);
</script>
</body>
</html>