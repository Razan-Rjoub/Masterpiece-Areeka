@extends('Admin.layout.master')
@section('title', 'Admin-Store')

@section('content')
    <div class="content-wrapper">

        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">




            <div class="app-ecommerce-category over">
                @include('sweetalert::alert')
                <!-- Category List Table -->
                <div class="card">
                    <a href="{{ url('/store/create') }}"><button class=" btn btn-primary" tabindex="0" type="button"><span><i
                                    class="mdi mdi-plus me-0 me-sm-1"></i><span class="d-none d-sm-inline-block">Add
                                    Store</span></span></button></a>
                    <div class="card-datatable table-responsive">
                        <table class="datatables-category-list table">
                            <thead class="table-light">
                                <tr>
                                    <th>Store</th>
                                    <th class="text-nowrap ">Total Products </th>
                                    <th class="text-nowrap ">Total Earning</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($store as $item)
                                    <tr>
                                        <td><img src="{{ $item->image }}" alt=""class="w-px-40 h-auto">
                                            <span>{{ $item->name }}</span>
                                        </td>
                                        <td>
                                            {{ $item->totalproduct }}
                                        </td>
                                        <td>{{ $item->totalearning }} </td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i class="mdi mdi-dots-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item"
                                                        href="{{ url('/store/' . $item->id . '/edit') }}"><i
                                                            class="mdi mdi-pen me-1"></i>
                                                        Edit</a>
                                                    <form method="POST" onclick="confirmation(event)"
                                                        action="{{ url('/store/' . $item->id) }}">
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
            @endsection
