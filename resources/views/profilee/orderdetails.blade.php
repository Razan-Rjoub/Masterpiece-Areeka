@extends('layout.master')
@section('title', 'single-Product')

@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('Web/stylecart/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('Web/stylecart/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('Web/stylecart/fonts/iconic/css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Web/stylecart/fonts/linearicons-v1.0.0/icon-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Web/stylecart/vendor/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Web/stylecart/vendor/css-hamburgers/hamburgers.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Web/stylecart/vendor/animsition/css/animsition.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Web/stylecart/vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('Web/stylecart/vendor/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Web/stylecart/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Web/stylecart/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('Admin/assets/vendor/css/rtl/core.css') }}"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('Admin/assets/vendor/css/rtl/theme-default.css') }}"
        class="template-customizer-theme-css" />
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Sidebar -->
            {{-- @include('layout.sidebar') --}}

            <div class="content-wrapper">
                <!-- Content -->

                <div class="container-xxl flex-grow-1 container-p-y">

                    <div
                        class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-4 gap-3">

                        <div class="d-flex flex-column">
                            <div class="d-flex" style="margin-left: -200px">
                                @foreach ($orderitem as $item)
                                    <h5 class="mb-0">Order #{{ $item->order->id }} </h5>
                                    <span class="badge bg-label-success mx-2 rounded-pill">Paid</span>
                                    @if ($item->order->status == 'Delivered')
                                        <span class="badge bg-label-success me-1">Delivered</span>
                                    @endif
                                    @if ($item->order->status == 'out for delivery')
                                        <span class="badge bg-label-primary me-1">Out For Delivery</span>
                                    @endif
                                    @if ($item->order->status == 'Dispatched')
                                        <span class="badge bg-label-warning me-1">Dispatched</span>
                                    @endif
                            </div>
                            <p style="margin-left: -200px" class="mt-1 mb-0">{{ $item->created_at }} </p>
                        @break
                        @endforeach
                    </div>

                </div>

                <!-- Order Details Table -->
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-lg-8">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title m-0">Order details</h5>

                </div>
                <div class="card-datatable table-responsive">
                    <table class=" table">
                        <thead>
                            <tr>

                                <th>products</th>
                                <th>store</th>
                                <th>price</th>
                                <th>qty</th>
                                <th>total</th>
                                <th>Review</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $totalPrice = 0;
                            @endphp
                            @foreach ($orderitem as $item)
                                <tr class="table_row">
                                    <td>
                                        <img src="{{ asset('images/product/' . $item->product->image) }}" alt=""class="w-px-40 h-auto ">
                                        <span>{{ $item->product->name }} </span>
                                    </td>
                                    <td><img src="{{  $item->store->image }}" alt=""class="w-px-40 h-auto "></td>
                                    <td>{{ $item->product->price }} </td>
                                    <td>{{ $item->quantity }}</td>
                                    <td>{{ $item->product->price * $item->quantity }}JOD</td>
                                    <td>
                                        <a href="{{ route('review', ['product_id' => $item->product->id, 'store_id' => $item->store->id]) }}"
                                            class="btn btn-primary"
                                            style="background-color:#ffb400;color:white;font-size:11px;height:25px;width:60px">
                                            Review
                                        </a>
                                    </td>

                                </tr>

                                @php
                                    $totalPrice += $item->product->price * $item->quantity;
                                @endphp
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-end align-items-center m-3 p-1">
                        <div class="order-calculations">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="w-px-100 text-heading">Subtotal:</span>
                                <h6 class="mb-0">{{ $totalPrice }}JOD</h6>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span class="w-px-100 text-heading">Discount:</span>
                                <h6 class="mb-0">00.00JOD</h6>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span class="w-px-100 text-heading">Tax:</span>
                                <h6 class="mb-0">00.00JOD</h6>
                            </div>
                            <div class="d-flex justify-content-between">
                                <h6 class="w-px-100 mb-0">Total:</h6>
                                <h6 class="mb-0">{{ $totalPrice }}JOD</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title m-0">Shipping activity</h5>
                </div>
                <div class="card-body mt-3">
                    <ul class="timeline pb-0 mb-0">

                        <li class="timeline-item timeline-item-transparent border-primary">
                            <span class="timeline-point timeline-point-primary"></span>
                            <div class="timeline-event">
                                <div class="timeline-header">
                                    <h6 class="mb-0">Order was placed (Order ID: #{{ $order->id }})</h6>
                                    <span class="text-muted">{{ $order->created_at }}</span>
                                </div>
                                <p class="mt-2" style="color: black">Your order has been placed successfully</p>
                            </div>
                        </li>
                        {{-- <li class="timeline-item timeline-item-transparent border-primary">
                                <span class="timeline-point timeline-point-primary"></span>
                                <div class="timeline-event">
                                    <div class="timeline-header">
                                        <h6 class="mb-0">Pick-up</h6>
                                        <span class="text-muted">Wednesday 11:29 AM</span>
                                    </div>
                                    <p class="mt-2">Pick-up scheduled with courier</p>
                                </div>
                            </li> --}}

                        <li class="timeline-item timeline-item-transparent border-primary">
                            <span
                                class="timeline-point {{ $order->status === 'Dispatched' || $order->status === 'out for delivery' || $order->status === 'Delivered' ? 'timeline-point-primary' : 'timeline-point-secondary' }}"></span>

                            <div class="timeline-event">
                                <div class="timeline-header">
                                    <h6 class="mb-0">Dispatched</h6>
                                    @if ($order->status === 'out for delivery' || $order->status === 'Delivered' || $order->status === 'Dispatched')
                                        <span class="text-muted">{{ $order->updated_at }}</span>
                                    @endif
                                </div>
                                <p class="mt-2" style="color: black">Item has been picked up by courier</p>
                            </div>
                        </li>

                        {{-- <li class="timeline-item timeline-item-transparent border-primary">
                                <span class="timeline-point timeline-point-primary"></span>
                                <div class="timeline-event">
                                    <div class="timeline-header">
                                        <h6 class="mb-0">Package arrived</h6>
                                        <span class="text-muted">Saturday 15:20 AM</span>
                                    </div>
                                    <p class="mt-2" style="color: black">Package arrived at an Amazon facility, NY</p>
                                </div>
                            </li> --}}

                        <li class="timeline-item timeline-item-transparent">
                            <span
                                class="timeline-point {{ $order->status === 'out for delivery' || $order->status === 'Delivered' ? 'timeline-point-primary' : 'timeline-point-secondary' }}"></span>
                            <div class="timeline-event">
                                <div class="timeline-header">
                                    <h6 class="mb-0">Out For Delivery</h6>
                                    @if ($order->status === 'out for delivery' || $order->status === 'Delivered')
                                        <span class="text-muted">{{ $order->updated_at }}</span>
                                    @endif
                                </div>
                                <p class="mt-2" style="color: black">Package has left</p>
                            </div>
                        </li>
                        <li class="timeline-item timeline-item-transparent border-transparent pb-0">
                            <span
                                class="timeline-point {{ $order->status === 'Delivered' ? 'timeline-point-primary' : 'timeline-point-secondary' }}"></span>
                            <div class="timeline-event pb-0">
                                <div class="timeline-header">
                                    <h6 class="mb-0">Delivery</h6>
                                    @if ($order->status === 'Delivered')
                                        <span class="text-muted">{{ $order->updated_at }}</span>
                                    @endif
                                </div>
                                <p class="mt-2 mb-0" style="color: black">Package delivered </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


    </div>
</div>


@endsection
