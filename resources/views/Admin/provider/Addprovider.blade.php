@extends('Admin.layout.master')
@section('title','Admin-AddProvider')

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
                  <form action="{{ url('/provider') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label class="form-label" for="Name">Name</label>
                      <input type="text" class="form-control" id="providerName" placeholder="Name*" name='providername' />
                      @error('providername')
                      <span style="color: red">{{ $message }}</span>
                  @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Email*" name="email" />
                        @error('email')
                        <span style="color: red">{{ $message }}</span>
                    @enderror </div> 
                      <div class="mb-3">
                        <label class="form-label" for="password">password</label>
                        <input type="password" class="form-control" id="password" placeholder="password*" name="password" />
                        @error('password')
                    <span style="color: red">{{ $message }}</span>
                @enderror  </div>
                <div class="mb-3">
                    <label for="store" class="form-label">Store</label>
                    <select class="form-select" id="store" aria-label="Default select example" name="store" >
                        @foreach ($store as $item)
                        <option   value="{{$item->id}}">{{$item->name}} </option>
                        <input type="hidden" name='storename' value="{{$item->name}}">
                        @endforeach
                    </select>
     
                </div>
                      <div class="mb-3">
                        <label class="form-label" for="password">Address</label>
                        <input type="text" class="form-control" id="address" placeholder="address*" name="address" />
                        @error('address')
                        <span style="color: red">{{ $message }}</span>
                    @enderror </div>
                      <div class="card mb-4 " style="border: 1px solid rgba(103, 103, 103, 0.639);">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0 card-title">Media</h5>
    
                        </div>
                        <div class="card-body">
                            <input type="file" name="image" id="image" >
                        </div>
                    </div>

            
                   
                    <button type="submit" class="btn btn-primary">Add Provider</button>
                  </form>
                </div>
              </div>
            </div>
        
          </div>
        </div>
    @endsection