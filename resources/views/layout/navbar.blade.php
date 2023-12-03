{{-- <!doctype html>
<html lang="en">

<head>
    <title>@yield('title')</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="website icon" type="png" href="../images/web.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap"
        rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Product -->
    <link href="{{ asset('Web/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Web/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Web/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <link href="{{ asset('Web/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('Web/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('Web/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('Web/footer.css') }}">
    
    <style>
        .active {
            color: #ffc713;
        }
    </style>
</head>

<body>
    <div class="container-xxl position-relative p-0" >
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <img src="{{asset('images/areeka.png')}}" alt="Logo" class="logo">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a
                        href="{{ route('home') }}"class="nav-item nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                    <a href="{{ route('store') }}"
                        class="nav-item nav-link {{ request()->routeIs('store') ? 'active' : '' }}">Stores</a> <li> <a
                      href="{{ route('about') }}" class="nav-item nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
                    <li> <a href="{{ route('contact') }}" class="nav-item nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
                </div>
                <!-- Add cart and heart icons -->


                @if (session('cart'))
                    <a href="{{ route('cart') }}" class="nav-item nav-link">
                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart"
                            data-notify="{{ count(session('cart', [])) }}"><i class="bi bi-cart"></i></div>
                    </a>
                @else
                    <a href="{{ route('cart') }}" class="nav-item nav-link">
                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart"
                            data-notify="{{ session('cartCount', 0) }}"><i class="bi bi-cart"></i></div>
                    </a>
                @endif


                <a href="{{ route('wish') }}"
                    class="  nav-item nav-link {{ request()->routeIs('wish') ? 'active' : '' }}"><i
                        class="bi bi-heart"></i></a>

                @if (Route::has('login'))
                    @auth
                        <ul class="navbar-nav flex-row  ml-3 mt-4">
                            <!-- Place this tag where you want the button to render. -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle" href="" data-bs-toggle="dropdown">
                                    <div class="" style="margin-left: 30px;">
                                        <img style="width: 50px;" src=" {{session('image')}}" alt
                                            class=" h-auto rounded-circle " />
                                    </div>
                                </a>
                                <ul style="margin-top: -60px;" class="dropdown-menu ">
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{route('profilee')}}">
                                            <i class="mdi mdi-account-outline me-2"></i>
                                            <span class="align-middle">My Profile</span>
                                        </a>
                                    </li>

                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}">
                                            <i class="mdi mdi-exit-to-app me-2"></i>
                                            <span class="align-middle">Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    @else
                        <a href="{{ route('register') }}"
                            class=" btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Sign in</a>
                            @endauth
								@endif
                </div>
            </nav>
    </div> --}}
<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Areeka</title>
    <link rel="icon" href="images/web.png">
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

                                <li class="nav-item {{ request()->routeIs('contact') ? 'active' : '' }}">
                                    <a class="nav-link " href="{{asset('/contact')}}">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="hearer_icon d-flex">

                            <a href="{{ route('wish') }}" class="{{ request()->routeIs('wish') ? 'active' : '' }}">
                                <i class="ti-heart"></i>
                            </a>


                            {{-- @if (session('cart'))
                            <a href="{{ route('cart') }}" class="nav-item nav-link">
                                <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart"
                                    data-notify="{{ count(session('cart', [])) }}"><i class="fas fa-cart-plus"></i></div>
                            </a>
                        @else
                            <a href="{{ route('cart') }}" class="nav-item nav-link">
                                <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart"
                                    data-notify="{{ session('cartCount', 0) }}"><i class="fas fa-cart-plus"></i></div>
                            </a>
                        @endif --}}
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
                            </div>

                        </div>
                        <div>
                            @if (Route::has('login'))
                                @auth

                                    <a href="{{route('profilee')}}" style="margin-right: 30px"><i class="ti-user"></i></a>
                                    <a href="{{ route('logout') }}" class="btn_1">Logout</a>
                                @else
                                    <a href="{{ route('register') }}" style="margin-left: 30px" class="btn_1">Sign in</a>

                                @endauth
                            @endif
                        </div>
                </div>
                </nav>
            </div>
        </div>
        </div>

    </header>
