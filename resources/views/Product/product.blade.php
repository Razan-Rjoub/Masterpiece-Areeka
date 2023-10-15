@extends('layout.master')
@section('title', 'product')

@section('content')
    <link rel="stylesheet" href="{{ asset('Web/Products.css') }}">
    <link rel="stylesheet" href="{{ asset('Web/styleproduct.css') }}">
    <div class="container-xxl bg-primary hero-header">
        <div class="container px-lg-5">
            <div class="row g-5 align-items-end">
                <div class="col-lg-6 text-center text-lg-start">
                    <p class="text-white pb-3 store  ">
                        @if (request()->routeIs('product'))
                            <a class="backHome" href="../Home/Home.html">Home</a></span><a class="backstores"
                                href="../Stores/stores.html"><i class=" bi-dash"></i>Stores</a><a class="backProducts"
                                href="../Products/Products.html"><i class=" bi-dash"></i>{{ $store->name }}</a>
                        @endif
                    </p>
                   
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="fillters">

        <span class="dropdown custom-dropdown">
            <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Category
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item " onclick="updateCategory('Bedrooms')" href="#">Bedrooms</a>
                <a class="dropdown-item dropdown-category " onclick="updateCategory('Chairs')" href="#">Chairs</a>
                <a class="dropdown-item dropdown-category" onclick="updateCategory('Outdoor Furniture')"
                    href="#">Outdoor Furniture</a>
                <a class="dropdown-item dropdown-category" href="#"
                    onclick="updateCategory('Kitchen Furniture')">Kitchen Furniture</a>
                <a class="dropdown-item dropdown-category" href="#" onclick="updateCategory('Tables')">Tables</a>
            </div>
        </span>




        <span class="dropdown custom-dropdown">
            <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Price Range
            </button>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">0-300</a>
                <a class="dropdown-item" href="#">300-600</a>
                <a class="dropdown-item" href="#">600-1000</a>
            </div>
        </span>


        <span class="dropdown custom-dropdown ">
            <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Sort by
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Price Low to High</a>
                <a class="dropdown-item" href="#">Price High to Low</a>
            </div>
        </span>
    </div>
    <h6 class="category-select"></h6>
    <section class="products">
        <div class="row align-items-center latest_product_inner" id="product-container">
            @if (count($product) > 0)
                @foreach ($product as $item)
                    @if ($item->status == 'active')
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_product_item">
                                <a href="{{ route('singleproduct', ['id' => $item->id]) }}"><img  style="height: 400px" src="{{ asset('images/product/' . $item->image) }}"
                                        alt=""></a>
                                <div class="single_product_text">
                                    <h4>{{ $item->name }} </h4>
                                    <h3>{{ $item->price }}JOD</h3>
                                    <a href="{{ route('wishlist', ['id' => $item->id]) }}" class="add_cart">+ add to cart<i class="bi bi-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            @else
                <p>No products available at the moment.</p>
            @endif
        </div>
    </section>
@endsection
