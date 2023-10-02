@extends('Provider.layout.master')
@section('title','order-edit')

	@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">


            <!-- Basic Layout -->
            <div class="row">
                <div class="col-xl">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">

                        </div>
                        <div class="card-body ">
                            <form action="{{ url('/order/' . $order->id ) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="mb-3">
                                    <label for="role" class="form-label">status</label>
                                    <select class="form-select" id="status" aria-label="Default select example"
                                        name="status">
                                        
                                            <option  @if ($order->status == 'Delivered') selected @endif value="Delivered">Delivered </option>
                                            <option  @if ($order->status == 'Dispatched') selected @endif value="Dispatched">Dispatched </option>
                                            <option  @if ($order->status == 'out for delivery') selected @endif value="out for delivery">Out for delivery </option>
                                          
                                    </select>
                                </div>

                               
                                <button type="submit" class="btn btn-primary">Edit order</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endsection