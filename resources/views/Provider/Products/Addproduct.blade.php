@extends('Provider.layout.master')
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
                            <form action="{{ url('/product') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label" for="productName">Product Name</label>
                                    <input type="text" class="form-control" id="productName" placeholder="Master Bedroom"
                                        name="productname" />
                                    @error('productname')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>


                                <div class="card mb-4 " style="border: 1px solid rgba(103, 103, 103, 0.639);">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0 card-title">Media</h5>

                                    </div>
                                    <div class="card-body">
                                        <input type="file" name="image" id="image">
                                    </div>
                                </div>
                                @error('image')
                                    <span style="color: red">{{ $message }}</span>
                                @enderror

                                <div class="mb-3">
                                    {{-- <label for="store" class="form-label">Store</label>
                                    <select class="form-select" id="store" aria-label="Default select example"
                                        name="store_id">
                                        @foreach ($store as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }} </option>
                                        @endforeach
                                    </select> --}}
                                    <input type="hidden" name="store_id" value="{{$store->id}}">
                                </div>
                                <div class="mb-3">
                                    <label for="category" class="form-label">Category</label>
                                    <select class="form-select" id="category" aria-label="Default select example"
                                        name="category_id">
                                        @foreach ($category as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }} </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="price">Price</label>
                                    <input type="text" id="price" name="price" class="form-control phone-mask"
                                        placeholder="3000 " />
                                    @error('price')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="QTY">Quantity</label>
                                    <input type="text" id="QTY" name="quantity" class="form-control phone-mask"
                                        placeholder="30" />
                                    @error('quantity')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>

                                <input type="hidden" name="status" value="pending">
                                <div class="mb-4">
                                    <label for="description" class="form-label">description</label>
                                    <textarea class="form-control" id="description" rows="3" placeholder="Product Description" name="description"></textarea>
                                    @error('description')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Add Product</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endsection
