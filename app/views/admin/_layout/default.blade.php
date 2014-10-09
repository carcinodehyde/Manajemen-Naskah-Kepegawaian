<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>DMS :: Admin</title>

    @include('admin._partial.css')

</head>

<body>

    <div id="wrapper">

        @include('admin._partial.nav')

        <div id="page-wrapper">
            @include('admin._partial.notif')
            <div class="row">

            @yield('content')
            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    @include('admin._partial.js')

</body>

</html>
