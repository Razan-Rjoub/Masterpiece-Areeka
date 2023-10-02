@extends('Admin.layout.master')
@section('title','Admin-Customer')

	@section('content')
    <div class="content-wrapper">

        <!-- Content -->
        
          <div class="container-xxl flex-grow-1 container-p-y">
            


<!-- customers List Table -->
<div class="card">
  @include('sweetalert::alert')
  <a href="{{ url('/customer/create') }}"><button class=" btn btn-primary" tabindex="0" type="button"><span><i
    class="mdi mdi-plus me-0 me-sm-1"></i><span class="d-none d-sm-inline-block">Add
    Customer</span></span></button></a>
  <div class=" table-responsive">
    <table class="datatables-customers-lists table">
      <thead class="table-light">
        <tr>
      
          <th>Customer</th>

          <th class="text-nowrap">Customer Id</th>
          <th>Address</th>
          <th>Order</th>
          <th class="text-nowrap">Total Spent</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($customer as $item)
           <tr> 
            <td class="sorting_1"><div class="d-flex justify-content-start align-items-center customer-name"><div class="avatar-wrapper me-3">
              <div class="avatar avatar-sm">
                @if ($item->image==null)
                <img src='http://127.0.0.1:8000/images/istockphoto-1130884625-612x612.jpg
                ' alt="Avatar" class="rounded-circle"></div></div>
                <div class="d-flex flex-column"><a href="app-ecommerce-customer-details-overview.html"><span class="text-heading fw-medium text-truncate">{{$item->name}} </span></a><small class="text-truncate">{{$item->email}} </small></div></div></td>
                @else
                    <img src="{{$item->image}}" alt="Avatar" class="rounded-circle"></div></div>
                <div class="d-flex flex-column"><a href="app-ecommerce-customer-details-overview.html"><span class="text-heading fw-medium text-truncate">{{$item->name}} </span></a><small class="text-truncate">{{$item->email}} </small></div></div></td> 
                @endif
            
               
        <td>#{{$item->id}} </td>
        <td>{{$item->Address}}</td>
        <td>5</td>
        <td>1000JOD</td>
        <td> <div class="dropdown">
            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
            data-bs-toggle="dropdown">
            <i class="mdi mdi-dots-vertical"></i>
            </button>

              <div class="dropdown-menu">
                <a class="dropdown-item"
                href="{{ url('/customer/' . $item->id . '/edit') }}"><i
                    class="mdi mdi-pen me-1"></i>
                Edit</a>
                  <form method="POST" onclick="confirmation(event)"
                      action="{{ url('/customer/' . $item->id) }}">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="dropdown-item"><i
                              class="mdi mdi-trash-can me-1"></i>
                          Delete</button>
                  </form>

              </div>
          </div>
            </div>
            </td>
        </tr>   
        @endforeach
      

      </tbody>
    </table>
  </div>
    @endsection