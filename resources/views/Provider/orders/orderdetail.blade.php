@extends('Provider.layout.master')
@section('title', 'Provider-OrderDetail')

@section('content')
    <div class="content-wrapper">

        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">

          <div
          class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-4 gap-3">
          
          <div class="d-flex flex-column justify-content-center">
              <div class="d-flex">
                  @foreach ($orderitem as $item)
                      <h5 class="mb-0">Order #{{ $item->order->id }} </h5>
                      
                     
                     
                      <span class="badge bg-label-success mx-2 rounded-pill">Paid</span>
                      @if ($item->order->status == 'Delivered')
                          <span class="badge bg-label-success me-1">Delivered</span>
                      @endif
                      @if ($item->order->status == 'out for delivery')
                          <span class="badge bg-label-primary me-1">Out For Delivery</span>
                      @endif
                      @if ($item->order->status == 'Dispatched')
                          <span class="badge bg-label-warning me-1">Dispatched</span>
                      @endif
                      
                     
              </div>
              <p class="mt-1 mb-0">{{ $item->created_at }} </p>@break
               @endforeach
          </div>
          
          </div>

            <!-- Order Details Table -->

            <div class="row">
              <div class="col-12 col-lg-8">
                  <div class="card mb-4">
                      <div class="card-header d-flex justify-content-between align-items-center">
                          <h5 class="card-title m-0">Order details</h5>
                          <h6 class="m-0"><a href=" javascript:void(0)">Edit</a></h6>
                      </div>
                      <div class="card-datatable table-responsive">
                          <table class="datatables-order-details table">
                              <thead>
                                  <tr>
          
                                      <th class="w-50">products</th>
                                      <th class="w-50">store</th>
                                      <th>price</th>
                                      <th>qty</th>
                                      <th>total</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  @php
                                      $totalPrice = 0;
                                  @endphp
                                  @foreach ($orderitem as $item)
                                      
                                
                                  <tr>
                                  
                                      <td><img src="{{$item->product->image}}"
                                              alt=""class="w-px-40 h-auto ">
                                          <span>{{ $item->product->name }} </span>
                                      </td>
                                      <td>{{ $item->store->name }} </td>
                                      <td>{{ $item->product->price }} </td>
                                      <td>{{ $item->quantity }}</td>
                                      <td>{{ $item->product->price * $item->quantity }}JOD</td>
                                  </tr>
                                 
                                  @php
                                      $totalPrice += $item->product->price * $item->quantity;
                                  @endphp @endforeach
                              </tbody>
                          </table>
                          <div class="d-flex justify-content-end align-items-center m-3 p-1">
                              <div class="order-calculations">
                                  <div class="d-flex justify-content-between mb-2">
                                      <span class="w-px-100 text-heading">Subtotal:</span>
                                      <h6 class="mb-0">{{ $totalPrice }}JOD</h6>
                                  </div>
                                  <div class="d-flex justify-content-between mb-2">
                                      <span class="w-px-100 text-heading">Discount:</span>
                                      <h6 class="mb-0">00.00JOD</h6>
                                  </div>
                                  <div class="d-flex justify-content-between mb-2">
                                      <span class="w-px-100 text-heading">Tax:</span>
                                      <h6 class="mb-0">00.00JOD</h6>
                                  </div>
                                  <div class="d-flex justify-content-between">
                                      <h6 class="w-px-100 mb-0">Total:</h6>
                                      <h6 class="mb-0">{{ $totalPrice }}JOD</h6>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="card mb-4">
                      <div class="card-header">
                          <h5 class="card-title m-0">Shipping activity</h5>
                      </div>
                      <div class="card-body mt-3">
                          <ul class="timeline pb-0 mb-0">
                              <li class="timeline-item timeline-item-transparent border-primary">
                                  <span class="timeline-point timeline-point-primary"></span>
                                  <div class="timeline-event">
                                      <div class="timeline-header">
                                          <h6 class="mb-0">Order was placed (Order ID: #1)</h6>
                                          <span class="text-muted">Tuesday 11:29 AM</span>
                                      </div>
                                      <p class="mt-2">Your order has been placed successfully</p>
                                  </div>
                              </li>
                              <li class="timeline-item timeline-item-transparent border-primary">
                                  <span class="timeline-point timeline-point-primary"></span>
                                  <div class="timeline-event">
                                      <div class="timeline-header">
                                          <h6 class="mb-0">Pick-up</h6>
                                          <span class="text-muted">Wednesday 11:29 AM</span>
                                      </div>
                                      <p class="mt-2">Pick-up scheduled with courier</p>
                                  </div>
                              </li>
                              <li class="timeline-item timeline-item-transparent border-primary">
                                  <span class="timeline-point timeline-point-primary"></span>
                                  <div class="timeline-event">
                                      <div class="timeline-header">
                                          <h6 class="mb-0">Dispatched</h6>
                                          <span class="text-muted">Thursday 11:29 AM</span>
                                      </div>
                                      <p class="mt-2">Item has been picked up by courier</p>
                                  </div>
                              </li>
                              <li class="timeline-item timeline-item-transparent border-primary">
                                  <span class="timeline-point timeline-point-primary"></span>
                                  <div class="timeline-event">
                                      <div class="timeline-header">
                                          <h6 class="mb-0">Package arrived</h6>
                                          <span class="text-muted">Saturday 15:20 AM</span>
                                      </div>
                                      <p class="mt-2">Package arrived at an Amazon facility, NY</p>
                                  </div>
                              </li>
                              <li class="timeline-item timeline-item-transparent">
                                  <span class="timeline-point timeline-point-primary"></span>
                                  <div class="timeline-event">
                                      <div class="timeline-header">
                                          <h6 class="mb-0">Dispatched for delivery</h6>
                                          <span class="text-muted">Today 14:12 PM</span>
                                      </div>
                                      <p class="mt-2">Package has left an Amazon facility, NY</p>
                                  </div>
                              </li>
                              <li class="timeline-item timeline-item-transparent border-transparent pb-0">
                                  <span class="timeline-point timeline-point-secondary"></span>
                                  <div class="timeline-event pb-0">
                                      <div class="timeline-header">
                                          <h6 class="mb-0">Delivery</h6>
                                      </div>
                                      <p class="mt-2 mb-0">Package will be delivered by tomorrow</p>
                                  </div>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
          
              <div class="col-12 col-lg-4">
                  <div class="card mb-4">
                      <div class="card-body">
                          <h6 class="card-title mb-4">Customer details</h6>
                          <div class="d-flex justify-content-start align-items-center mb-4">
                              <div class="avatar me-2 pe-1">
                                  @foreach ($orderitem as $item)
                                      
                                  <img src="{{ $item->user->image }}" alt="Avatar" class="rounded-circle">
                                  @break
                                  @endforeach
                              </div>
                              <div class="d-flex flex-column">
                               @foreach ($orderitem as $item)   <a href="app-user-view-account.html">
                                      
                                      
                                      <h6 class="mb-1">{{ $item->user->name }} </h6>
                                      
                                  </a>
          
                                  <small>Customer ID: #{{ $item->user->id }} </small>
                                  @break
                              @endforeach</div>
                          </div>
                          <div class="d-flex justify-content-start align-items-center mb-4">

                                     
                                      
                            </div>
                          <div class="d-flex justify-content-between">
                              <h6 class="mb-2">Contact info</h6>
                          </div>
                           @foreach ($orderitem as $item)
                          <p class=" mb-1">Email:{{$item->user->email}} </p>
                          <p class=" mb-0">Mobile: (+962){{$item->order->phone}} </p>
                        
                      </div>
                  </div>
          
                  <div class="card mb-4">
          
                      <div class="card-header d-flex justify-content-between">
                          <h6 class="card-title m-0">Shipping address</h6>
                         
                      </div>
                      <div class="card-body">
                          <p class="mb-0">{{$item->order->address}} </p>
                      </div>
                      @break
                      @endforeach
                  </div>  
               
              </div>
          </div>
          

            <!-- Edit User Modal -->
            <div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-simple modal-edit-user">
                    <div class="modal-content p-3 p-md-5">
                        <div class="modal-body py-3 py-md-0">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            <div class="text-center mb-4">
                                <h3 class="mb-2">Edit User Information</h3>
                                <p class="pt-1">Updating user details will receive a privacy audit.</p>
                            </div>
                            <form id="editUserForm" class="row g-4" onsubmit="return false">
                                <div class="col-12 col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" id="modalEditUserFirstName" name="modalEditUserFirstName"
                                            class="form-control" placeholder="John" />
                                        <label for="modalEditUserFirstName">First Name</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" id="modalEditUserLastName" name="modalEditUserLastName"
                                            class="form-control" placeholder="Doe" />
                                        <label for="modalEditUserLastName">Last Name</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" id="modalEditUserName" name="modalEditUserName"
                                            class="form-control" placeholder="john.doe.007" />
                                        <label for="modalEditUserName">Username</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" id="modalEditUserEmail" name="modalEditUserEmail"
                                            class="form-control" placeholder="example@domain.com" />
                                        <label for="modalEditUserEmail">Email</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <select id="modalEditUserStatus" name="modalEditUserStatus" class="form-select"
                                            aria-label="Default select example">
                                            <option selected>Status</option>
                                            <option value="1">Active</option>
                                            <option value="2">Inactive</option>
                                            <option value="3">Suspended</option>
                                        </select>
                                        <label for="modalEditUserStatus">Status</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" id="modalEditTaxID" name="modalEditTaxID"
                                            class="form-control modal-edit-tax-id" placeholder="123 456 7890" />
                                        <label for="modalEditTaxID">Tax ID</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text">JO (+962)</span>
                                        <div class="form-floating form-floating-outline">
                                            <input type="text" id="modalEditUserPhone" name="modalEditUserPhone"
                                                class="form-control phone-number-mask" placeholder="79527821" />
                                            <label for="modalEditUserPhone">Phone Number</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <select id="modalEditUserCountry" name="modalEditUserCountry"
                                            class="select2 form-select" data-allow-clear="true">
                                            <option value="">Select</option>
                                            <option value="Jordan" selected>Irbid</option>
                                            <option value="Bangladesh">Amman</option>
                                            <option value="Belarus">Ajlun</option>
                                            <option value="Brazil">Zarqa</option>


                                        </select>
                                        <label for="modalEditUserCountry">City</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="switch">
                                        <input type="checkbox" class="switch-input">
                                        <span class="switch-toggle-slider">
                                            <span class="switch-on"></span>
                                            <span class="switch-off"></span>
                                        </span>
                                        <span class="switch-label">Use as a billing address?</span>
                                    </label>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                                    <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal"
                                        aria-label="Close">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Edit User Modal -->

            <!-- Add New Address Modal -->
            <div class="modal fade" id="addNewAddress" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-simple modal-add-new-address">
                    <div class="modal-content p-3 p-md-5">
                        <div class="modal-body p-md-0">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            <div class="text-center mb-4">
                                <h3 class="address-title mb-2 pb-1">Add New Address</h3>
                                <p class="address-subtitle">Add new address for express delivery</p>
                            </div>
                            <form id="addNewAddressForm" class="row g-4" onsubmit="return false">


                                <div class="col-12 col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" id="modalAddressFirstName" name="modalAddressFirstName"
                                            class="form-control" placeholder="John" />
                                        <label for="modalAddressFirstName">First Name</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" id="modalAddressLastName" name="modalAddressLastName"
                                            class="form-control" placeholder="Doe" />
                                        <label for="modalAddressLastName">Last Name</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating form-floating-outline">
                                        <select id="modalEditUserCountry" name="modalEditUserCountry"
                                            class="select2 form-select" data-allow-clear="true">
                                            <option value="">Select</option>
                                            <option value="Jordan" selected>Irbid</option>
                                            <option value="Bangladesh">Amman</option>
                                            <option value="Belarus">Ajlun</option>
                                            <option value="Brazil">Zarqa</option>


                                        </select>
                                        <label for="modalAddressCountry">City</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" id="modalAddressAddress1" name="modalAddressAddress1"
                                            class="form-control" placeholder="12, Business Park" />
                                        <label for="modalAddressAddress1">Address Line 1</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" id="modalAddressAddress2" name="modalAddressAddress2"
                                            class="form-control" placeholder="Mall Road" />
                                        <label for="modalAddressAddress2">Address Line 2</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" id="modalAddressLandmark" name="modalAddressLandmark"
                                            class="form-control" placeholder="Nr. Hard Rock Cafe" />
                                        <label for="modalAddressLandmark">Landmark</label>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" id="modalAddressState" name="modalAddressState"
                                            class="form-control" placeholder="irbid" />
                                        <label for="modalAddressLandmark">State</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" id="modalAddressZipCode" name="modalAddressZipCode"
                                            class="form-control" placeholder="99950" />
                                        <label for="modalAddressZipCode">Zip Code</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="switch">
                                        <input type="checkbox" class="switch-input">
                                        <span class="switch-toggle-slider">
                                            <span class="switch-on"></span>
                                            <span class="switch-off"></span>
                                        </span>
                                        <span class="switch-label">Use as a billing address?</span>
                                    </label>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                                    <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal"
                                        aria-label="Close">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- / Content -->

    </div>

@endsection
