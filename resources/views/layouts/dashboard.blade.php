<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ env('APP_NAME')}}| @yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('/vendor/bootstrap-3/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/vendor/fontawesome-5.10/svg-with-js/css/fa-svg-with-js.css')}}">
    <link rel="stylesheet" href="{{ asset('/vendor/adminlte/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/vendor/adminlte/css/skins/_all-skins.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/vendor/select2/dist/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('/vendor/fontawesome-5.10/web-fonts-with-css/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        @include('layouts.includes.header')

        <!-- Left side column. contains the logo and sidebar -->
        @include("layouts.includes.sidebar")

        @yield('content')

        @include('layouts.includes.footer')

        <!-- ./wrapper -->

        <!-- jQuery 3 -->
        <script src="{{asset('vendor/jquery-3.3.1.min.js')}}"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="{{asset('vendor/jquery-ui-1.12.1/jquery-ui.min.js')}}"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button);
        </script>
        <!-- Bootstrap 3.3.7 -->
        <script src="{{asset('vendor/bootstrap-3/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('vendor/adminlte/js/adminlte.min.js') }}"></script>
        <script src="{{ asset('vendor/select2/dist/js/select2.min.js') }}"></script>
        @stack('scripts')
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    </div>
</body>
</html>
