@extends('layout.master')
@section('title', 'single-Product')

@section('content')

    <link rel="stylesheet" href="{{ asset('Web/csssingle/style.css') }}">
    <link rel="stylesheet" href="{{ asset('Web/csssingle/single.css') }}">
    <div class="product_image_area section_padding">
        <div class="">
            @include('sweetalert::alert')
            <div class="row  ">
                <img src="{{ asset('images/product/' . $product->image) }}" />
                <div class="col-lg-2 col-sm-12 col-md-3 imgprod"> <img src="{{ asset('images/product/' . $product->image2) }}" />
                    <img src="{{ asset('images/product/' . $product->image3) }}" />
                    <img src="{{ asset('images/product/' . $product->image4) }}" />
                </div>

                <div class="col-lg-5 col-xl-4">
                    <div class="s_product_text">
                        <h3>{{ $product->name }} </h3>
                        <h2>{{ $product->price }}JOD</h2>
                        <ul class="list">
                            <li>
                                <a class="active" href="#">
                                    <span>Category</span> : {{ $product->category->name }}</a>
                            </li>
                            <li>
                                @if ($product->stock == 'on')
                                    <a href="#"> <span>Availibility</span> : In Stock</a>
                                @endif
                            </li>
                        </ul>
                        <p>
                            {{ $product->descrption }}
                        </p>
                        <div class="card_area d-flex justify-content-between align-items-center row">
                            {{-- <div class="product_count">
                                <span class="inumber-decrement"> <i class="bi bi-dash"></i></span>
                                <input class="input-number" type="text" value="1" min="0" max="10" name="quantity" id="quantity-input">
                                <span class="number-increment"> <i class="bi bi-plus"></i></span>
                            </div> --}}
                            @include('sweetalert::alert')
                            
                            <a href="{{ route('addtocart', ['id' => $product->id]) }}" class="btn-add " style="width:300px;font-size:20px">ADD TO CART</a>
                            <a href="{{ route('wishlist', ['id' => $product->id]) }}" class="like_us">
                                @if ($wishlist)
                                    <i class="bi bi-heart-fill" style="color:#ffc713"></i>
                                @else
                                    <i class="bi bi-heart"></i>
                                @endif
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================End Single Product Area =================-->

    <!--================Product Description Area =================-->
    <section class="product_description_area">
        <div class="container">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                        aria-selected="true">Description</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                        aria-controls="profile" aria-selected="false">Specification</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" id="review-tab" data-toggle="tab" href="#review" role="tab"
                        aria-controls="review" aria-selected="false">Reviews</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                @include('Product.description')

                @include('Product.specification')
                @include('Product.review')
            </div>
    </section>
    <!--================End Product Description Area =================-->

    <!-- product_list part start-->
    <section class="product_list best_seller">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h2>Best Sellers </h2>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-lg-12">
                    <div class="best_product_slider ">
                        <div class="single_product_item">
                            <img src="../images/Bedroom-category/BoyBedroom.jpg" alt="">
                            <div class="single_product_text">
                                <h4>Quartz Belt Watch</h4>
                                <h3>$150.00</h3>
                            </div>
                        </div>

                        <div class="single_product_item">
                            <img src="../images/Bedroom-category/BoyBedroom2.jpg" alt="">
                            <div class="single_product_text">
                                <h4>Quartz Belt Watch</h4>
                                <h3>$150.00</h3>
                            </div>
                        </div>
                        <div class="single_product_item">
                            <img src="../images/Bedroom-category/GirlsBedroom4.jpg" alt="">
                            <div class="single_product_text">
                                <h4>Quartz Belt Watch</h4>
                                <h3>$150.00</h3>
                            </div>
                        </div>
                        <div class="single_product_item">
                            <img src="../images/Bedroom-category/MasterBedroom2.jpg" alt="">
                            <div class="single_product_text">
                                <h4>Quartz Belt Watch</h4>
                                <h3>$150.00</h3>
                            </div>
                        </div>
                        <div class="single_product_item">
                            <img src="../images/Bedroom-category/GirlsBedroom3.jpg" alt="">
                            <div class="single_product_text">
                                <h4>Quartz Belt Watch</h4>
                                <h3>$150.00</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
