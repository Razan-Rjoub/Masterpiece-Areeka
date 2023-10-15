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
                            <form  action="{{ url('category/' . $category->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                            @method('PATCH')
                                <div class="mb-3">
                                    <label class="form-label" for="storeName">Category Name</label>
                                    <input type="text" class="form-control" id="categoryName" placeholder="Bedroom"
                                        name='categoryname' value="{{$category->name}}" />
                                    @error('categoryname')
                                        <span style="color: red"> {{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="store" class="form-label">Store</label>
                                    <select class="form-select" id="store" aria-label="Default select example" name="store_id" >
                                        @foreach ($store as $item)
                                        <option @if ($item->id === $category->store_id) selected @endif   value="{{$item->id}}">{{$item->name}} </option>
                                        @endforeach
                                    </select>
                                </div>
                                </span><br>
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
                                </span><br>
                               <a href=""><button type="submit" class="btn btn-primary">Add Category</button></a> 
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endsection
