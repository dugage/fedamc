<!DOCTYPE html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin Free Bootstrap-4 Admin Dashboard Template</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('fedamc/vendors/iconfonts/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('fedamc/vendors/css/vendor.bundle.base.css') }}">
  <link rel="stylesheet" href="{{ asset('fedamc/vendors/css/vendor.bundle.addons.css') }}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('fedamc/css/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('fedamc/images/favicon.png') }}" />
  <style type="text/css">
    @yield('custom-css')
  </style>
</head>

<body>
  <div class="container-scroller">

    <!-- partial:../../partials/_navbar.html -->
    @include('layout.parts.navbar')
    <!-- end partial-navbar -->

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
      
      @include('layout.parts.sidebar')
      
      <!-- partial -->
      <div class="main-panel">

        <!-- content-wrapper -->
        <div class="content-wrapper">
          @yield('content')
        </div>
        <!-- content-wrapper ends -->

        <!-- partial:../../partials/_footer.html -->
        @include('layout.parts.footer')
        <!-- partial -->

      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- JS PERSONALIZADO -->
  @yield('custom-js')
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{ asset('fedamc/vendors/js/vendor.bundle.base.js') }}"></script>
  <script src="{{ asset('fedamc/vendors/js/vendor.bundle.addons.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{ asset('fedamc/js/off-canvas.js') }}"></script>
  <script src="{{ asset('fedamc/js/misc.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>
