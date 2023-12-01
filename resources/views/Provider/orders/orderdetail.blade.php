@extends('Provider.layout.master')
@section('title', 'Provider-OrderDetail')

@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">

        
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title m-0">Order details</h5>
                        {{-- <h6 class="m-0"><a href=" javascript:void(0)">Edit</a></h6> --}}
                    </div>
                    <div class="card-datatable table-responsive">
                        <table class="datatables-order-details table">
                            <thead>
                                <tr>

                                    <th class="w-50">products</th>
                                    <th class="w-50">store</th>
                                    <th>price</th>
                                    <th>qty</th>
                                    <th>total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $totalPrice = 0;
                                @endphp
                                @foreach ($orderitem as $item)
                                    <tr>

                                        <td><img src="{{ asset( $item->product->image) }}" alt=""class="w-px-40 h-auto ">
                                            <span>{{ $item->product->name }} </span>
                                        </td>
                                        <td>{{ $item->store->name }} </td>
                                        <td>{{ $item->product->price }} </td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>{{ $item->product->price * $item->quantity }}JOD</td>
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

            <div class="col-12 col-lg-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h6 class="card-title mb-4">Customer details</h6>
                        <div class="d-flex justify-content-start align-items-center mb-4">
                            <div class="avatar me-2 pe-1">
                                @foreach ($orderitem as $item)
                                    <img src="{{ $item->user->image }}" alt="Avatar" class="rounded-circle">
                                @break
                            @endforeach
                        </div>
                        <div class="d-flex flex-column">
                            @foreach ($orderitem as $item)
                                <a href="app-user-view-account.html">


                                    <h6 class="mb-1">{{ $item->user->name }} </h6>

                                </a>

                                <small>Customer ID: #{{ $item->user->id }} </small>
                            @break
                        @endforeach
                    </div>
                </div>
                <div class="d-flex justify-content-start align-items-center mb-4">



                </div>
                <div class="d-flex justify-content-between">
                    <h6 class="mb-2">Contact info</h6>
                </div>
                @foreach ($orderitem as $item)
                    <p class=" mb-1">Email:{{ $item->user->email }} </p>
                    <p class=" mb-0">Mobile: (+962){{ $item->order->phone }} </p>

            </div>
        </div>

        <div class="card mb-4">

            <div class="card-header d-flex justify-content-between">
                <h6 class="card-title m-0">Shipping address</h6>

            </div>
            <div class="card-body">
                <p class="mb-0">{{ $item->order->address }} </p>
            </div>
        @break
        @endforeach
    </div>

</div>
</div>

        </div></div>


@endsection
