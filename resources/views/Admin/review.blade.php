@extends('Admin.layout.master')
@section('title', 'Admin-Review')

@section('content')
    <div class="content-wrapper">

        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">



            <!-- customers List Table -->
            <div class="card">
              @include('sweetalert::alert')
                <div class=" table-responsive">
                    <table class="datatables-customers-lists table">
                        <thead class="table-light">
                            <tr>

                                <th>Product</th>
                                <th>store</th>
                                <th>Reviewer</th>
                                <th class="text-nowrap">Review</th>

                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($review as $item)
                                <tr>
                                    <td class="sorting_1" style="">
                                        <div class="d-flex justify-content-start align-items-center customer-name">
                                            <div class="avatar-wrapper">
                                                <div class="avatar me-3 rounded-2 bg-label-secondary"><img
                                                        src="{{ $item->product->image }}" alt="Product-9" class="rounded-2">
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column"><span
                                                    class="text-nowrap text-heading fw-medium">{{ $item->product->name }}
                                                </span>

                                            </div>
                                        </div>
                                    </td>
                                    <td>{{$item->store->name}} </td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center customer-name">
                                            <div class="avatar-wrapper me-3">
                                                <div class="avatar avatar-sm"><img src="{{$item->user->image}} "
                                                        alt="Avatar" class="rounded-circle"></div>
                                            </div>
                                            <div class="d-flex flex-column"><a
                                                    href="app-ecommerce-customer-details-overview.html"><span
                                                        class="fw-medium">{{$item->user->name}}</span></a><small
                                                    class="text-nowrap">{{$item->user->email}}</small></div>
                                        </div>
                                    </td>

                                    <td>
                                        <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20px"
                                                height="20px" fill="#f39c12">
                                                <path
                                                    d="M12,2 L15.09,8.09 L22,9.9 L17,14 L18.18,20 L12,17.5 L5.82,20 L7,14 L2,9.9 L8.91,8.09 L12,2 Z">
                                                </path>
                                            </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20px"
                                                height="20px" fill="#f39c12" style="margin-left: 3px;">
                                                <path
                                                    d="M12,2 L15.09,8.09 L22,9.9 L17,14 L18.18,20 L12,17.5 L5.82,20 L7,14 L2,9.9 L8.91,8.09 L12,2 Z">
                                                </path>
                                            </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20px"
                                                height="20px" fill="#f39c12" style="margin-left: 3px;">
                                                <path
                                                    d="M12,2 L15.09,8.09 L22,9.9 L17,14 L18.18,20 L12,17.5 L5.82,20 L7,14 L2,9.9 L8.91,8.09 L12,2 Z">
                                                </path>
                                            </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20px"
                                                height="20px" fill="#f39c12" style="margin-left: 3px;">
                                                <path
                                                    d="M12,2 L15.09,8.09 L22,9.9 L17,14 L18.18,20 L12,17.5 L5.82,20 L7,14 L2,9.9 L8.91,8.09 L12,2 Z">
                                                </path>
                                            </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20px"
                                                height="20px" fill="#f39c12" style="margin-left: 3px;">
                                                <path
                                                    d="M12,2 L15.09,8.09 L22,9.9 L17,14 L18.18,20 L12,17.5 L5.82,20 L7,14 L2,9.9 L8.91,8.09 L12,2 Z">
                                                </path>
                                            </svg></div>
                </div>
            </div>
           <small class="text-break pe-3">{{$item->comment}} </small>
        </div>
        </td>
        <td>{{$item->created_at}} </td>
        <td>
        <div class="dropdown">
          <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
              data-bs-toggle="dropdown">
              <i class="mdi mdi-dots-vertical"></i>
          </button>

          <div class="dropdown-menu">

              <form method="POST" onclick="confirmation(event)"
                  action="{{ url('/review/' . $item->id) }}">
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
    <!-- / Content -->




    <!-- / Footer -->


    <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->
    </div>
    <!-- / Layout page -->
    </div>



    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>


    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>

    </div>
@endsection
