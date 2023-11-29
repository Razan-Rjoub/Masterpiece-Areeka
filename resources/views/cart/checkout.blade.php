@extends('layout.master')
@section('title', 'checkout')

@section('content')


    {{-- <div class="container-xxl bg-primary hero-header">
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
                                 
                                    <div class="custom-control custom-radio mr-sm-2">
                                        <input type="radio" class="custom-control-input" id="cashOnDelivery"
                                            name="payment" value="cash" checked>
                                        <label class="custom-control-label" for="cashOnDelivery" style="color: black; font-weight:300">Cash on Delivery</label>
                                    </div>
                                  
                                    <div class="custom-control custom-radio mr-sm-2">
                                        <input type="radio" class="custom-control-input" id="paypal" name="payment" value="paypal">
                                        <label class="custom-control-label" for="paypal">
                                            <img style="width: 50px" class="ml-15" src="Web/assets/img/icons/payments/master-light.png"
                                                alt="">
                                                
                                                <img style="width: 50px" class="ml-15" src="Web/assets/img/icons/payments/visa.png"
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
                             

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <br><br>
    <section class="checkout_area padding_top container mt-5">

        <div class="billing_details">
            <div class="row">
                <div class="col-lg-8">
                    <h3>Billing Details</h3>
                    <form class="row contact_form" action="{{ route('checkoutcreate') }}" method="post" >
                        @csrf
                        <div class="col-md-10 form-group p_star">
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ $user->name }}" />
                            @error('name')
                                <span style="color: red">{{ $message }}</span>
                            @enderror
                            {{-- <span class="placeholder" data-placeholder=" Name" ></span> --}}
                        </div>
                        <div class="col-md-10 form-group p_star">
                            <input type="email" class="form-control" id="email" name="email"
                                value="{{ $user->email }}" />
                            @error('email')
                                <span style="color: red">{{ $message }}</span>
                            @enderror
                            {{-- <span class="placeholder" data-placeholder="Email"></span> --}}
                        </div>
                        <div class="col-md-10 form-group p_star">
                            <input type="text" class="form-control" id="phone" name="phone"
                                value="{{ $user->phone }}" />
                            @error('phone')
                                <span style="color: red">{{ $message }}</span>
                            @enderror
                            {{-- <span class="placeholder" data-placeholder="Phone number"></span> --}}
                        </div>
                        <div class="col-md-10 form-group p_star">
                            <input type="text" class="form-control" id="address" name="address"
                                value="{{ $user->address }}" placeholder="Address" />
                                  {{-- <span class="placeholder" data-placeholder="Address"></span> --}}
                            @error('address')
                                <span style="color: red">{{ $message }}</span>
                            @enderror
                            {{-- <span class="placeholder" data-placeholder="Phone number"></span> --}}
                        </div>
                        <div class="col-md-10 form-group ">
                            <textarea class="form-control" name="comment" id="comment" rows="10" placeholder="Order Notes"></textarea>
                        </div>


                        <div class="payment-method col-md-10 ">

                            <div class="custom-control custom-radio mr-sm-2">
                                <input type="radio" class="custom-control-input" id="cashOnDelivery" name="payment"
                                    value="cash" checked>
                                <label class="custom-control-label" for="cashOnDelivery"
                                    style="color: black; font-weight:300">Cash on Delivery</label>
                            </div>

                            <div class="custom-control custom-radio mr-sm-2">
                                <input type="radio" class="custom-control-input" id="paypal" name="payment"
                                    value="paypal">
                                <label class="custom-control-label" for="paypal">
                                    <img style="width: 50px" class="ml-15"
                                        src="Web/assets/img/icons/payments/master-light.png" alt="">

                                    <img style="width: 50px" class="ml-15" src="Web/assets/img/icons/payments/visa.png"
                                        alt="">
                                </label>
                            </div>
                        </div>
                      <center style="margin: auto"> <button class="btn_3 mt-3" type="submit">Proceed to Checkout</button></center>
                       
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="order_box">
                        <h2>Your Order</h2>
                        <ul class="list">
                            <li>
                                <a href="#">Product
                                    <span>Total</span>
                                </a>
                            </li>
                            @php $total=0; @endphp
                            @foreach ($cart as $item)
                                @php
                                    
                                    $total += $item->Totalprice;
                                    
                                @endphp
                            <li>
                                <a href="#">{{$item->product->name}}
                                    <span class="middle">x 0{{$item->quantity}}</span>
                                    <span class="last">{{ $item->price * $item->quantity }}JOD</span>
                                </a>
                            </li>
                          @endforeach
                        </ul>
                        <ul class="list list_2">
                            <li>
                                <a href="#">Subtotal
                                    <span>{{$total}}JOD</span>
                                </a>
                            </li>
                       
                            <li>
                                <a href="#">Total
                                    <span>{{$total}}JOD</span>
                                </a>
                            </li>
                        </ul>
                      
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

@endsection
