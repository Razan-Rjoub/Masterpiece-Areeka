@extends('layout.master')
@section('title', 'checkout')

@section('content')
    <link rel="stylesheet" href="{{ asset('Web/cart.css') }}">

    <div class="container-xxl bg-primary hero-header">
        <div class="container px-lg-5">
            <div class="row g-5 align-items-end">

            </div>
        </div>
    </div>
    </div>
    <div class="main-content-wrapper d-flex clearfix">

        <div class="cart-table-area section-padding-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="checkout_details_area mt-50 clearfix">

                            <div class="cart-title">
                                <h2>Checkout</h2>
                            </div>

                            <form action="{{ route('checkoutcreate') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <input type="text" class="form-control" id="name"
                                            value="{{ $user->name }}" placeholder="Name" name="name" required>
                                        @error('name')
                                            <span style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input type="email" class="form-control" id="email" placeholder="Email"
                                            name="email" value="{{ $user->email }}">
                                        @error('email')
                                            <span style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input type="text" class="form-control mb-3" id="street_address"
                                            placeholder="Address" name="address" value="{{ $user->Address }}">
                                        @error('address')
                                            <span style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <input type="number" class="form-control" id="phone_number" min="0"
                                            placeholder="Phone No" name="phone" value="">
                                        @error('phone')
                                            <span style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-12 mb-3">
                                        <textarea name="comment" class="form-control w-100" id="comment" cols="30" rows="10" name="comment"
                                            placeholder="Leave a comment about your order"></textarea>

                                    </div>

                                </div>

                                <div class="payment-method">
                                    <!-- Cash on delivery -->
                                    <div class="custom-control custom-radio mr-sm-2">
                                        <input type="radio" class="custom-control-input" id="cashOnDelivery"
                                            name="payment" value="cash" checked>
                                        <label class="custom-control-label" for="cashOnDelivery">Cash on Delivery</label>
                                    </div>
                                    <!-- Paypal -->
                                    <div class="custom-control custom-radio mr-sm-2">
                                        <input type="radio" class="custom-control-input" id="paypal" name="payment" value="paypal">
                                        <label class="custom-control-label" for="paypal">
                                            <img class="ml-15" src="Web/assets/img/icons/payments/paypal-primary.png"
                                                alt="">
                                        </label>
                                    </div>
                                </div>
                                <hr>
                                <div class="cart-btn mt-100">
                                    <button type="submit" class="btn amado-btn w-100">Checkout</button>
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">

                        <div class="cart-summary">
                            <h5>Cart Total</h5>
                            <div>
                                <ul class="summary-table">
                                    <li><span>Product</span><span></span> <span>Total</span></li>
                                    <hr>
                                    @php $total=0; @endphp
                                    @foreach ($cart as $item)
                                        @php
                                            
                                            $total += $item->Totalprice;
                                            
                                        @endphp

                                        <li><span> {{ $item->product->name }} </span><span>x{{ $item->quantity }} </span>
                                            <span>{{ $item->price * $item->quantity }}JOD </span>
                                        </li>
                                    @endforeach
                                </ul>
                                <hr>
                            </div>
                            <ul class="summary-table">
                                <li style="font-weight: bold;"><span>subtotal:</span> <span>{{ $total }}JOD </span>
                                </li>
                                <li style="font-weight: bold;"><span>delivery:</span> <span>Free</span></li>
                                <li style="font-weight: bold;"><span>total:</span> <span>{{ $total }}JOD</span></li>
                            </ul>



                            <form action="{{ route('checkoutcreate') }}" method="post">
                                @csrf
                                <!-- Your form fields and content here -->

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
