@extends('layout.master')
@section('title', 'Cart')

@section('content')

    {{-- <div class="main-content-wrapper d-flex clearfix">

        <!-- Header Area End -->
        @if (session('cartPageReloaded'))
        <script>
            // Reload the page after a short delay (e.g., 1 second)
            setTimeout(function() {
                location.reload();
            }, 1000);
    
            @php session()->forget('cartPageReloaded') @endphp
        </script>
    @endif
        <div class="cart-table-area section-padding-100">
            @include('sweetalert::alert')
            <div class="container-fluid">
                <form class="bg0 p-t-75 p-b-85">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
                                <div class="m-l-25 m-r--38 m-lr-0-xl">
                                    <div class="wrap-table-shopping-cart">
                                        <table class="table-shopping-cart">
                                            <tr class="table_head">
                                                <th class="column-1">Product</th>
                                                <th class="column-2"></th>
                                                <th class="column-3">Price</th>
                                                <th class="column-4">Quantity</th>
                                                <th class="column-5">Total</th>
                                                <th class="column-6"></th>
                                            </tr>
                                            @php
                                                $total = 0;
                                            @endphp
                                            @if (session('cart'))

                                                @foreach (session('cart') as $item => $details)
                                                    @php
                                                        $total += $details['price'] * $details['quantity'];
                                                    @endphp
                                                    <tr class="table_row" rowId={{ $item }}>
                                                        <td class="column-1">
                                                            <div class="how-itemcart1">
                                                                <img src="{{ asset('images/product/' . $details['image']) }}"
                                                                alt="IMG">
                                                            </div>
                                                        </td>
                                                        <td class="column-2">{{ $details['name'] }} </td>
                                                        <td class="column-3">{{ $details['price'] }} JOD</td>
                                                        <td class="column-4">
                                                            <div class="wrap-num-product flex-w m-l-auto m-r-0">
                                                                <a class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m"
                                                                    href='{{ route('quantitycart', ['id' => $item, 'type' => 'minus']) }}'>
                                                                    <i class="fs-16 zmdi zmdi-minus"></i>
                                                                </a>

                                                                <input class="mtext-104 cl3 txt-center num-product"
                                                                    type="number" name="num-product1"
                                                                    value="{{ $details['quantity'] }}">

                                                                <a class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m"
                                                                    href='{{ route('quantitycart', ['id' => $item, 'type' => 'plus']) }}'>
                                                                    <i class="fs-16 zmdi zmdi-plus"></i>
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td class="column-5">
                                                            {{ $details['price'] * $details['quantity'] }}JOD</td>
                                                        <td class="column-1"><a
                                                                href="{{ route('deletecart', ['item' => $item]) }}"><i
                                                                    class="zmdi zmdi-delete"
                                                                    style="color:red;font-size:18px"></i></a></td>
                                                    </tr>
                                                @endforeach
                                            @elseif (Auth::id())
                                                @if (count($usercart) > 0)
                                                    @php $total = 0; @endphp
                                                    @foreach ($usercart as $item)
                                                        <tr class="table_row">
                                                            <td class="column-1">
                                                                <div class="how-itemcart1">
                                                                    <img src="{{ asset('images/product/' . $item->product->image) }}" alt="IMG">
                                                                </div>
                                                            </td>
                                                            <td class="column-2">{{ $item->product->name }} </td>
                                                            <td class="column-3">{{ $item->price }} JOD</td>
                                                            <td class="column-4">
                                                                <div class="wrap-num-product flex-w m-l-auto m-r-0">
                                                                    <a class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m"
                                                                        href='{{ route('quantitycart', ['id' => $item, 'type' => 'minus']) }}'>
                                                                        <i class="fs-16 zmdi zmdi-minus"></i>
                                                                    </a>

                                                                    <input class="mtext-104 cl3 txt-center num-product"
                                                                        type="number" name="num-product1"
                                                                        value="{{ $item->quantity }}">

                                                                    <a class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m"
                                                                        href='{{ route('quantitycart', ['id' => $item, 'type' => 'plus']) }}'>
                                                                        <i class="fs-16 zmdi zmdi-plus"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                            <td class="column-5">
                                                                {{ $item->Totalprice }}JOD</td>
                                                            <td class="column-1"><a
                                                                    href="{{ route('deletecart', ['item' => $item->id]) }}"><i
                                                                        class="zmdi zmdi-delete"
                                                                        style="color:red;font-size:18px"></i></a></td>
                                                        </tr>
                                                        @php
                                                            
                                                            $total += $item->Totalprice;
                                                            
                                                        @endphp
                                                    @endforeach
                                                @else
                                                    <p>No item in cart</p>
                                                @endif
                                            @else
                                                <p>No item in cart</p>
                                            @endif



                                        </table>
                                    </div>

                                    <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
                                        <div class="flex-w flex-m m-r-20 m-tb-5">
                                            <input class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5"
                                                type="text" name="coupon" placeholder="Coupon Code">

                                            <div
                                                class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
                                                Apply coupon
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
                                <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
                                    <h4 class="mtext-109 cl2 p-b-30">
                                        Cart Totals
                                    </h4>

                                    <div class="flex-w flex-t bor12 p-b-13">
                                        <div class="size-208">
                                            <span class="stext-110 cl2">
                                                Subtotal:
                                            </span>
                                        </div>

                                        <div class="size-209">
                                            <span class="mtext-110 cl2">
                                                {{ $total }}JOD
                                            </span>
                                        </div>
                                    </div>

                                    <div class="flex-w flex-t bor12 p-t-15 p-b-30">
                                        <div class="size-208 w-full-ssm">
                                            <span class="stext-110 cl2">
                                                Shipping:
                                            </span>
                                        </div>
                                        <div class="size-209">
                                            <span class="mtext-110 cl2">
                                                FREE
                                            </span>
                                        </div>
                                    </div>


                                    <div class="flex-w flex-t p-t-27 p-b-33">
                                        <div class="size-208">
                                            <span class="mtext-101 cl2">
                                                Total:
                                            </span>
                                        </div>

                                        <div class="size-209 p-t-1">
                                            <span class="mtext-110 cl2">
                                                {{ $total }} JOD
                                            </span>
                                        </div>
                                    </div>


                                    <a href="{{ route('checkout') }}"
                                        class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                                        Proceed to Checkout</a>


                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}
    <br><br>
    @if (session('cartPageReloaded'))
    <script>
        // Reload the page after a short delay (e.g., 1 second)
        setTimeout(function() {
            location.reload();
        }, 1000);

        @php session()->forget('cartPageReloaded') @endphp
    </script>
@endif
    <section class="cart_area padding_top mt-5">
        <div class="container">
            @include('sweetalert::alert')
            <div class="cart_inner">
                
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            
                            @php
                                $total = 0;
                            @endphp
                            @if (session('cart'))

                                @foreach (session('cart') as $item => $details)
                                    @php
                                        $total += $details['price'] * $details['quantity'];
                                    @endphp <tr>

                                        <td>
                                            <div class="media">
                                                <div class="d-flex">
                                                    <img style="width:100px" src="{{ asset($details['image']) }}"
                                                        alt="" />
                                                </div>
                                                <div class="media-body">
                                                    <p>{{ $details['name'] }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h5>{{ $details['price'] }}JOD</h5>
                                        </td>
                                        <td>
                                            <div class="product_count">
                                                <a href="{{ route('quantitycart', ['id' => $item, 'type' => 'minus']) }}">
                                                    <span class="input-number-decrement"> <i
                                                            class="ti-angle-down"></i></span></a>
                                                <input class="input-number" type="text"
                                                    value="{{ $details['quantity'] }}" min="0" max="10">

                                                <a href="{{ route('quantitycart', ['id' => $item, 'type' => 'plus']) }}"><span
                                                        class="input-number-increment"> <i
                                                            class="ti-angle-up"></i></span></a>
                                            </div>
                                        </td>
                                        <td>
                                            <h5> {{ $details['price'] * $details['quantity'] }}JOD </h5>
                                        </td>
                                        <td>
                                            <a
                                            href="{{ route('deletecart', ['item' => $item->id]) }}">
                                            <i class="ti-heart"></i>
                                            </a>
                                        </td>

                                    </tr>
                                @endforeach
                            @elseif (Auth::id())
                                @if (count($usercart) > 0)
                                    @php $total = 0; @endphp
                                    @foreach ($usercart as $item)
                                        <tr>

                                            <td>
                                                <div class="media">
                                                    <div class="d-flex">
                                                        <img style="width:100px" src="{{ asset($item->product->image) }}"
                                                            alt="" />
                                                    </div>
                                                    <div class="media-body">
                                                        <p>{{ $item->product->name }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h5>{{ $item->price }}JOD</h5>
                                            </td>
                                            <td>
                                                <div class="product_count">
                                                    <a href="{{ route('quantitycart', ['id' => $item, 'type' => 'minus']) }}">
                                                        <span class="input-number-decrement"> <i
                                                                class="ti-angle-down"></i></span></a>
                                                    <input class="input-number" type="text"
                                                        value="{{ $item->quantity }}" min="0" max="10">
    
                                                    <a href="{{ route('quantitycart', ['id' => $item, 'type' => 'plus']) }}"><span
                                                            class="input-number-increment"> <i
                                                                class="ti-angle-up"></i></span></a>
                                                </div>
                                            </td>
                                            <td>
                                                <h5>{{ $item->Totalprice }}JOD</h5>
                                            </td>
                                            <td>
                                                <a
                                                href="{{ route('deletecart', ['item' => $item->id]) }}">
                                                <i class="ti-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @php

                                            $total += $item->Totalprice;

                                        @endphp
                                    @endforeach
                                @else
                                    <p>No item in cart</p>
                                @endif
                            @else
                                <p>No item in cart</p>
                            @endif


                            <tr>
                                <td></td>
                                <td></td>
                                <td>
                                    <h5>Total</h5>
                                </td>
                                <td>
                                    <h5>{{ $total }}JOD</h5>
                                </td>
                            </tr>
                            <tr class="shipping_area">
                                <td></td>
                                <td></td>
                                <td>
                                    <h5>Shipping</h5>
                                </td>
                                <td>
                                    <div class="shipping_box">
                                        <ul class="list">

                                            <li class="active">
                                                <a href="#">Free Shipping</a>
                                            </li>



                                        </ul>

                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="checkout_btn_inner float-right">
                        <a class="btn_1" href="/stores">Continue Shopping</a>
                        <a class="btn_1 checkout_btn_1" href="{{ route('checkout') }}">Proceed to checkout</a>
                    </div>
                    
                </div>
            </div>
    </section>

@endsection
