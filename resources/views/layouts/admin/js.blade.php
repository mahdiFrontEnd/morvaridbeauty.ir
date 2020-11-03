@section('js')

    <!-- plugins:js -->
    <script src="/templates/melody/vendors/js/vendor.bundle.base.js"></script>
    <script src="/templates/melody/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="/templates/melody/js/off-canvas.js"></script>
    <script src="/templates/melody/js/hoverable-collapse.js"></script>
    <script src="/templates/melody/js/misc.js"></script>
    <script src="/templates/melody/js/settings.js"></script>
{{--    <script src="/templates/melody/js/todolist.js"></script>--}}
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="/templates/melody/js/dashboard.js"></script>
    <script src="/templates/melody/vendors/chosen/chosen.jquery.min.js"></script>
    <script src="/templates/melody/vendors/moment/min/moment.min.js"></script>
    <script src="/templates/melody/js/persian-date-0.1.8.min.js"></script>
    <script src="/templates/melody/js/persian-datepicker-0.4.5.min.js"></script>
    <!-- End custom js for this page-->

    <script>
        jQuery(document).ready(function () {
            jQuery("#taghvim").persianDatepicker({
                altFormat: "X",
                format: "D MMMM YYYY",
                observer: true
            });
        });
    </script>


@show

