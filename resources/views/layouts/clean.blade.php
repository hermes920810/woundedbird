<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- all css here -->
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- jquery-ui.min css -->
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="{{ asset('css/meanmenu.min.css') }}">
    <!-- venobox css -->
    <link rel="stylesheet" href="{{ asset('css/venobox.css') }}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- nivo-slider css -->
    <link rel="stylesheet" href="{{ asset('lib/css/nivo-slider.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('lib/css/preview.css') }}" type="text/css" media="screen" />
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- modernizr js -->
    <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>
<body>
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience. </p>
    <![endif]-->
    <!-- Add your site or application content here -->
    <!-- header-area start -->
    <header class="header-area">
        <div class="header-top hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="top-social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <div class="top-srch-bx">
                            <input type="text" placeholder="Text Search">
                            <div class="button_search">
                                <button title="Search" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                        <div class="account-login">
                            <div class="accounts-login">
                                <a href="#"><span>Login</span></a>
                                <div class="login-form">
                                    <form action="#">
                                        <div class="form_wrapper_body">
                                            <p class="login-username">
                                                <label>
                                                    User or Email
                                                </label>
                                                <input type="text" placeholder="User or Email"> 
                                            </p>
                                            <p class="login-password">
                                                <label>
                                                    Password
                                                </label>
                                                <input type="text" placeholder="Password">
                                            </p>
                                        </div>
                                        <div class="form_wrapper_footer">
                                            <input class="button" type="submit" value="Login">
                                            <a class="button" href="#">Register</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="contacts-top">
                            <div class="contacts-supports">
                                <span class="spprt-phone">
                                    <i class="fa fa-phone"></i>
                                    01973833508
                                </span>
                                <span class="support-email">
                                    <i class="fa fa-envelope"></i>
                                    admin@bootexperts.com
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom" id="sticker">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="logo">
                            <a href="{{ route('landing') }}"><img src="{{ asset('img/logo.png') }}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 hidden-xs">
                        <div class="main-menu">
                            <nav>
                                <ul>
                                    <li class="{{ Request::is('/') ? 'active': '' }}"><a href="{{ route('landing') }}">Home</a></li>
                                    <li class="{{ Request::is('blogs') ? 'active': '' }}"><a href="{{ route('blogs') }}">Blogs</a></li>
                                    <li class="{{ Request::is('gallery') || Request::is('services') || Request::is('portfolios') ? 'active': '' }} parent">
                                        <a href="{{ route('services') }}">Services</a>
                                        <ul class="submenu">
                                            <li><a href="{{ route('services') }}">Services</a></li>
                                            <li><a href="{{ route('portfolios') }}">Portfolios</a></li>
                                            <li><a href="{{ route('gallery') }}">Gallery</a></li> 
                                        </ul>
                                    </li>
                                    <li class="{{ Request::is('team-member') ? 'active': '' }}"><a href="{{ route('team_member') }}">Team</a></li>
                                    <li class="{{ Request::is('contact-us') ? 'active': '' }}"><a href="{{ route('contact_us') }}">Contact us</a></li>
                                    <li><a href="#"><span class="donate-tdy">Donate Today!</span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-area end -->
    <!-- mobile-menu-area start -->
    <div class="mobile-menu-area visible-xs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="blog.html">Blogs</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="contact-us.html">Contact us</a></li>
                                <li><a href="portfolio.html">Portfolios</a></li>
                                <li><a href="team-member.html">Team member</a></li>
                                <li><a href="gallery.html">Gallery</a></li> 
                            </ul>
                        </nav>
                    </div>                  
                </div>
            </div>
        </div>
    </div>
    <!-- mobile-menu-area end -->
    
    @yield('content')
    <!-- footer-area start -->
    <footer class="footer-area">
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                        <div class="copyryt-txt">
                            Copyright ©
                            <a href="http://bootexperts.com">BootExperts.com</a> . All Rights Reserved
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                        <div class="footer-menu">
                            <nav>
                                <ul>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Our Story</a></li>
                                    <li><a href="#">Be a Volunteer</a></li>
                                    <li><a href="#">What we do</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area end -->

    <!-- all js here -->
    <!-- jquery latest version -->
    <script src="{{ asset('js/vendor/jquery-1.12.0.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- owl.carousel js -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <!-- jquery-ui js -->
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <!-- wow js -->
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <!-- venobox js -->
    <script src="{{ asset('js/venobox.min.js') }}"></script>
    <!-- mixitup js -->
    <script src="{{ asset('js/jquery.mixitup.js') }}"></script>   
    <!-- elevateZoom js -->
    <script src="{{ asset('js/jquery.elevateZoom-3.0.8.min.js') }}"></script>
    <!-- nivo-slider js -->
    <script src="{{ asset('lib/js/jquery.nivo.slider.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/home.js') }}" type="text/javascript"></script>   
    <!-- meanmenu js -->
    <script src="{{ asset('js/jquery.meanmenu.js') }}"></script>
    <!-- plugins js -->
    <script src="{{ asset('js/plugins.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
