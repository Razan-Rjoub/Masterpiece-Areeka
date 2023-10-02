@extends('Admin.layout.master')
@section('title','Admin-AddProduct')

	@section('content')
    <div class="content-wrapper">

        <!-- Content -->
        
          <div class="container-xxl flex-grow-1 container-p-y">
            
            

<div class="d-flex flex-column flex-sm-row align-items-center justify-content-sm-between mb-4 text-center text-sm-start gap-2">
  <div class="mb-2 mb-sm-0">
    <h4 class="mb-1">
      Customer ID #634759
    </h4>
    <p class="mb-0">
      Aug 17, 2020, 5:48 (ET)
    </p>
  </div>
  <button type="button" class="btn btn-outline-danger delete-customer">Delete Customer</button>
</div>


<div class="row">
  <!-- Customer-detail Sidebar -->
  <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
    <!-- Customer-detail Card -->
    <div class="card mb-4">
      <div class="card-body">
        <div class="customer-avatar-section">
          <div class="d-flex align-items-center flex-column">
            <img class="img-fluid rounded mb-3 mt-4" src="../../assets/img/avatars/1.png" height="120" width="120" alt="User avatar" />
            <div class="customer-info text-center mb-4">
              <h5 class="mb-1">Lorine Hischke</h5>
              <span>Customer ID #634759</span>
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-around flex-wrap mb-4">
          <div class="d-flex align-items-center gap-2">
            <div class="avatar me-1">
              <div class="avatar-initial rounded-3 bg-label-primary"><i class='mdi mdi mdi-cart-plus mdi-20px'></i>
              </div>
            </div>
            <div>
              <h5 class="mb-0">184</h5>
              <span>Orders</span>
            </div>
          </div>
          <div class="d-flex align-items-center gap-2">
            <div class="avatar me-1">
              <div class="avatar-initial rounded-3 bg-label-primary"><i class='mdi mdi-currency-usd mdi-20px'></i>
              </div>
            </div>
            <div>
              <h5 class="mb-0">$12,378</h5>
              <span>Spent</span>
            </div>
          </div>
        </div>

        <div class="info-container">
          <h5 class="border-bottom text-uppercase pb-3">DETAILS</h5>
          <ul class="list-unstyled mb-4">
            <li class="mb-2">
              <span class="h6 me-1">Username:</span>
              <span>lorine.hischke</span>
            </li>
            <li class="mb-2">
              <span class="h6 me-1">Email:</span>
              <span>vafgot@vultukir.org</span>
            </li>
            <li class="mb-2">
              <span class="h6 me-1">Status:</span>
              <span class="badge bg-label-success rounded-pill">Active</span>
            </li>
            <li class="mb-2">
              <span class="h6 me-1">Contact:</span>
              <span>(123) 456-7890</span>
            </li>

            <li>
              <span class="h6 me-1">Country:</span>
              <span>USA</span>
            </li>
          </ul>
          <div class="d-flex justify-content-center">
            <a href="javascript:;" class="btn btn-primary me-3" data-bs-target="#editUser" data-bs-toggle="modal">Edit Details</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /Customer-detail Card -->
    <!-- Plan Card -->


    <!-- /Plan Card -->
  </div>
  <!--/ Customer Sidebar -->


  <!-- Customer Content -->
  <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
    <!-- Customer Pills -->

    <!--/ Customer Pills -->

    <!-- Address accordion -->

    <div class="card card-action mb-4">
      <div class="card-header align-items-center flex-wrap gap-2">
        <h5 class="card-action-title mb-0">Address Book</h5>
        <div class="card-action-element">
          <button class="btn btn-outline-primary" type="button" data-bs-toggle="modal" data-bs-target="#addNewAddress">Add new address</button>
        </div>
      </div>
      <div class="card-body">
        <div class="accordion accordion-arrow-left" id="ecommerceBillingAccordionAddress">

          <div class="accordion-item">
            <div class="accordion-header d-flex justify-content-between align-items-center flex-wrap flex-sm-nowrap" id="headingHome">
              <a class="accordion-button collapsed px-2" data-bs-toggle="collapse" data-bs-target="#ecommerceBillingAddressHome" aria-expanded="false" aria-controls="headingHome" role="button">
                <span>
                  <span class="d-flex gap-2 align-items-baseline">
                    <span class="h6 mb-0">Home</span>
                    <span class="badge bg-label-success rounded-pill">Default Address</span>
                  </span>
                  <span class="mb-0 text-body">23 Shatinon Mekalan</span>
                </span>
              </a>
              <div class="d-flex gap-3 p-4 p-sm-2 py-sm-0 pt-0 ms-3 ms-sm-0">
                <a href="javascript:void(0);"><i class="mdi mdi-pencil-outline mdi-20px text-secondary"></i></a>
                <a href="javascript:void(0);"><i class="mdi mdi-delete-outline mdi-20px text-secondary"></i></a>
                <button class="btn p-0" data-bs-toggle="dropdown" aria-expanded="false" role="button"><i class="mdi mdi-dots-vertical mdi-20px text-secondary"></i></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="javascript:void(0);">Set as default address</a></li>
                </ul>
              </div>
            </div>
            <div id="ecommerceBillingAddressHome" class="accordion-collapse collapse" data-bs-parent="#ecommerceBillingAccordionAddress">
              <div class="accordion-body ps-4 ms-4">
                <h6 class="mb-2">Violet Mendoza</h6>
                <p class="mb-1">23 Shatinon Mekalan,</p>
                <p class="mb-1">Melbourne, VIC 3000,</p>
                <p class="mb-1">LondonUK</p>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <div class="accordion-header d-flex justify-content-between align-items-center flex-wrap flex-sm-nowrap" id="headingOffice">
              <a class="accordion-button collapsed px-2" data-bs-toggle="collapse" data-bs-target="#ecommerceBillingAddressOffice" aria-expanded="false" aria-controls="headingOffice" role="button">
                <span class="d-flex flex-column">
                  <span class="h6 mb-0">Office</span>
                  <span class="mb-0 text-body">45 Roker Terrace</span>
                </span>
              </a>
              <div class="d-flex gap-3 p-4 p-sm-2 py-sm-0 pt-0 ms-3 ms-sm-0">
                <a href="javascript:void(0);"><i class="mdi mdi-pencil-outline mdi-20px text-secondary"></i></a>
                <a href="javascript:void(0);"><i class="mdi mdi-delete-outline mdi-20px text-secondary"></i></a>
                <button class="btn p-0" data-bs-toggle="dropdown" aria-expanded="false" role="button"><i class="mdi mdi-dots-vertical mdi-20px text-secondary"></i></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="javascript:void(0);">Set as default address</a></li>
                </ul>
              </div>
            </div>
            <div id="ecommerceBillingAddressOffice" class="accordion-collapse collapse" aria-labelledby="headingOffice" data-bs-parent="#ecommerceBillingAccordionAddress">
              <div class="accordion-body ps-4 ms-4">
                <h6 class="mb-2">Violet Mendoza</h6>
                <p class="mb-1">45 Roker Terrace,</p>
                <p class="mb-1">Latheronwheel,</p>
                <p class="mb-1">KW5 8NW</p>
                <p class="mb-1">LondonUK</p>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <div class="accordion-header d-flex justify-content-between align-items-center flex-wrap flex-sm-nowrap" id="headingFamily">
              <a class="accordion-button collapsed px-2" data-bs-toggle="collapse" data-bs-target="#ecommerceBillingAddressFamily" aria-expanded="false" aria-controls="headingFamily" role="button">
                <span class="d-flex flex-column">
                  <span class="h6 mb-0">Family</span>
                  <span class="mb-0 text-body">512 Water Plant</span>
                </span>
              </a>
              <div class="d-flex gap-3 p-4 p-sm-2 py-sm-0 pt-0 ms-3 ms-sm-0">
                <a href="javascript:void(0);"><i class="mdi mdi-pencil-outline mdi-20px text-secondary"></i></a>
                <a href="javascript:void(0);"><i class="mdi mdi-delete-outline mdi-20px text-secondary"></i></a>
                <button class="btn p-0" data-bs-toggle="dropdown" aria-expanded="false" role="button"><i class="mdi mdi-dots-vertical mdi-20px text-secondary"></i></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="javascript:void(0);">Set as default address</a></li>
                </ul>
              </div>
            </div>
            <div id="ecommerceBillingAddressFamily" class="accordion-collapse collapse" aria-labelledby="headingFamily" data-bs-parent="#ecommerceBillingAccordionAddress">
              <div class="accordion-body ps-4 ms-4">
                <h6 class="mb-2">Violet Mendoza</h6>
                <p class="mb-1">512 Water Plant,</p>
                <p class="mb-1">Melbourne, NY 10036,</p>
                <p class="mb-1">New York,</p>
                <p class="mb-1">United States</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Address accordion -->

    <!-- Payment accordion -->
    <div class="card card-action mb-4">
      <div class="card-header align-items-center flex-wrap gap-2">
        <h5 class="card-action-title mb-0">Payment Methods</h5>
        <div class="card-action-element">
          <button class="btn btn-outline-primary" type="button" data-bs-toggle="modal" data-bs-target="#addNewCCModal">Add payment methods</button>
        </div>
      </div>
      <div class="card-body">
        <div class="accordion accordion-arrow-left" id="ecommerceBillingAccordionPayment">

          <div class="accordion-item">
            <div class="accordion-header d-flex justify-content-between align-items-center flex-wrap flex-sm-nowrap" id="headingPaymentMaster">
              <a class="accordion-button collapsed px-2" data-bs-toggle="collapse" data-bs-target="#ecommerceBillingPaymentMaster" aria-expanded="false" aria-controls="headingPaymentMaster" role="button">
                <span class="accordion-button-information d-flex align-items-center gap-3">
                  <span class="accordion-button-image">
                    <img src="../../assets/img/icons/payments/master-light.png" class="img-fluid w-px-50 h-px-30" alt="master-card" data-app-light-img="icons/payments/master-light.png" data-app-dark-img="icons/payments/master-dark.html" />
                  </span>
                  <span class="d-flex flex-column">
                    <span class="h6 mb-0">Mastercard</span>
                    <span class="mb-0 text-body">Expires Apr 2028</span>
                  </span>
                </span>
              </a>
              <div class="d-flex gap-3 p-4 p-sm-2 py-sm-0 pt-0 ms-3 ms-sm-0">
                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#editCCModal"><i class="mdi mdi-pencil-outline mdi-20px text-secondary"></i></a>
                <a href="javascript:void(0);"><i class="mdi mdi-delete-outline mdi-20px text-secondary"></i></a>
                <button class="btn p-0" data-bs-toggle="dropdown" aria-expanded="false" role="button"><i class="mdi mdi-dots-vertical mdi-20px text-secondary"></i></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="javascript:void(0);">Set as Primary</a></li>
                </ul>
              </div>
            </div>
            <div id="ecommerceBillingPaymentMaster" class="accordion-collapse collapse" data-bs-parent="#ecommerceBillingAccordionPayment">
              <div class="accordion-body d-flex align-items-baseline flex-wrap flex-xl-nowrap flex-sm-nowrap flex-md-wrap ms-4 ps-3">
                <table class="table table-sm table-borderless text-nowrap">
                  <tr>
                    <td class="w-50">Name</td>
                    <td class="h6">Violet Mendoza</td>
                  </tr>
                  <tr>
                    <td>Number</td>
                    <td class="h6">**** 4487</td>
                  </tr>
                  <tr>
                    <td>Expires</td>
                    <td class="h6">04/2028</td>
                  </tr>
                  <tr>
                    <td>Type</td>
                    <td class="h6">Mastercard credit card</td>
                  </tr>
                  <tr>
                    <td>Issuer</td>
                    <td class="h6">VICBANK</td>
                  </tr>
                  <tr>
                    <td>ID</td>
                    <td class="h6">id_4325df90sdf8</td>
                  </tr>
                </table>
                <table class="table table-sm table-borderless text-nowrap">
                  <tr>
                    <td class="w-50">Billing Phone</td>
                    <td class="h6">USA</td>
                  </tr>
                  <tr>
                    <td>Number</td>
                    <td class="h6">Not provided</td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td class="h6">vafgot@vultukir.org</td>
                  </tr>
                  <tr>
                    <td>Origin</td>
                    <td class="h6">United States <i class="fis fi fi-us rounded-circle me-2 fs-5"> </i></td>
                  </tr>
                  <tr>
                    <td>CVC check</td>
                    <td class="h6">Passed <span class="badge bg-label-success rounded-circle p-0"><i class='mdi mdi-check'></i></span></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <div class="accordion-header d-flex justify-content-between align-items-center flex-wrap flex-sm-nowrap" id="headingPaymentExpress">
              <a class="accordion-button collapsed px-2" data-bs-toggle="collapse" data-bs-target="#ecommerceBillingPaymentExpress" aria-expanded="false" aria-controls="headingPaymentExpress" role="button">
                <span class="accordion-button-information d-flex align-items-center gap-3">
                  <span class="accordion-button-image">
                    <img src="../../assets/img/icons/payments/ae-light.png" class="img-fluid w-px-50 h-px-30" alt="american-express-card" data-app-light-img="icons/payments/ae-light.png" data-app-dark-img="icons/payments/ae-dark.html" />
                  </span>
                  <span>
                    <span class="d-flex gap-2 flex-wrap align-items-baseline">
                      <span class="h6 mb-0 text-nowrap">American Express</span>
                      <span class="badge bg-label-success rounded-pill">Primary</span>
                    </span>
                    <span class="mb-0 text-body">45 Roker Terrace</span>
                  </span>
                </span>
              </a>
              <div class="d-flex gap-3 p-4 p-sm-2 py-sm-0 pt-0 ms-3 ms-sm-0">
                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#editCCModal"><i class="mdi mdi-pencil-outline mdi-20px text-secondary"></i></a>
                <a href="javascript:void(0);"><i class="mdi mdi-delete-outline mdi-20px text-secondary"></i></a>
                <button class="btn p-0" data-bs-toggle="dropdown" aria-expanded="false" role="button"><i class="mdi mdi-dots-vertical mdi-20px text-secondary"></i></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="javascript:void(0);">Set as Primary</a></li>
                </ul>
              </div>
            </div>
            <div id="ecommerceBillingPaymentExpress" class="accordion-collapse collapse" aria-labelledby="headingPaymentExpress" data-bs-parent="#ecommerceBillingAccordionPayment">
              <div class="accordion-body d-flex align-items-baseline flex-wrap flex-xl-nowrap flex-sm-nowrap flex-md-wrap ms-4 ps-3">
                <table class="table table-sm table-borderless text-nowrap">
                  <tr>
                    <td class="w-50">Name</td>
                    <td class="h6">Violet Mendoza</td>
                  </tr>
                  <tr>
                    <td>Number</td>
                    <td class="h6">**** 4487</td>
                  </tr>
                  <tr>
                    <td>Expires</td>
                    <td class="h6">08/2028</td>
                  </tr>
                  <tr>
                    <td>Type</td>
                    <td class="h6">Mastercard credit card</td>
                  </tr>
                  <tr>
                    <td>Issuer</td>
                    <td class="h6">VICBANK</td>
                  </tr>
                  <tr>
                    <td>ID</td>
                    <td class="h6">DH73DJ8</td>
                  </tr>
                </table>
                <table class="table table-sm table-borderless text-nowrap">
                  <tr>
                    <td class="w-50">Billing Phone</td>
                    <td class="h6">USA</td>
                  </tr>
                  <tr>
                    <td>Number</td>
                    <td class="h6">+7634 983 637</td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td class="h6">vafgot@vultukir.org</td>
                  </tr>
                  <tr>
                    <td>Origin</td>
                    <td class="h6">United States <i class="fis fi fi-us rounded-circle me-2 fs-5"> </i></td>
                  </tr>
                  <tr>
                    <td>CVC check</td>
                    <td class="h6">Passed <span class="badge bg-label-success rounded-circle p-0"><i class='mdi mdi-check'></i></span></td>
                  </tr>
                </table>
              </div>

            </div>
          </div>

          <div class="accordion-item">
            <div class="accordion-header d-flex justify-content-between align-items-center flex-wrap flex-sm-nowrap" id="headingPaymentVisa">
              <a class="accordion-button collapsed px-2" data-bs-toggle="collapse" data-bs-target="#ecommerceBillingPaymentVisa" aria-expanded="false" aria-controls="headingPaymentVisa" role="button">
                <span class="accordion-button-information d-flex align-items-center gap-3">
                  <span class="accordion-button-image">
                    <img src="../../assets/img/icons/payments/visa-light.png" class="img-fluid w-px-50 h-px-30" alt="visa-card" data-app-light-img="icons/payments/visa-light.png" data-app-dark-img="icons/payments/visa-dark.html" />
                  </span>
                  <span class="d-flex flex-column">
                    <span class="h6 mb-0">Visa</span>
                    <span class="mb-0 text-body">512 Water Plant</span>
                  </span>
                </span>
              </a>
              <div class="d-flex gap-3 p-4 p-sm-2 py-sm-0 pt-0 ms-3 ms-sm-0">
                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#editCCModal"><i class="mdi mdi-pencil-outline mdi-20px text-secondary"></i></a>
                <a href="javascript:void(0);"><i class="mdi mdi-delete-outline mdi-20px text-secondary"></i></a>
                <button class="btn p-0" data-bs-toggle="dropdown" aria-expanded="false" role="button"><i class="mdi mdi-dots-vertical mdi-20px text-secondary"></i></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="javascript:void(0);">Set as Primary</a></li>
                </ul>
              </div>
            </div>
            <div id="ecommerceBillingPaymentVisa" class="accordion-collapse collapse" aria-labelledby="headingPaymentVisa" data-bs-parent="#ecommerceBillingAccordionPayment">
              <div class="accordion-body d-flex align-items-baseline flex-wrap flex-xl-nowrap flex-sm-nowrap flex-md-wrap ms-4 ps-3">
                <table class="table table-sm table-borderless text-nowrap">
                  <tr>
                    <td class="w-50">Name</td>
                    <td class="h6">Violet Mendoza</td>
                  </tr>
                  <tr>
                    <td>Number</td>
                    <td class="h6">**** 5155</td>
                  </tr>
                  <tr>
                    <td>Expires</td>
                    <td class="h6">02/2022</td>
                  </tr>
                  <tr>
                    <td>Type</td>
                    <td class="h6">Visa credit card</td>
                  </tr>
                  <tr>
                    <td>Issuer</td>
                    <td class="h6">VICBANK</td>
                  </tr>
                  <tr>
                    <td>ID</td>
                    <td class="h6">id_w2r84jdy723</td>
                  </tr>
                </table>
                <table class="table table-sm table-borderless text-nowrap">
                  <tr>
                    <td class="w-50">Billing Phone</td>
                    <td class="h6">USA</td>
                  </tr>
                  <tr>
                    <td>Number</td>
                    <td class="h6">+7634 983 637</td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td class="h6">vafgot@vultukir.org</td>
                  </tr>
                  <tr>
                    <td>Origin</td>
                    <td class="h6">United States <i class="fis fi fi-us rounded-circle me-2 fs-5"></i></td>
                  </tr>
                  <tr>
                    <td>CVC check</td>
                    <td class="h6">Passed <span class="badge bg-label-success rounded-circle p-0"><i class='mdi mdi-check'></i></span></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
    <!--/ Payment accordion -->

  </div>
  <!--/ Customer Content -->
