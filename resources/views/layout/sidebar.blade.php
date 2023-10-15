



{{-- <link rel="stylesheet" href="{{ asset('Admin/assets/css/demo.css') }}" /> --}}

<!-- Vendors CSS -->
{{-- <link rel="stylesheet" href="{{ asset('Admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" /> --}}
{{-- <link rel="stylesheet" href="{{ asset('Admin/assets/vendor/libs/typeahead-js/typeahead.css') }}" /> --}}
{{-- <link rel="stylesheet" href="{{ asset('Admin/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}"> --}}
{{-- <link rel="stylesheet"
    href="{{ asset('Admin/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}"> --}}
{{-- <link rel="stylesheet"
    href="{{ asset('Admin/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}"> --}}
{{-- <link rel="stylesheet" --}}
    {{-- href="{{ asset('Admin/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css') }}"> --}}
{{-- <link rel="stylesheet" href="{{ asset('Admin/assets/vendor/libs/select2/select2.css') }}">
<link rel="stylesheet" href="{{ asset('Admin/assets/vendor/libs/%40form-validation/umd/styles/index.min.css') }}"> --}}
{{-- <link rel="stylesheet" href="{{ asset('Admin/assets/vendor/libs/quill/typography.css') }}"> --}}
{{-- <link rel="stylesheet" href="{{ asset('Admin/assets/vendor/libs/quill/katex.css') }}"> --}}
{{-- <link rel="stylesheet" href="{{ asset('Admin/assets/vendor/libs/quill/editor.css') }}"> --}}

{{-- <link rel="stylesheet" href="{{ asset('Admin/assets/vendor/libs/dropzone/dropzone.css') }}"> --}}
{{-- <link rel="stylesheet" href="{{ asset('Admin/assets/vendor/libs/flatpickr/flatpickr.css') }}"> --}}
{{-- <link rel="stylesheet" href="{{ asset('Admin/assets/vendor/libs/tagify/tagify.css') }}" /> --}}
<!-- Page CSS -->

{{-- <link rel="stylesheet" href="{{ asset('Admin/assets/vendor/css/pages/app-ecommerce.css') }}"> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
    integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
<!-- Helpers -->
{{-- <script src="{{ asset('Admin/assets/vendor/js/helpers.js') }}"></script> --}}
<!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
<!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
{{-- <script src="{{ asset('Admin/assets/vendor/js/template-customizer.js') }}"></script> --}}
<!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
{{-- <script src="{{ asset('Admin/assets/js/config.js') }}"></script> --}}

  <div class="col-md-2" style="height:50px;margin-top: 300px;">
    
    {{-- <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white" style="margin-right:500px">
        <div class="position-sticky"> --}}
          <div class="list-group list-group-flush mx-3 mt-4">
            <a href="{{ route('profilee') }}" class="list-group-item list-group-item-action py-2 ripple {{ request()->routeIs('profilee') ? 'active' : '' }}">
              <i class="fas fa-user fa-fw me-3 "></i><span>Profile</span>
            </a>
            <a href="{{ route('ordersprofile') }}"class="list-group-item list-group-item-action py-2 ripple {{ request()->routeIs('ordersprofile') ? 'active' : '' }}"
              ><i class="fas fa-cart-arrow-down fa-fw me-3"></i><span>Orders</span></a
            >
            {{-- <a href="" class="list-group-item list-group-item-action py-2 ripple {{ request()->routeIs('Service') ? 'active' : '' }}"
              ><i class="fas fa-chart-line fa-fw me-3"></i><span>Services</span></a
            >
            <a href="" class="list-group-item list-group-item-action py-2 ripple {{ request()->routeIs('Item') ? 'active' : '' }}">
              <i class="fas fa-chart-pie fa-fw me-3"></i><span>Items</span>
            </a> --}}
          </div>
        {{-- </div>
      </nav> --}}
  {{-- You can add links, widgets, or any other content you need in the sidebar --> --}}
</div>

