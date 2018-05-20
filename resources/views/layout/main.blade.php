  <!DOCTYPE html>
  <html lang="en">


  <!-- Mirrored from uxgoody.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 24 Feb 2018 05:57:00 GMT -->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>{{(isset($title)?$title:'404 Not Found')}} - {{ setting('site.title') }}</title>
    <meta name="description" content="{{setting('site.description')}}">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="images/favicon.png">
    <link rel="icon" href="{{ url('storage/app/public').'/'.setting('site.favicon') }}_" type="image/png">
    <link rel="shortcut icon" href="{{ url('storage/app/public').'/'.setting('site.favicon') }}" type="image/x-icon">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/flexslider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/lightbox.min.css') }}">
      @yield('header-script')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/responsive.css') }}">

 
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->


  </head>
  <body>

    <!-- header navigation -->
    <header id="navigation">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <a href="index.php"><img src="{{ url('storage/app/public').'/'.setting('site.logo') }}" alt="Logo" class="main-nav-logo"></a>
            <span class="ti-menu nav-btn-open hidden-md hidden-lg"></span>
          </div>
          <div class="col-md-8 text-center">
            <ul class="main-nav">
              <li><a href="{{ url('') }}">Home</a></li>
              <li class="active"><a href="{{ url('about') }}">About</a></li>
              {{-- <li><a href="#}}">Services</a></li>
              <li><a href="#">Portfolio</a></li>
              <li><a href="#">Contact</a></li> --}}
            </ul>
          </div>
          <div class="col-md-2">
            {{-- <a href="#" class="login-btn btn pull-right">Blog</a> --}}
          </div>
        </div>
      </div>
    </header>
    <!-- header navigation end -->
      @yield('content')    
    <!-- footer -->
    <footer id="footer" class="padding-tb50">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-md-offset-0 col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1">
            <div class="col-md-4 padding-tb50">
              <img src="{{ url('storage/app/public').'/'.setting('site.flogo') }}" class="footerlogo" alt="">
              <p class="footer-info-text">{{ setting('site.description') }}</p>
              <p class="copyright">&copy; {{ date("Y") }} {{ setting('site.copyright') }}</p>
            </div>

            <div class="col-md-2 padding-tb50">
              <ul>
                <li><a href="{{ url('') }}">Home</a></li>
                <li><a href="{{ url('about') }}">About</a></li>
                {{-- <li><a href="#">Services</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Terms</a></li>
                <li><a href="#">Privacy Policy</a></li> --}}
              </ul>
            </div>

            <div class="col-md-2 padding-tb50">
              <ul>
                {{-- <li><a href="#">Team</a></li>
                <li><a href="#">Comapny</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Log in</a></li>
                <li><a href="#">Register</a></li> --}}
              </ul>
            </div>

            <div class="col-md-4 padding-tb50">
              <div class="contact-details">
                <div>
                  <span class="glyphicon glyphicon-map-marker"></span>
                  <p>
                    {!! setting('site.address') !!}
                  </p>
                </div>

                <div>
                  <span class="glyphicon glyphicon-envelope"></span>
                  <a href="mailto:{{ setting('site.email') }}">{{ setting('site.email') }}</a>
                </div>


                <div>
                  <span class="glyphicon glyphicon-earphone"></span>
                  <p> {{ setting('site.phone') }}</p>
                </div>
                <div class="socialnlinks">
                  <a href="#"><span class="ti-facebook"></span></a>
                  <a href="#"><span class="ti-instagram"></span></a>
                  <a href="#"><span class="ti-twitter"></span></a>
                  <a href="#"><span class="ti-linkedin"></span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- footer end -->

    <!-- sign in -->
    <section id="signin_box">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-xs-12 signin_cont">
            <p class="heading_login">LOGIN</p>
            <div class="margin-t50">
              <input type="email" name="email" placeholder="Enter Email" class="input_text">
              <input type="password" name="mobile" placeholder="Enter Password" class="input_text">
              <input type="submit" name="" value="SIGN IN" class="input_submit">
              <a href="#" class="forgot_pass">Forgot Password?</a>
            </div>
            <span class="ti-close close_btn"></span>
          </div>
        </div>
      </div>
    </section>

    <!-- sign in end -->
    <!-- MODERNIZR -->
    <script src="{{ asset('assets/frontend/js/modernizr.js') }}"></script>

    <!-- Scripts-->
    <script src="{{ asset('assets/frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.flexslider.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.easing.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/SmoothScroll.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/parallax.min.js') }}"></script>
    @yield('footer-script')
    <script src="{{ asset('assets/frontend/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>
    <!-- Scripts End-->

</body>

<!-- Mirrored from uxgoody.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 24 Feb 2018 05:57:43 GMT -->
</html>