</div>


<!-- Modal -->
<!-- Edit User Modal -->
<div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-simple modal-edit-user">
    <div class="modal-content p-3 p-md-5">
      <div class="modal-body py-3 py-md-0">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-4">
          <h3 class="mb-2">Edit User Information</h3>
          <p class="pt-1">Updating user details will receive a privacy audit.</p>
        </div>
        <form id="editUserForm" class="row g-4" onsubmit="return false">
          <div class="col-12 col-md-6">
            <div class="form-floating form-floating-outline">
              <input type="text" id="modalEditUserFirstName" name="modalEditUserFirstName" class="form-control" placeholder="John" />
              <label for="modalEditUserFirstName">First Name</label>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="form-floating form-floating-outline">
              <input type="text" id="modalEditUserLastName" name="modalEditUserLastName" class="form-control" placeholder="Doe" />
              <label for="modalEditUserLastName">Last Name</label>
            </div>
          </div>
          <div class="col-12">
            <div class="form-floating form-floating-outline">
              <input type="text" id="modalEditUserName" name="modalEditUserName" class="form-control" placeholder="john.doe.007" />
              <label for="modalEditUserName">Username</label>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="form-floating form-floating-outline">
              <input type="text" id="modalEditUserEmail" name="modalEditUserEmail" class="form-control" placeholder="example@domain.com" />
              <label for="modalEditUserEmail">Email</label>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="form-floating form-floating-outline">
              <select id="modalEditUserStatus" name="modalEditUserStatus" class="form-select" aria-label="Default select example">
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
              <input type="text" id="modalEditTaxID" name="modalEditTaxID" class="form-control modal-edit-tax-id" placeholder="123 456 7890" />
              <label for="modalEditTaxID">Tax ID</label>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="input-group input-group-merge">
              <span class="input-group-text">US (+1)</span>
              <div class="form-floating form-floating-outline">
                <input type="text" id="modalEditUserPhone" name="modalEditUserPhone" class="form-control phone-number-mask" placeholder="202 555 0111" />
                <label for="modalEditUserPhone">Phone Number</label>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="form-floating form-floating-outline">
              <select id="modalEditUserLanguage" name="modalEditUserLanguage" class="select2 form-select" multiple>
                <option value="">Select</option>
                <option value="english" selected>English</option>
                <option value="spanish">Spanish</option>
                <option value="french">French</option>
                <option value="german">German</option>
                <option value="dutch">Dutch</option>
                <option value="hebrew">Hebrew</option>
                <option value="sanskrit">Sanskrit</option>
                <option value="hindi">Hindi</option>
              </select>
              <label for="modalEditUserLanguage">Language</label>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="form-floating form-floating-outline">
              <select id="modalEditUserCountry" name="modalEditUserCountry" class="select2 form-select" data-allow-clear="true">
                <option value="">Select</option>
                <option value="Australia">Australia</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Belarus">Belarus</option>
                <option value="Brazil">Brazil</option>
                <option value="Canada">Canada</option>
                <option value="China">China</option>
                <option value="France">France</option>
                <option value="Germany">Germany</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Japan">Japan</option>
                <option value="Korea">Korea, Republic of</option>
                <option value="Mexico">Mexico</option>
                <option value="Philippines">Philippines</option>
                <option value="Russia">Russian Federation</option>
                <option value="South Africa">South Africa</option>
                <option value="Thailand">Thailand</option>
                <option value="Turkey">Turkey</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
              </select>
              <label for="modalEditUserCountry">Country</label>
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
            <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--/ Edit User Modal -->

