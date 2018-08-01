<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>

    @stack('meta')

    <!-- Bootstrap core CSS-->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->

     @stack('style')

    <!-- Page level plugin CSS-->

    <!-- Custom styles for this template-->

    <link href="{{ asset('css/sb-admin.css') }}" rel="stylesheet">

    <script>
      var base_url = "{{url('')}}";
    </script>
  </head>

  <body id="page-top">

    <!-- header -->
      @stack('header')
    <!-- header -->

    <div id="wrapper">

      <!-- Sidebar -->
        @stack('menu')
      <!-- Sidebar -->
      <div id="content-wrapper">

        <div class="container-fluid">

         <!-- content -->
          @yield('content')
         <!-- content -->
         
        </div>
        <!-- /.container-fluid -->

        <!-- footer section -->
          @stack('footer')
        <!-- footer section -->

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Page level plugin JavaScript Start-->
    @stack('script')
    <!-- Page level plugin JavaScript End-->

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin.min.js') }}"></script>

  </body>

</html>
