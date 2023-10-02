@extends('Admin.layout.master')
@section('title', 'Admin-ProductList')
@section('content')
    <div class="content-wrapper">
        <!-- Content -->
        @include('sweetalert::alert')
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="app-ecommerce-category over">
                <div class="">
                    <a href="{{ url('/product/create') }}"><button class=" btn btn-primary" tabindex="0" type="button"
                            data-bs-toggle="offcanvas"><span><i class="mdi mdi-plus me-0 me-sm-1"></i><span
                                    class="d-none d-sm-inline-block">Add Product</span></span></button></a>

                    <div class="card">
                        <div class="card-datatable table-responsive">
                            <table class=" table">
                                <thead class="table-light">
                                    <tr>
                                        <th>Product</th>
                                        <th>Store</th>
                                        <th>Category</th>
                                        <th>Stock</th>
                                        <th>Price</th>
                                        <th>description</th>
                                        <th>QTY</th>
                                        <th>STATUS</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    @foreach ($product as $item)

                                        <tr>
                                            <td><img src="{{ $item->image }}" alt="" style="width: 50px;"><i
                                                    class="fab fa-angular fa-lg text-danger me-3"></i>
                                                <strong>{{ $item->name }} </strong>
                                            </td>
                                            <td>{{ $item->store->name }}</td>
                                            <td>{{ $item->category->name }}</td>
                                            @if ($item->stock == 'on')
                                                <td>
                                                    <h6 class="mb-0 text-danger w-px-100">
                                                        <i class="mdi mdi-circle mdi-14px me-2"></i>
                                                        Out Stock
                                                    </h6>
                                                </td>
                                            @else
                                                <td>

                                                    <h6 class="mb-0 text-success w-px-100">
                                                        <i class="mdi mdi-circle mdi-14px me-2"></i>
                                                        In Stock
                                                    </h6>
                                                </td>
                                            @endif


                                            <td>{{ $item->price }}JOD</td>
                                            <td class="narrow-column">{{ $item->descrption }}
                                            </td>
                                            <td>{{ $item->quantity }} </td>
                                            @if ($item->status == 'pending')
                                                <td><span class="badge bg-label-primary me-1">PENDING</span></td>
                                            @else
                                                <td><span class="badge bg-label-success me-1">ACTIVE</span></td>
                                            @endif


                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item"
                                                            href="{{ url('/product/' . $item->id . '/edit') }}"><i
                                                                class="mdi mdi-pen me-1"></i>
                                                            Edit</a>
                                                        <form method="POST" onclick="confirmation(event)"
                                                            action="{{ url('/product/' . $item->id) }}">
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
                </div>
            </div>
        </div>
    </div>
@endsection