<!-- Add New Credit Card Modal -->
<div class="modal fade" id="editCCModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-simple modal-add-new-cc">
    <div class="modal-content p-3 p-md-5">
      <div class="modal-body p-md-0">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-4">
          <h3 class="mb-2 pb-1">Edit Card</h3>
          <p>Edit your saved card details</p>
        </div>
        <form id="editCCForm" class="row g-4" onsubmit="return false">
          <div class="col-12">
            <div class="input-group input-group-merge">
              <div class="form-floating form-floating-outline">
                <input id="modalEditCard" name="modalEditCard" class="form-control credit-card-mask-edit" type="text" placeholder="4356 3215 6548 7898" value="4356 3215 6548 7898" aria-describedby="modalEditCard2" />
                <label for="modalEditCard">Card Number</label>
              </div>
              <span class="input-group-text cursor-pointer p-1" id="modalEditCard2"><span class="card-type-edit"></span></span>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="form-floating form-floating-outline">
              <input type="text" id="modalEditName" class="form-control" placeholder="John Doe" value="John Doe" />
              <label for="modalEditName">Name</label>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="form-floating form-floating-outline">
              <input type="text" id="modalEditExpiryDate" class="form-control expiry-date-mask-edit" placeholder="MM/YY" value="08/28" />
              <label for="modalEditExpiryDate">Exp. Date</label>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="input-group input-group-merge">
              <div class="form-floating form-floating-outline">
                <input type="text" id="modalEditCvv" class="form-control cvv-code-mask-edit" maxlength="3" placeholder="654" value="XXX" />
                <label for="modalEditCvv">CVV Code</label>
              </div>
              <span class="input-group-text cursor-pointer" id="modalEditCvv2"><i class="mdi mdi-help-circle-outline text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="Card Verification Value"></i></span>
            </div>
          </div>
          <div class="col-12">
            <label class="switch">
              <input type="checkbox" class="switch-input">
              <span class="switch-toggle-slider">
                <span class="switch-on"></span>
                <span class="switch-off"></span>
              </span>
              <span class="switch-label">Set as primary card</span>
            </label>
          </div>
          <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
            <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--/ Add New Credit Card Modal -->

