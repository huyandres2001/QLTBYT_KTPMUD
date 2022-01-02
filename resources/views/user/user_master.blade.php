<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('UserBackend/panel/assets/images/favicon.png') }}">
    <!--Page title-->
    <title>QLTBYT</title>
    <!--bootstrap-->
    <link rel="stylesheet" href="{{ asset('UserBackend/panel/assets/css/bootstrap.min.css') }}">
    <!--font awesome-->
    <link rel="stylesheet" href="{{ asset('UserBackend/panel/assets/css/all.min.css') }}">
    <!-- metis menu -->
    <link rel="stylesheet"
        href="{{ asset('UserBackend/panel/assets/plugins/metismenu-3.0.4/assets/css/metisMenu.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('UserBackend/panel/assets/plugins/metismenu-3.0.4/assets/css/mm-vertical-hover.css') }}">
    <!-- chart -->

    <!-- <link rel="stylesheet" href="assets/plugins/chartjs-bar-chart/chart.css"> -->
    <!--Custom CSS-->
    <link rel="stylesheet" href="{{ asset('UserBackend/panel/assets/css/style.css') }}">
    <!--Toaster notification-->
    <title>Laravel 8 Toastr Notification Example - websolutionstuff.com</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0- 
     alpha/css/bootstrap.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

</head>

<body id="page-top">
    <!-- preloader -->
    <div class="preloader">
        <img src="{{ asset('UserBackend/panel/assets/images/preloader.gif') }}" alt="">
    </div>
    <!-- wrapper -->
    <div class="wrapper">

        <!-- header area -->
        @include('user.header')
        <!-- / header area -->

        <!-- sidebar area -->
        @include('user.sidebar')
        <!-- /sidebar Area-->

        <div class="content_wrapper">

            @yield('user')
        </div>
        <!--/ content wrapper -->
    </div>
    <!--/ wrapper -->

    <!-- jquery -->
    <script src="{{ asset('UserBackend/panel/assets/js/jquery.min.js') }}"></script>
    <!-- popper Min Js -->
    <script src="{{ asset('UserBackend/panel/assets/js/popper.min.js') }}"></script>
    <!-- Bootstrap Min Js -->
    <script src="{{ asset('UserBackend/panel/assets/js/bootstrap.min.js') }}"></script>
    <!-- Fontawesome-->
    <script src="{{ asset('UserBackend/panel/assets/js/all.min.js') }}"></script>
    <!-- metis menu -->
    <script src="{{ asset('UserBackend/panel/assets/plugins/metismenu-3.0.4/assets/js/metismenu.js') }}"></script>
    <script src="{{ asset('UserBackend/panel/assets/plugins/metismenu-3.0.4/assets/js/mm-vertical-hover.js') }}">
    </script>
    <!-- nice scroll bar -->
    <script src="{{ asset('UserBackend/panel/assets/plugins/scrollbar/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('UserBackend/panel/assets/plugins/scrollbar/scroll.active.js') }}"></script>
    <!-- counter -->
    <script src="{{ asset('UserBackend/panel/assets/plugins/counter/js/counter.js') }}"></script>
    <!-- chart -->
    <script src="{{ asset('UserBackend/panel/assets/plugins/chartjs-bar-chart/Chart.min.js') }}"></script>
    <script src="{{ asset('UserBackend/panel/assets/plugins/chartjs-bar-chart/chart.js') }}"></script>
    <!-- pie chart -->
    <script src="{{ asset('UserBackend/panel/assets/plugins/pie_chart/chart.loader.js') }}"></script>
    <script src="{{ asset('UserBackend/panel/assets/plugins/pie_chart/pie.active.js') }}"></script>
    <!-- Main js -->
    <script src="{{ asset('UserBackend/panel/assets/js/main.js') }}"></script>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <script>
        @if (Session::has('message'))
            toastr.options =
            {
            "closeButton" : true,
            "progressBar" : true
            }
            toastr.success("{{ session('message') }}");
        @endif

        @if (Session::has('error'))
            toastr.options =
            {
            "closeButton" : true,
            "progressBar" : true
            }
            toastr.error("{{ session('error') }}");
        @endif

        @if (Session::has('info'))
            toastr.options =
            {
            "closeButton" : true,
            "progressBar" : true
            }
            toastr.info("{{ session('info') }}");
        @endif

        @if (Session::has('warning'))
            toastr.options =
            {
            "closeButton" : true,
            "progressBar" : true
            }
            toastr.warning("{{ session('warning') }}");
        @endif
    </script>



</body>

</html>
