</html>
<!DOCTYPE html>
<html lang="en">
  <style>
  .form-create-app{
      margin: auto;
      padding-top: 20px;
      box-shadow: 0 0 20px rgba(0,0,0,0.6);
      border-radius: 4px;
    } 
    .card{
        display: flex;
        min-height:800px !important;
    }
  </style>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('web/assets/img/core-img/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('view/web/assets/css/core-style.css') }}">
    <link rel="stylesheet" href="{{ asset('view/web/assets/style.css') }}">
    <style>
        .card{
            display: flex;
            min-height:800px !important;
        }
    </style>
</head>
<body>
  <div class="container-scroller">
    <!-- begin header -->
    @include('web.inc.header')
    <!-- end header -->
    <div class="container-fluid page-body-wrapper">
      <!-- begin sidebar -->
      @include('web.inc.sidebar')
      <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        @yield('content')
                    </div>
                    </div>
                </div>
            @include('web.inc.footer')
            </div>
        </div>
    </div>
    <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
    <script src="{{ asset('web/assets/js/jquery/jquery-2.2.4.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('web/assets/js/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('web/assets/js/bootstrap.min.js') }}"></script>
    <!-- Plugins js -->
    <script src="{{ asset('web/assets/js/plugins.js') }}"></script>
    <!-- Active js -->
    <script src="{{ asset('web/assets/js/active.js') }}"></script>
</body>
</html>