<!-- Add New Address Modal -->
<div class="modal fade" id="addNewAddress" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-simple modal-add-new-address">
    <div class="modal-content p-3 p-md-5">
      <div class="modal-body p-md-0">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-4">
          <h3 class="address-title mb-2 pb-1">Add New Address</h3>
          <p class="address-subtitle">Add new address for express delivery</p>
        </div>
        <form id="addNewAddressForm" class="row g-4" onsubmit="return false">

          <div class="col-12 col-md-6">
            <div class="form-floating form-floating-outline">
              <input type="text" id="modalAddressFirstName" name="modalAddressFirstName" class="form-control" placeholder="John" />
              <label for="modalAddressFirstName">First Name</label>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="form-floating form-floating-outline">
              <input type="text" id="modalAddressLastName" name="modalAddressLastName" class="form-control" placeholder="Doe" />
              <label for="modalAddressLastName">Last Name</label>
            </div>
          </div>
          <div class="col-12">
            <div class="form-floating form-floating-outline">
              <input type="text" id="modalAddressAddress1" name="modalAddressAddress1" class="form-control" placeholder="12, Business Park" />
              <label for="modalAddressAddress1">Address Line 1</label>
            </div>
          </div>
          <div class="col-12">
            <div class="form-floating form-floating-outline">
              <input type="text" id="modalAddressAddress2" name="modalAddressAddress2" class="form-control" placeholder="Mall Road" />
              <label for="modalAddressAddress2">Address Line 2</label>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="form-floating form-floating-outline">
              <input type="text" id="modalAddressLandmark" name="modalAddressLandmark" class="form-control" placeholder="Nr. Hard Rock Cafe" />
              <label for="modalAddressLandmark">Landmark</label>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="form-floating form-floating-outline">
              <input type="text" id="modalAddressCity" name="modalAddressCity" class="form-control" placeholder="Los Angeles" />
              <label for="modalAddressCity">City</label>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="form-floating form-floating-outline">
              <input type="text" id="modalAddressState" name="modalAddressState" class="form-control" placeholder="California" />
              <label for="modalAddressLandmark">State</label>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="form-floating form-floating-outline">
              <input type="text" id="modalAddressZipCode" name="modalAddressZipCode" class="form-control" placeholder="99950" />
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
            <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--/ Add New Address Modal -->

