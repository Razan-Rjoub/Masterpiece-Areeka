@extends('Admin.layout.master')
@section('title', 'Admin-AddProduct')

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
                            <form  action="{{ url('store/' . $store->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                            @method('PATCH')
                                <div class="mb-3">
                                    <label class="form-label" for="storeName">Store Name</label>
                                    <input type="text" class="form-control" id="storeName" placeholder="Shahwan"
                                        name='storename' value="{{$store->name}}" />
                                        @error('storename')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="card mb-4 " style="border: 1px solid rgba(103, 103, 103, 0.639);">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0 card-title">Media</h5>

                                    </div>
                                    <div class="card-body">
                                        <input type="file" name="image" id="image" value="{{$store->image}}">
                                    </div>
                                </div>
                                @error('image')
                                <span style="color: red">{{ $message }}</span>
                            @enderror
                                <button type="submit" class="btn btn-primary">Add Store</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endsection
