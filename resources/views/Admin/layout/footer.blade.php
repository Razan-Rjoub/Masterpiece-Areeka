<script src="Admin/assets/vendor/libs/jquery/jquery.js"></script>
<script src="Admin/assets/vendor/libs/popper/popper.js"></script>
<script src="Admin/assets/vendor/js/bootstrap.js"></script>
<script src="Admin/assets/vendor/libs/node-waves/node-waves.js"></script>
<script src="Admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="Admin/assets/vendor/libs/hammer/hammer.js"></script>
<script src="Admin/assets/vendor/libs/i18n/i18n.js"></script>
<script src="Admin/assets/vendor/libs/typeahead-js/typeahead.js"></script>
<script src="Admin/assets/vendor/js/menu.js"></script>

<script src="Admin/assets/vendor/libs/moment/moment.js"></script>
<script src="Admin/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
<script src="Admin/assets/vendor/libs/select2/select2.js"></script>
<script src="Admin/assets/vendor/libs/%40form-validation/umd/bundle/popular.min.js"></script>
<script src="Admin/assets/vendor/libs/%40form-validation/umd/plugin-bootstrap5/index.min.js"></script>
<script src="Admin/assets/vendor/libs/%40form-validation/umd/plugin-auto-focus/index.min.js"></script>
<script src="Admin/assets/vendor/libs/quill/katex.js"></script>
<script src="Admin/assets/vendor/libs/quill/quill.js"></script>
<!-- Main JS -->
<script src="Admin/assets/js/main.js"></script>
<!-- Page JS -->
<script src="Admin/assets/js/app-ecommerce-category-list.js"></script>
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
