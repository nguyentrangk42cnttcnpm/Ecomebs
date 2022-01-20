<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('../../assets/img/core-img/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('../../assets/css/core-style.css') }}">
    <link rel="stylesheet" href="{{ asset('../../assets/style.css') }}">
</head>
<body>
    <!-- begin header -->
    @include('web.inc.header')
    <!--end header -->

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

         <!-- begin sidebar -->
        @include('web.inc.sidebar')
        <!-- end sidebars -->

        <!-- Product Details Area Start -->
            @yield('content')           
            @include('web.inc.footer')
  
    <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
    <script src="{{ asset('../../assets/js/jquery/jquery-2.2.4.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('../../assets/js/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('../../assets/js/bootstrap.min.js') }}"></script>
    <!-- Plugins js -->
    <script src="{{ asset('../../assets/js/plugins.js') }}"></script>
    <!-- Active js -->
    <script src="{{ asset('../../assets/js/active.js') }}"></script>
</body>
</html>
