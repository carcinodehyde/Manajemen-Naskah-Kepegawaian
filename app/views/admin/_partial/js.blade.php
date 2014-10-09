    <!-- Core Scripts - Include with every page -->
    <script type="text/javascript" src="{{ asset('assets/js/backend/jquery-1.10.2.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/backend/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/backend/plugins/metisMenu/jquery.metisMenu.js') }}"></script>

    <!-- Page-Level Plugin Scripts - Dashboard -->
    <script type="text/javascript" src="{{ asset('assets/js/backend/plugins/morris/raphael-2.1.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/backend/plugins/morris/morris.js') }}"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script type="text/javascript" src="{{ asset('assets/js/backend/sb-admin.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/backend/bootstrap-datepicker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/backend/site.js') }}"></script>

    <!-- Page-Level Demo Scripts - Dashboard - Use for reference -->
    <script type="text/javascript" src="{{ asset('assets/js/backend/demo/dashboard-demo.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/backend/jasny-bootstrap.min.js') }}"></script>
    
    @yield('script')