<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <link rel="stylesheet" href="{{ asset('contents/admin') }}/assets/plugins/fontawesome-free/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('contents/admin') }}/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css" />
    <link rel="stylesheet" href="{{ asset('contents/admin') }}/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('contents/admin') }}/assets/plugins/jqvmap/jqvmap.min.css" />
    <link rel="stylesheet" href="{{ asset('contents/admin') }}/assets/css/adminlte.min.css" />
    <link rel="stylesheet" href="{{ asset('contents/admin') }}/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css" />
    <link rel="stylesheet" href="{{ asset('contents/admin') }}/assets/plugins/daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" href="{{ asset('contents/admin') }}/assets/plugins/summernote/summernote-bs4.min.css" />
    <link rel="stylesheet" href="{{ asset('contents/admin') }}/assets/plugins/bootstrap-icons-1.9.1/bootstrap-icons.css" />
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('contents/admin') }}/assets/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60" />
        </div>
        @include('layouts.dashboard-kits.header')
        @include('layouts.dashboard-kits.sidebar')
        <div class="content-wrapper">
            @yield('content')
        </div>
        @include('layouts.dashboard-kits.footer')
    </div>
    {{-- Javascript --}}
    <script src="{{ asset('contents/admin') }}/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="{{ asset('contents/admin') }}/assets/plugins/jquery/jquery.min.js"></script>
    <script src="{{ asset('contents/admin') }}/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('contents/admin') }}/assets/plugins/chart.js/Chart.min.js"></script>
    <script src="{{ asset('contents/admin') }}/assets/plugins/sparklines/sparkline.js"></script>
    <script src="{{ asset('contents/admin') }}/assets/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="{{ asset('contents/admin') }}/assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <script src="{{ asset('contents/admin') }}/assets/plugins/jquery-knob/jquery.knob.min.js"></script>
    <script src="{{ asset('contents/admin') }}/assets/plugins/moment/moment.min.js"></script>
    <script src="{{ asset('contents/admin') }}/assets/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="{{ asset('contents/admin') }}/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="{{ asset('contents/admin') }}/assets/plugins/summernote/summernote-bs4.min.js"></script>
    <script src="{{ asset('contents/admin') }}/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="{{ asset('contents/admin') }}/assets/js/adminlte.js"></script>
    <script src="{{ asset('contents/admin') }}/assets/js/demo.js"></script>
    <script src="{{ asset('contents/admin') }}/assets/js/dashboard.js"></script>
</body>
</html>
