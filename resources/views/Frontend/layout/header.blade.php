{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <title>innobrain Deals</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{asset('frontend/assets/img/apple-icon.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/assets/img/favicon.ico')}}">

    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/templatemo.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/custom.css')}}">


    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/fontawesome.min.css')}}">

</head>

<body>

    @php
    $cart = session('cart', []);
    $totalItems = count($cart);

@endphp


    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:info@company.com">info@company.com</a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340">010-020-0340</a>
                </div>
                <div>
                    <a class="text-light" href="https://fb.com/templatemo" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin fa-sm fa-fw"></i></a>
                </div>
            </div>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-black logo h1 align-self-center" href="index.html">
             Innobrain Deals
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a href="{{ url('/') }}" class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/About') }}" class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a  href="{{ url('/Product') }}" class="nav-link" href="shop.html">Product</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/Contact') }}" class="nav-link" href="contact.html">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                            <div class="input-group-text">
                                <i class="fa fa-fw fa-search"></i>
                            </div>
                        </div>
                    </div>
                    <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                        <i class="fa fa-fw fa-search text-dark mr-2"></i>
                    </a>

                    <a class="nav-icon position-relative text-decoration-none" href="{{ route('cart.view') }}">
                        <i class="fa fa-fw fa-shopping-bag text-dark mr-1"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark display: {{ $totalItems > 0 ? 'inline' : 'none' }};">{{ $totalItems }}</span>
                    </a>

                    <a class="nav-icon position-relative text-decoration-none" href="#">
                        <i class="fa fa-fw fa-user text-dark mr-3"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">+99</span>
                    </a>
                </div>
            </div>

        </div>
    </nav>
    --}}
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title> Innobrain Deals</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="{{asset('frontend/assets/img/apple-icon.png')}}">
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/assets/img/innobraindeals.jpg')}}">

        <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/templatemo.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/custom.css')}}">

        <!-- Load fonts style after rendering the layout styles -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/fontawesome.min.css')}}">
    <!--

    TemplateMo 559 Zay Shop

    https://templatemo.com/tm-559-zay-shop

    -->
    </head>

    <body>

        @php
        $cart = session('cart', []);
        $totalItems = count($cart);

    @endphp

        <!-- Start Top Nav -->
        {{-- <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
            <div class="container text-light">
                <div class="w-100 d-flex justify-content-between">
                    <div>
                        <i class="fa fa-envelope mx-2"></i>
                        <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:info@company.com">info@company.com</a>
                        <i class="fa fa-phone mx-2"></i>
                        <a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340">010-020-0340</a>
                    </div>
                    <div>
                        <a class="text-light" href="https://fb.com/templatemo" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                        <a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                        <a class="text-light" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
                        <a class="text-light" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin fa-sm fa-fw"></i></a>
                    </div>
                </div>
            </div>
        </nav> --}}
        <!-- Close Top Nav -->


        <!-- Header -->
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(17, 17, 17)">
            <div class="container d-flex justify-content-between align-items-center">

                <a class="navbar-brand text-black logo h1 align-self-center" href="{{url('/')}}" style="text-align: center;">
                    <img src="{{asset('frontend/assets/img/innobraindeals.jpg')}}" style="width: 160px; height: 80px;" alt="innobraindeals">
                    {{-- <span style="display: block; font-size: 18px; margin-top: 5px;">InnoBrainDeals</span> --}}
                </a>


                <button class="navbar-toggler border-0 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon text-white"></span>
                </button>



                <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                    <div class="flex-fill">

                        <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                            <li class="nav-item me-5">
                                @if(session('success'))
                                <a  class="nav-link text-white">Welcome, <br> {{ session('username') }}!</a>
                                @endif
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/') }}" class="nav-link text-white" href="index.html">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/About') }}" class="nav-link text-white" href="about.html">About</a>
                            </li>
                            <li class="nav-item">
                                <a  href="{{ url('/Product') }}" class="nav-link text-white" href="shop.html">Product</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/Contact') }}" class="nav-link text-white" href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="navbar align-self-center d-flex">
                        <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                            <div class="input-group">
                                <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                                <div class="input-group-text text-white">
                                    <i class="fa fa-fw fa-search"></i>
                                </div>
                            </div>
                        </div>


                        <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                            <i class="fa fa-fw fa-search text-dark mr-2 text-white"></i>
                        </a>
                        {{-- cart --}}
                        <a class="nav-icon position-relative text-decoration-none" href="{{ route('cart.view') }}">
                            <i class="fa fa-fw fa-shopping-bag text-dark mr-1 text-white"></i>
                            <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark display: {{ $totalItems > 0 ? 'inline' : 'none' }};">{{ $totalItems }}</span>
                        </a>
                        @auth
                        <div class="dropdown">
                            <a class="nav-icon position-relative text-decoration-none " href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-fw fa-user text-dark mr-3 text-white"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="userDropdown">
                                <li><a class="dropdown-item" href="{{url('/profile')}}">Profile</a></li>
                                <li>
                                    <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-dark text-center"
                                        style="margin-left: 20px; background-color: #000000; color:white;"><b>Logout</b></button>
                                </form>
                            </li>
                            </ul>
                        </div>

                        @else
                        <a class="nav-icon position-relative text-decoration-none" href="{{url('/register')}}">
                            <i class="fa fa-fw fa-user text-white mr-3"></i>
                            <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark"></span>
                        </a>
                        @endauth
                    </div>
                </div>

            </div>
        </nav>
        <!-- Close Header -->



