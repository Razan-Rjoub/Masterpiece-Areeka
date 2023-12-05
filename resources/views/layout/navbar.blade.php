
<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Areeka</title>
    <link rel="icon" href="images/areeka2.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lightslider.min.css') }}">

</head>





<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> <img src="{{ asset('images/areeka.png') }}"
                                alt="logo" width="200px"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
                                    <a class="nav-link " href="{{ route('home') }}">Home</a>
                                </li>
                                <li
                                    class="nav-item {{ request()->routeIs('store') || request()->routeIs('singleproduct') || request()->routeIs('product') ? 'active' : '' }}">
                                    <a class="nav-link " href="{{ route('store') }}">Stores</a>
                                </li>

                                <li class="nav-item ">
                                    <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                                        href="{{ route('about') }}">About us</a>
                                </li>

                                <li class="nav-item {{ request()->is('contact') ? 'active' : '' }}"">
                                    <a class="nav-link " href="{{asset('/contact')}}">Contact</a>
                                </li>
                            </ul>
                         <div class="hearer_icon d-flex">
                            <a href="{{ route('wish') }}" class="{{ request()->routeIs('wish') ? 'active' : '' }}">
                                <i class="ti-heart"></i>
                            </a>
                        

                        </div>
                           <div
                                class="dropdown cart ">
                                <a href="{{ route('cart') }}">
                                    <i class="fas fa-cart-plus"></i>
                                    @if (session('cart'))
                                    <sup>{{ count(session('cart', [])) }}</sup>
                                    @else
                                    <sup>{{ session('cartCount', 0) }}</sup>
                                    @endif
                                </a>
                            </div> <div>
                            @if (Route::has('login'))
                                @auth

                                    <a href="{{route('profilee')}}" style="margin-right: 30px"><i class="ti-user"></i></a>
                                    <a href="{{ route('logout') }}" class="btn_1">Logout</a>
                                @else
                                    <a href="{{ route('register') }}" style="margin-left: 30px" class="btn_1">Sign in</a>

                                @endauth
                            @endif
                        </div></div>
                       
                </div>
                </nav>
            </div>
        </div>
        </div>

    </header>
