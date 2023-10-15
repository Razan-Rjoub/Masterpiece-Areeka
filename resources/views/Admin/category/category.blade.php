@extends('Admin.layout.master')
@section('title','Admin-Category')

	@section('content')
<div class="content-wrapper">

    <!-- Content -->
    
      <div class="container-xxl flex-grow-1 container-p-y">
        
        


<div class="app-ecommerce-category over">
<!-- Category List Table -->
@include('sweetalert::alert')
<div class="card">
  <a href="{{ url('/category/create') }}"><button class=" btn btn-primary" tabindex="0" type="button"><span><i
    class="mdi mdi-plus me-0 me-sm-1"></i><span class="d-none d-sm-inline-block">Add
    category</span></span></button></a>
<div class="">
  <table class="table">
    <thead class="table-light">
      <tr>
        <th class="text-nowrap" >Categories</th>
        <th class="text-nowrap ">store </th>
      </tr>
      
 
    </thead>
    <tbody class="table-border-bottom-0">
      @foreach ($category as $item)
            <tr>
        <td><img src="{{$item->image}}" alt=""class="w-px-40 h-auto">
          <span>{{$item->name}} </span>
       </td>
          <td>
            {{$item->store->name}}
          </td>
         
     <td> <div class="dropdown">
      <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
      data-bs-toggle="dropdown">
      <i class="mdi mdi-dots-vertical"></i>
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item"
            href="{{ url('/category/' . $item->id . '/edit') }}"><i
                class="mdi mdi-pen me-1"></i>
            Edit</a>
        <form method="POST" onclick="confirmation(event)"
            action="{{ url('/category/' . $item->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="dropdown-item"><i
                    class="mdi mdi-trash-can me-1"></i>
                Delete</button>
        </form>

    </div>
      </div>
      </td>
      </tr>  
      @endforeach
  
          

    </tbody>
  </table>
</div>
</div>
<!-- Offcanvas to add new customer -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEcommerceCategoryList" aria-labelledby="offcanvasEcommerceCategoryListLabel">
<!-- Offcanvas Header -->
<div class="offcanvas-header py-4">
  <h5 id="offcanvasEcommerceCategoryListLabel" class="offcanvas-title">Add Category</h5>
  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>
<!-- Offcanvas Body -->
<div class="offcanvas-body border-top">
  <form class="pt-0" id="eCommerceCategoryListForm" onsubmit="return false">
    <!-- Title -->

    <div class="form-floating form-floating-outline mb-4">
      <input type="text" class="form-control" id="ecommerce-category-title" placeholder="Enter category title" name="categoryTitle" aria-label="category title">
      <label for="ecommerce-category-title">Title</label>
    </div>
    <!-- Image -->
    <div class="form-floating form-floating-outline mb-4">
      <input class="form-control" type="file" id="ecommerce-category-image">
      <label for="ecommerce-category-image">Attachment</label>
    </div>
    <!-- Parent category -->
    <div class="mb-3 ecommerce-select2-dropdown">
      <div class="form-floating form-floating-outline">
        <select id="ecommerce-category-parent-category" class="select2 form-select" data-placeholder="Select parent category" data-allow-clear="true">
          <option value="">Select parent Category</option>
          <option value="Household">Bedrooms</option>
          <option value="Management">Chairs</option>
          <option value="Electronics">Outdoor</option>
        </select>
        <label for="ecommerce-category-parent-category">Parent category</label>
      </div>
    </div>
    <!-- Description -->

    <!-- Status -->
    <div class="mb-4 ecommerce-select2-dropdown">
      <div class="form-floating form-floating-outline">
        <select id="ecommerce-category-status" class="select2 form-select" data-placeholder="Select category status">
          <option value="">Select category status</option>
          <option value="Scheduled">Scheduled</option>
          <option value="Publish">Publish</option>
          <option value="Inactive">Inactive</option>
        </select>
        <label for="ecommerce-category-status">Parent status</label>
      </div>
    </div>
    <!-- Submit and reset -->
    <div class="mb-3">
      <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Add</button>
      <button type="reset" class="btn btn-outline-danger" data-bs-dismiss="offcanvas">Discard</button>
    </div>
  </form>
</div>
</div>
</div>

      </div>
      <!-- / Content -->
@endsection