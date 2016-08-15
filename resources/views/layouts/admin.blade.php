<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset("img/furpawlogo.png") }}">
    <!-- Core CSS - Include with every page -->
    <link href="{{ asset("assets/plugins/bootstrap/bootstrap.css") }}" rel="stylesheet" />
    <link href="{{ asset("assets/font-awesome/css/font-awesome.css") }}" rel="stylesheet" />
    <link href="{{ asset("assets/plugins/pace/pace-theme-big-counter.css") }}" rel="stylesheet" />
    <link href="{{ asset("assets/css/style.css") }}" rel="stylesheet" />
    <link href="{{ asset("assets/css/main-style.css") }}" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="{{ asset("assets/plugins/morris/morris-0.4.3.min.css") }}" rel="stylesheet" />
    @stack('head-css')
    <title>FurAndPaws-@yield('title')</title>

   </head>
<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
      @include('pages.admin.nav')
        <!-- end navbar top -->
        <!--  page-wrapper -->
      @yield('content')
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="{{ asset("assets/plugins/jquery-1.10.2.js") }}"></script>
    <script src="{{ asset("assets/plugins/bootstrap/bootstrap.min.js") }}"></script>
    <script src="{{ asset("assets/plugins/metisMenu/jquery.metisMenu.js") }}"></script>
    <script src="{{ asset("assets/plugins/pace/pace.js") }}"></script>
    <script src="{{ asset("assets/scripts/siminta.js")}}"></script>
    <!-- Page-Level Plugin Scripts-->
    @stack('body-bottom-scripts')

</body>

</html>
