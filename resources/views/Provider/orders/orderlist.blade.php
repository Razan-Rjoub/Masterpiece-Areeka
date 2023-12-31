@extends('Provider.layout.master')
@section('title', 'Admin-order')

@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">


            <!-- Basic Bootstrap Table -->
            <div class="card">
                @include('sweetalert::alert')
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>order</th>
                                <th>date</th>
                                <th>Customers</th>
                                <th>Payment</th>
                                <th>Status</th>
                                <th>Method</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($orderitem as $item)
                                <tr>
                                    <td>#{{ $item->order->id }} </td>
                                    <td>{{ $item->order->created_at }} </td>
                                    <td><img src="{{ $item->user->image }}"
                                            alt=""class="w-px-40 h-auto rounded-circle">
                                        <span>{{ $item->user->name }} </span>
                                    </td>

                                    <td>
                                        @if ($item->order->payment->method=='paypal')
                                            <h6 class="mb-0 text-success w-px-100">
                                                <i class="mdi mdi-circle mdi-14px me-2"></i>
                                                Paid
                                            </h6>
                                            @else 
                                            <h6 class="mb-0 text-warning w-px-100">
                                                <i class="mdi mdi-circle mdi-14px me-2"></i>
                                                Cash 
                                            </h6>
                                        @endif
                                    </td>
                                    @if ($item->order->status == 'Delivered')
                                        <td><span class="badge bg-label-success me-1">Delivered</span></td>
                                    @endif
                                    @if ($item->order->status == 'out for delivery')
                                        <td><span class="badge bg-label-primary me-1">Out For Delivery</span></td>
                                    @endif
                                    @if ($item->order->status == 'Dispatched')
                                        <td><span class="badge bg-label-warning me-1">Dispatched</span></td>
                                    @endif
                                    {{-- <td>{{ $item->payment->method }} </td> --}}

                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item"
                                                    href="{{ route('orderdetail', $item->order->id) }}"><i
                                                        class="mdi mdi-eye me-1"></i>
                                                    View Details</a>

                                                <a class="dropdown-item"
                                                    href="{{ route('editorder', $item->order->id) }}"><i
                                                        class="mdi mdi-pen me-1"></i>
                                                    Edit</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>

        @endsection
