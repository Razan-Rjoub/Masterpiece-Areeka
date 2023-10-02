@extends('layout.master')
@section('title', 'wishlist')

@section('content')

    <link rel="stylesheet" href="{{ asset('Web/Products.css') }}">
    <link rel="stylesheet" href="{{ asset('Web/styleproduct.css') }}">
    
    <section class="products">
        <div class="row align-items-center latest_product_inner" id="product-container" >
            @if (count($wishlist) > 0)
                @foreach ($wishlist as $item)
                    @if ($item->product->status == 'active')
                        <div class="col-lg-4 col-sm-6 " style="margin-top: 100px" >
                            <div class="single_product_item">
                                <a href="{{ route('singleproduct', ['id' => $item->product->id]) }}"><img style="height: 400px"  src="{{ $item->product->image }}"
                                        alt=""></a>
                                <div class="single_product_text">
                                    <h4>{{ $item->product->name }} </h4>
                                    <h3>{{ $item->product->price }}JOD</h3>
                                    <a href="{{ route('wishlistremove', ['id' => $item->id]) }}" class="add_cart">+ add to cart<i class="bi bi-trash"></i></a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            @else
            <div class="col-9 text-center" style="margin-top: 300px;">
                <p>No wishlist available at the moment.</p>
            </div>
            @endif
        </div>
    </section>
    @endsection