<!-- Add New Credit Card Modal -->
<div class="modal fade" id="addNewCCModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
    <div class="modal-content p-3 p-md-5">
      <div class="modal-body p-md-0">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-4">
          <h3 class="mb-2 pb-1">Add New Card</h3>
          <p>Add new card to complete payment</p>
        </div>
        <form id="addNewCCForm" class="row g-4" onsubmit="return false">
          <div class="col-12">
            <div class="input-group input-group-merge">
              <div class="form-floating form-floating-outline">
                <input id="modalAddCard" name="modalAddCard" class="form-control credit-card-mask" type="text" placeholder="1356 3215 6548 7898" aria-describedby="modalAddCard2" />
                <label for="modalAddCard">Card Number</label>
              </div>
              <span class="input-group-text cursor-pointer p-1" id="modalAddCard2"><span class="card-type"></span></span>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="form-floating form-floating-outline">
              <input type="text" id="modalAddCardName" class="form-control" placeholder="John Doe" />
              <label for="modalAddCardName">Name</label>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="form-floating form-floating-outline">
              <input type="text" id="modalAddCardExpiryDate" class="form-control expiry-date-mask" placeholder="MM/YY" />
              <label for="modalAddCardExpiryDate">Exp. Date</label>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="input-group input-group-merge">
              <div class="form-floating form-floating-outline">
                <input type="text" id="modalAddCardCvv" class="form-control cvv-code-mask" maxlength="3" placeholder="654" />
                <label for="modalAddCardCvv">CVV Code</label>
              </div>
              <span class="input-group-text cursor-pointer" id="modalAddCardCvv2"><i class="mdi mdi-help-circle-outline text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="Card Verification Value"></i></span>
            </div>
          </div>
          <div class="col-12">
            <label class="switch">
              <input type="checkbox" class="switch-input">
              <span class="switch-toggle-slider">
                <span class="switch-on"></span>
                <span class="switch-off"></span>
              </span>
              <span class="switch-label">Save card for future billing?</span>
            </label>
          </div>
          <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
            <button type="reset" class="btn btn-outline-secondary btn-reset" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--/ Add New Credit Card Modal -->

