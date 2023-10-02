@extends('layout.master')
@section('title', 'Home')

@section('content')

<link href="{{asset('Web/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('Web/style.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('Web/csshome/Home.css')}}">
<link rel="stylesheet" href="{{asset('Web/csshome/style.css')}}">
        <div class="container-xxl">
            <div class=" px-lg-5">
                <div class="row g-5 align-items-end">
                    <div class="col-lg-6 text-center text-lg-start" style="margin-bottom: 200px">
                        <h1 class="text-white mb-4 animated slideInDown">Furnish your dream with our furniture!</h1>
                        <p class="text-white pb-3 animated slideInDown"> Unleash your creativity with our versatile
                            stores options.
                            Experience comfort and quality with our furniture</p>
                        <a href="../Stores/stores.html"
                            class="btn btn-secondary py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Shop
                            Now</a>
                    </div>
                    <div class="col-lg-6 text-center text-lg-start mb-5">
                        <img class="img-f animated zoomIn" src="../images/heading.png" alt="">

                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="why-choose-section" style="background-color: black;margin-top:-50px">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-12">
                    <br><br>
                    <h2 class="section-title" style="color: white; text-align: center;">Why Areeka</h2>


                    <div class="row my-5">
                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="../images/delivery-truck (1).png" alt="Image" class="imf-fluid"
                                        style="width: 100px;">
                                </div>
                                <h3 style="color: white;">Fast &amp; Free Shipping</h3>
                                <p style="color: white;">Enjoy shopping with our exclusive offer free shipping on all
                                    stores in
                                    purchase
                                    over <span style="font-weight: bold; color: #ffc713;">500JD</span>,
                                    so hurry to take advantage of the offer</p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="../images/shopping-bag.png" alt="Image" class="imf-fluid"
                                        style="width: 80px;padding-bottom: 10px;">
                                </div>
                                <h3 style="color: white;">Easy to Shop</h3>
                                <p style="color: white;">ensures that finding and purchasing your desired items is
                                    effortless and enjoyable</p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="../images/warranty (1).png" alt="Image" class="imf-fluid"
                                        style="width: 80px;padding-bottom: 10px;">
                                </div>
                                <h3 style="color: white;"> 24/7 Support</h3>
                                <p  style="color: white;">3 years warranty
                                    We really believe in our stores,
                                    so we provide a guarantee time
                                    of 3 years for you our customers</p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="../images/price-tag (1).png" alt="Image" class="imf-fluid"
                                        style="width: 80px;padding-bottom: 10px;">
                                </div>
                                <h3 style="color: white;">Hassle Free Returns</h3>
                                <p style="color: white;">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet
                                    velit. Aliquam vulputate.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('Home.category')

    @include('Home.stores')

    @endsection

  