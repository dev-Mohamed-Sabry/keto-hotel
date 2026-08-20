<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>@yield('title')</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('assets/Website/css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('assets/Website/css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('assets/Website/css/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="{{ asset('assets/Website/images/logo.png') }}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/Website/css/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="{{asset('assets/Website/images/loading.gif')}}" alt="#" /></div>
    </div>

    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="{{ route('home') }}"><img
                                            src="{{ asset('assets/Website/images/logo.png') }}" alt="#" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <nav class="navigation navbar navbar-expand-md navbar-dark">

                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarsExample04">
                                {{-- Main Menu --}}
                                <ul class="navbar-nav main-nav">
                                    <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
                                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                                    </li>

                                    <li class="nav-item {{ request()->routeIs('about') ? 'active' : '' }}">
                                        <a class="nav-link" href="{{ route('about') }}">About</a>
                                    </li>

                                    <li class="nav-item {{ request()->routeIs('rooms') ? 'active' : '' }}">
                                        <a class="nav-link" href="{{ route('rooms') }}">Rooms</a>
                                    </li>

                                    <li class="nav-item {{ request()->routeIs('gallery') ? 'active' : '' }}">
                                        <a class="nav-link" href="{{ route('gallery') }}">Gallery</a>
                                    </li>

                                    <li class="nav-item {{ request()->routeIs('blog') ? 'active' : '' }}">
                                        <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                                    </li>

                                    <li class="nav-item {{ request()->routeIs('contact') ? 'active' : '' }}">
                                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                                    </li>
                                </ul>
                                {{-- Auth Menu --}}

                                <ul class="navbar-nav main-nav">
                                    @guest
                                        <li class="nav-item">
                                            <a class=" btn btn-secondary text-light m-0"
                                                href="{{ route('login') }}">Login</a>
                                        </li>

                                        <li class="mx-2 nav-item">
                                            <a class=" btn btn-primary text-light" href="{{ route('register') }}">
                                                Register
                                            </a>
                                        </li>
                                    @endguest

                                    @auth
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="{{Auth::user()->usertype === 'admin' ? route('admin.dashboard') : route('dashboard') }}">
                                                Dashboard
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <form action="{{ route('logout') }}" method="POST">
                                                @csrf
                                                <button type="submit" class="nav-link border-0 bg-transparent">
                                                    Logout
                                                </button>
                                            </form>
                                        </li>
                                    @endauth
                                </ul>
                            </div>

                    </div>
                    </nav>
                </div>
            </div>
        </div>
        </div>
    </header>

    @yield('content')



    <!--  footer -->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row pb-5">
                    <div class=" col-md-4">
                        <h3>Contact US</h3>
                        <ul class="conta">
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i> Address</li>
                            <li><i class="fa fa-mobile" aria-hidden="true"></i> +01 1234569540</li>
                            <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#"> demo@gmail.com</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h3>Menu Link</h3>
                        <ul class="link_menu">
                            <li class="{{request()->routeIs('home') ? 'active' : '' }}"><a
                                    href="{{ route('home') }}">Home</a></li>
                            <li class="{{ request()->routeIs('about') ? 'active' : '' }}"><a
                                    href="{{ route('about') }}">
                                    About</a></li>
                            <li class="{{ request()->routeIs('rooms') ? 'active' : '' }}"><a
                                    href="{{ route('rooms') }}">
                                    Rooms</a></li>
                            <li class="{{ request()->routeIs('gallery') ? 'active' : '' }}"><a
                                    href="{{ route('gallery') }}">
                                    Gallery</a></li>
                            <li class="{{ request()->routeIs('blog') ? 'active' : '' }}"><a href="{{ route('blog') }}">
                                    Blog</a></li>
                            <li class="{{ request()->routeIs('contact') ? 'active' : '' }}"><a
                                    href="{{ route('contact') }}">
                                    Contact Us</a></li>
                            @guest
                                <li class="{{ request()->routeIs('register') ? 'active' : '' }}">
                                    <a href="{{ route('register') }}">Register</a>
                                </li>

                                <li class="{{ request()->routeIs('login') ? 'active' : '' }}">
                                    <a href="{{ route('login') }}">Login</a>
                                </li>
                            @endguest

                            @auth
                                <li>
                                    <a href="{{ route('dashboard') }}">Dashboard</a>
                                </li>

                                <li>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn p-0 border-0 bg-transparent text-white">
                                            Logout
                                        </button>
                                    </form>
                                </li>
                            @endauth
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h3>News letter</h3>
                        <form class="bottom_form">
                            <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
                            <button class="sub_btn">subscribe</button>
                        </form>
                        <ul class="social_icon">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">

                            <p>
                                © 2019 All Rights Reserved. Design by <a href="https://html.design/"> Free Html
                                    Templates</a>
                                <br><br>
                                Distributed by <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
                            </p>

                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="{{ asset('assets/Website/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/Website/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/Website/js/jquery-3.0.0.min.js') }}"></script>
    <!-- sidebar -->
    <script src="{{ asset('assets/Website/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('assets/Website/js/custom.js') }}"></script>
</body>

</html>