<!-- Add New Credit Card Modal -->
<div class="modal fade" id="upgradePlanModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-simple modal-upgrade-plan">
    <div class="modal-content p-3 p-md-5">
      <div class="modal-body pt-md-0 px-0">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-4">
          <h3 class="mb-2 pb-1">Upgrade Plan</h3>
          <p>Choose the best plan for user.</p>
        </div>
        <form id="upgradePlanForm" class="row g-3 d-flex align-items-center" onsubmit="return false">
          <div class="col-sm-9">
            <div class="form-floating form-floating-outline">
              <select id="choosePlan" name="choosePlan" class="form-select" aria-label="Choose Plan">
                <option selected>Choose Plan</option>
                <option value="standard">Standard - $99/month</option>
                <option value="exclusive">Exclusive - $249/month</option>
                <option value="Enterprise">Enterprise - $499/month</option>
              </select>
              <label for="choosePlan">Choose Plan</label>
            </div>
          </div>
          <div class="col-sm-3 d-flex align-items-end">
            <button type="submit" class="btn btn-primary">Upgrade</button>
          </div>
        </form>
      </div>
      <hr class="mx-md-n5 mx-n3">
      <div class="modal-body pb-md-0 px-0">
        <p class="mb-0">User current plan is standard plan</p>
        <div class="d-flex justify-content-between align-items-center flex-wrap">
          <div class="d-flex justify-content-center me-2 mt-3">
            <sup class="h5 pricing-currency pt-1 mt-2 mb-0 me-1 text-primary">$</sup>
            <h1 class="display-3 mb-0 text-primary">99</h1>
            <sub class="h6 pricing-duration mt-auto mb-2 pb-1 text-body">/month</sub>
          </div>
          <button class="btn btn-outline-danger cancel-subscription mt-3">Cancel Subscription</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Add New Credit Card Modal -->

<!-- /Modal -->
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