@extends('Admin.layout.master')
@section('title','Admin-edit')

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
                            <form action="{{ url('customer/' . $user->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                               
                                <div class="mb-3">
                                    <label for="role" class="form-label">Role</label>
                                    <select class="form-select" id="role" aria-label="Default select example"
                                        name="role_id">
                                        @foreach ($userrole as $item)
                                            <option  @if ($item->Role == 'admin') selected @endif value="admin">Admin </option>
                                            <option  @if ($item->Role == 'customer') selected @endif value="customer">Customer </option>
                                            <option  @if ($item->Role == 'provider') selected @endif value="provider">Provider </option>
                                            @break
                                        @endforeach
                                    </select>
                                </div>

                               
                                <button type="submit" class="btn btn-primary">Edit customer</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endsection