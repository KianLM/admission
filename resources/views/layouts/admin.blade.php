<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('admin/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/js/select.dataTables.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('admin/css/vertical-layout-light/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('admin/images/favicon.png') }}" />
    @livewireStyles
</head>
<body>

    <div class="container-scroller"> 
        @include('layouts.inc.admin.navbar')
        <div class="container-fluid page-body-wrapper">
            @include('layouts.inc.admin.sidebar')
          <!--@include('layouts.inc.admin.rightsidebar')-->
            <div class="main-panel"> 
                <div class="content-wrapper">
                    @yield('content')
                </div>
            </div>
        </div>   
    </div>

        <script src="{{ asset('admin/vendors/js/vendor.bundle.base.js') }}"></script>
        <script src="{{ asset('admin/vendors/datatables.net/jquery.dataTables.js') }}"></script>
        <script src="{{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
        <script src="{{ asset('admin/js/dataTables.select.min.js') }}"></script>

        <script src="{{ asset('admin/js/off-canvas.js') }}"></script>
        <script src="{{ asset('admin/js/hoverable-collapse.js') }}"></script>
        <script src="{{ asset('admin/js/template.js') }}"></script>
        <script src="{{ asset('admin/js/settings.js') }}"></script>
        <script src="{{ asset('admin/js/todolist.js') }}"></script>
     
        <script src="{{ asset('admin/js/dashboard.js') }}"></script>
        <script src="{{ asset('admin/ js/Chart.roundedBarCharts.js') }}"></script>
        @livewireScripts
</body>
</html>