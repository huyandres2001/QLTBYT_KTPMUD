<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Starlight Responsive Bootstrap 4 Admin Template</title>

    <!-- vendor css -->
    <link href="{{ asset('AdminBackend/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('AdminBackend/lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('AdminBackend/lib/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('AdminBackend/lib/rickshaw/rickshaw.min.css') }}" rel="stylesheet">

    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{ asset('AdminBackend/css/starlight.css') }}">
  </head>

  <body>

    @include('admin.body.sidebar_left')

    @include('admin.body.header')

    @include('admin.body.sidebar_right')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <span class="breadcrumb-item active">Dashboard</span>
      </nav>
      
      @yield('admin')

      @include('admin.body.footer')

    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <script src="{{ asset('AdminBackend/lib/jquery/jquery.js') }} "></script>
    <script src="{{ asset('AdminBackend/lib/popper.js/popper.js') }} "></script>
    <script src="{{ asset('AdminBackend/lib/bootstrap/bootstrap.js') }} "></script>
    <script src="{{ asset('AdminBackend/lib/jquery-ui/jquery-ui.js') }} "></script>
    <script src="{{ asset('AdminBackend/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js') }} "></script>
    <script src="{{ asset('AdminBackend/lib/jquery.sparkline.bower/jquery.sparkline.min.js') }} "></script>
    <script src="{{ asset('AdminBackend/lib/d3/d3.js') }}"></script>
    <script src="{{ asset('AdminBackend/lib/rickshaw/rickshaw.min.js') }}"></script>
    <script src="{{ asset('AdminBackend/lib/chart.js/Chart.js') }}"></script>
    <script src="{{ asset('AdminBackend/lib/Flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('AdminBackend/lib/Flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('AdminBackend/lib/Flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('AdminBackend/lib/flot-spline/jquery.flot.spline.js') }}"></script>

    <script src="{{ asset('AdminBackend/js/starlight.js') }}"></script>
    <script src="{{ asset('AdminBackend/js/ResizeSensor.js') }}"></script>
    <script src="{{ asset('AdminBackend/js/dashboard.js') }}"></script>
  </body>
</html>
