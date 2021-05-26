<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap"
        rel="stylesheet">

    <title>Stand Blog @isset($title) - {{ $title }} Page @endisset</title>

    <!-- Bootstrap core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/css/fontawesome.css">
    <link rel="stylesheet" href="/css/templatemo-stand-blog.css">
    <link rel="stylesheet" href="/css/owl.css">
    <!--

TemplateMo 551 Stand Blog

https://templatemo.com/tm-551-stand-blog

-->
</head>

<body class="antialiased">

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <h2>Stand Blog<em>.</em></h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item {{  request()->routeIs('home') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('home') }}">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item {{  request()->routeIs('about') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('about') }}">About Us</a>
                        </li>
                        <li class="nav-item {{  request()->routeIs('posts') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('posts') }}">Blog Entries</a>
                        </li>
                        <li class="nav-item {{  request()->routeIs('contact') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                        </li>

                        @if (Route::has('login'))
                            @auth
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
                                </li>
                            @else
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                        aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> Account</a>
                                    <div class="dropdown-menu">
                                        <a href="{{ route('login') }}" class="dropdown-item">Log in</a>
                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="dropdown-item">Register</a>
                                        @endif
                                    </div>
                                </li>
                            @endauth
                        @endif

                    </ul>
                </div>
            </div>
        </nav>
    </header>

    {{ $slot }}

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="social-icons">
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Behance</a></li>
                        <li><a href="#">Linkedin</a></li>
                        <li><a href="#">Dribbble</a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="copyright-text">
                        <p>Copyright 2021 <a rel="nofollow" href="https://github.com/gonzalovsilva" target="_blank">Gonçalo Silva</a>

                            | Design: <a rel="nofollow" href="https://templatemo.com" target="_blank">TemplateMo</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="/js/custom.js"></script>
    <script src="/js/owl.js"></script>
    <script src="/js/slick.js"></script>
    <script src="/js/isotope.js"></script>
    <script src="/js/accordions.js"></script>

    <script language="text/Javascript">
        cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
        function clearField(t) { //declaring the array outside of the
            if (!cleared[t.id]) { // function makes it static and global
                cleared[t.id] = 1; // you could use true and false, but that's more typing
                t.value = ''; // with more chance of typos
                t.style.color = '#fff';
            }
        }

    </script>

</body>

</html>
