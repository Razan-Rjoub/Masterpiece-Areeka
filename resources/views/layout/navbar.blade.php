<!doctype html>
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
    <div class="container-xxl position-relative p-0" style="height: 100%;">
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
                        class="nav-item nav-link {{ request()->routeIs('store') ? 'active' : '' }}">Stores</a <li> <a
                        href="../Aboutus/Aboutus.html" class="nav-item nav-link">About</a></li>
                    <li> <a href="../contact/contact.html" class="nav-item nav-link">Contact</a></li>
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
