@extends('Provider.layout.master')
@section('title', 'Provider-Home')

@section('content')

    <div class="content-wrapper">

        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">


            <div class="row gy-4">
                <!-- Congratulations card -->

                <!--/ Congratulations card -->
                <!-- Cards with icon profit and loss info -->


                <div class="col-xl-8 col-lg-5">
                    <div class="row gy-4">

                        <div class="col-sm-6 col-xl-8">
                            <div class="card">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <div class="avatar">
                                        <div class="avatar-initial bg-success rounded-circle shadow">
                                            <i class="mdi  mdi-sofa-single-outline mdi-24px"></i>
                                        </div>
                                    </div>

                                </div>
                                <div class="card-body pt-0">
                                    <h6 class="mb-2">Product</h6>
                                    <div class="d-flex flex-wrap mb-2 pb-1 align-items-center gap-2">
                                        <h4 class="mb-0">{{ $product }}</h4>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 order-xl-1 order-2">
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="table-light">
                                    <tr>
                                        <th class="text-truncate"># ID</th>

                                        <th class="text-truncate">Client</th>
                                        <th class="text-truncate">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($order_item as $order_item)
                                        <tr>

                                            <td class="text-primary">{{ $order_item->id }}</td>

                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar avatar-sm me-3">
                                                        <img src="{{ asset($order_item->user->image) }}" alt="Avatar"
                                                            class="rounded-circle">
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0 text-truncate">{{ $order_item->user->name }}</h6>
                                                        <small class="text-truncate">{{ $order_item->user->email }}</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-truncate">{{ $order_item->order->totalprice }}</td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->
    </div>
    <!-- / Layout page -->
    </div>



    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>


    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>

    </div>
    <!-- / Layout wrapper -->





@endsection
