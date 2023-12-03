@extends('layout.master')
@section('title', 'single-Product')

@section('content')

    <link rel="stylesheet" href="{{ asset('Web/csssingle/style.css') }}">
    <link rel="stylesheet" href="{{ asset('Web/csssingle/single.css') }}">
    <!-- Include Lightbox2 CSS and JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">


    <br><br><br><br>
    <div class="product_image_area section_padding container">
        <div class="">
            @include('sweetalert::alert')
            <div class="row  ">
                <!-- Main Image -->
                <img id="mainImage" class="singleimg" src="{{ asset($product->image) }}" data-lightbox="product"
                    data-title="Main Image" />

                <!-- Thumbnail Images -->
                <div class="col-lg-2 col-sm-12 col-md-3 imgprod">
                    @for ($i = 2; $i <= 4; $i++)
                        @if (!is_null($product->{'image' . $i}))
                            <a href="{{ asset($product->{'image' . $i}) }}" data-lightbox="product"
                                data-title="{{$product->name}}">
                                <img class="thumbnail" src="{{ asset($product->{'image' . $i}) }}" />
                            </a>
                        @endif
                    @endfor
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
                            @include('sweetalert::alert')

                            <a href="{{ route('addtocart', ['id' => $product->id]) }}" class="btn-add "
                                style="width:300px;font-size:20px">ADD TO CART</a>
                            <a href="{{ route('wishlist', ['id' => $product->id]) }}" class="like_us">
                                @if ($wishlist)
                                    <svg style="color: #ffc713" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314" />
                                    </svg>
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314" />
                                    </svg>
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
        </div>
    </section>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            // Assuming you have the count in a variable named cartCount
            var cartCount =
                @if (session('cart'))
                    {{ count(session('cart')) }}
                @else
                    0
                @endif ;

            // Update the content dynamically
            $('#cartItemCount').text(cartCount);
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

@endsection
