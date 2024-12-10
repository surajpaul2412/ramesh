<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/animation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/style.css') }}">

    <!-- Font -->
    <link rel="stylesheet" href="{{ asset('backend/font/fonts.css') }}">

    <!-- Icon -->
    <link rel="stylesheet" href="{{ asset('backend/icon/style.css') }}">

    <!-- Favicon and Touch Icons -->
    <link rel="shortcut icon" href="{{ asset('backend/images/favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('backend/images/favicon.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body class="body">

    <!-- #wrapper -->
    <div id="wrapper">
        <!-- #page -->
        <div id="page" class="">
            <!-- layout-wrap -->
           <div class="layout-wrap">
                <!-- preload -->
                <div id="preload" class="preload-container">
                    <div class="preloading">
                        <span></span>
                    </div>
                </div>
                @include('layouts.sidebar')
                <div class="section-content-right">
                    @include('layouts.navigation')
                    <!-- main-content -->
                    <div class="main-content">
                        <!-- main-content-wrap -->
                        <div class="main-content-inner">
                            <!-- main-content-wrap -->
                            @yield('main')
                            <!-- /main-content-wrap -->
                        </div>
                        @include('layouts.bottom')
                        <!-- /bottom-page -->
                    </div>
                    <!-- /main-content -->
                </div>
                <!-- /section-content-right -->
            </div>
            <!-- /layout-wrap -->
        </div>
        <!-- /#page -->
    </div>
    <!-- /#wrapper -->

    <!-- Javascript -->
    <script src="{{ asset('backend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('backend/js/zoom.js') }}"></script>
    <script src="{{ asset('backend/js/apexcharts/apexcharts.js') }}"></script>
    <script src="{{ asset('backend/js/apexcharts/line-chart-1.js') }}"></script>
    <script src="{{ asset('backend/js/apexcharts/line-chart-2.js') }}"></script>
    <script src="{{ asset('backend/js/apexcharts/line-chart-3.js') }}"></script>
    <script src="{{ asset('backend/js/apexcharts/line-chart-4.js') }}"></script>
    <script src="{{ asset('backend/js/apexcharts/line-chart-5.js') }}"></script>
    <script src="{{ asset('backend/js/apexcharts/line-chart-6.js') }}"></script>
    <!-- <script src="{{ asset('js/switcher.js') }}"></script> -->
    <script src="{{ asset('backend/js/theme-settings.js') }}"></script>
    <script src="{{ asset('backend/js/main.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        @if(session('success'))
            toastr.success("{{ session('success') }}");
        @endif

        @if(session('error'))
            toastr.error("{{ session('error') }}");
        @endif

        @if(session('warning'))
            toastr.warning("{{ session('warning') }}");
        @endif

        @if(session('info'))
            toastr.info("{{ session('info') }}");
        @endif
    </script>
    <script>
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toast-top-right", // Change position here
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
    </script>
</body>
</html>
