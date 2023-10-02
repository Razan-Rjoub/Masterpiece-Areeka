<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="{{ asset('Admin/assets/vendor/libs/jquery/jquery.js') }}"></script>
<script src="{{ asset('Admin/assets/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('Admin/assets/vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('Admin/assets/vendor/libs/node-waves/node-waves.js') }}"></script>
<script src="{{ asset('Admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('Admin/assets/vendor/libs/hammer/hammer.js') }}"></script>
<script src="{{ asset('Admin/assets/vendor/libs/i18n/i18n.js') }}"></script>
<script src="{{ asset('Admin/assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>
<script src="{{ asset('Admin/assets/vendor/js/menu.js') }}"></script>

<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{ asset('Admin/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('Admin/assets/js/main.js') }}"></script>


<script src="{{ asset('Admin/assets/vendor/libs/%40form-validation/umd/bundle/popular.min.js') }}"></script>
<script src="{{ asset('Admin/assets/vendor/libs/%40form-validation/umd/plugin-bootstrap5/index.min.js') }}"></script>
<script src="{{ asset('Admin/assets/vendor/libs/%40form-validation/umd/plugin-auto-focus/index.min.js') }}"></script>
<script src="{{ asset('Admin/assets/vendor/libs/cleavejs/cleave.js') }}"></script>
<script src="{{ asset('Admin/assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>


<!-- Page JS -->
<script src="{{ asset('Admin/assets/js/app-ecommerce-dashboard.js') }}"></script>
<script src="{{ asset('Admin/assets/js/pages-account-settings-account.js') }}"></script>
<script>
    function confirmation(ev) {
        ev.preventDefault();
        
        var form = ev.target.form;
        swal({
                title: "Are you sure to Delete this ",
                text: "You will not be able to revert this!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willCancel) => {
                if (willCancel) {
                   form.submit();
                }


            });


    }
</script>
</body>


</html>
