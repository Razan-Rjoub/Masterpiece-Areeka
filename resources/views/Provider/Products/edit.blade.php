@extends('Provider.layout.master')
@section('title', 'Provider-AddProduct')

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
                            <form action="{{ url('product/' . $product->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="mb-3">
                                    <label class="form-label" for="productName">Product Name</label>
                                    <input type="text" class="form-control" id="name" 
                                        name="name" value="{{$product->name}}" />
                                    @error('name')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-3">

                                    <input type="hidden" class="form-control" id="store_id" name="store_id"
                                        value="{{ $store->id }}" />
                                </div>
                                <div class="card mb-4 " style="border: 1px solid rgba(103, 103, 103, 0.639);">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0 card-title">Media</h5>

                                    </div>
                                    <div class="card-body">
                                        <input type="file" name="image" id="image" value="{{$product->image}}">
                                    </div>
                                    @error('image')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                    <div class="card-body">
                                        <input type="file" name="image2" id="image" value="{{$product->image2}}">
                                    </div>
                                    @error('image2')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                    <div class="card-body">
                                        <input type="file" name="image3" id="image" value="{{$product->image3}}">
                                    </div>
                                    @error('image3')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                    <div class="card-body">
                                        <input type="file" name="image4" id="image" value="{{$product->image4}}">
                                    </div>
                                    @error('image4')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>


                                <div class="mb-3">
                                    <label for="category" class="form-label">Category</label>
                                    <select class="form-select" id="category" aria-label="Default select example"
                                        name="category_id">
                                        @foreach ($category as $item)
                                        @php
                                        $previousNames = isset($previousNames) ? $previousNames : [];
                                    @endphp
                            
                                    @if (!in_array($item->name, $previousNames))
                                    <option  @if ($item->id === $product->category_id) selected @endif value="{{ $item->id }}">{{ $item->name }} </option>
                                    @endif
                            
                                    @php
                                        $previousNames[] = $item->name;
                                    @endphp
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="price">Price</label>
                                    <input type="text" id="price" name="price" class="form-control phone-mask"
                                        placeholder="3000 JOD"  value="{{$product->price}}"/>
                                    @error('price')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="QTY">Quantity</label>
                                    <input type="text" id="QTY" name="quantity" class="form-control phone-mask"
                                        placeholder="30" value="{{$product->quantity}}"/>
                                    @error('quantity')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                              
                                
                                <div class="mb-4">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" id="description" rows="3" name="descrption">{{ $product->descrption }}</textarea>
                                    @error('description')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                                <div class="mb-4">
                                    <label for="longdescription" class="form-label">Long Description</label>
                                    <textarea class="form-control" id="longdescription" rows="3" name="descrptionLong">{{ $product->descrptionLong }}</textarea>
                                    @error('longdescription')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label" for="width">width</label>
                                    <input type="text" id="width" name="width" class="form-control phone-mask"
                                        placeholder="30" value="{{$product->width}}" />
                                    @error('width')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="height">height</label>
                                    <input type="text" id="height" name="height" class="form-control phone-mask"
                                        placeholder="30" value="{{$product->height}}"/>
                                    @error('height')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="depth">Depth</label>
                                    <input type="text" id="depth" name="Depth" class="form-control phone-mask"
                                        placeholder="30"  value="{{$product->Depth}}"/>
                                    @error('depth')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="weight">weight</label>
                                    <input type="text" id="weight" name="Weight" class="form-control phone-mask"
                                        placeholder="30"value="{{$product->Weight}}" />

                                    @error('weight')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="qualitycheck">Quality Check</label>
                                    <input type="text" id="qualitycheck" name="Qualitycheck"
                                        class="form-control phone-mask" placeholder="30" value="{{$product->Qualitycheck}}" />
                                    @error('qualitycheck')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-check form-switch mb-4">
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Stock</label>
                                    <input class="form-check-input" type="checkbox" name="stock"
                                        id="flexSwitchCheckChecked" @if ($product->stock=='on') checked @endif />

                                </div>
                                <button type="submit" class="btn btn-primary">Edit Product</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endsection
