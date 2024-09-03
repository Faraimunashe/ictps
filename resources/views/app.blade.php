<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        @vite('resources/js/app.js')
        @inertiaHead
        <link rel="apple-touch-icon" sizes="180x180" href="">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicons/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicons/favicon-16x16.png')}}">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicons/favicon.ico')}}">
        <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicons/mstile-150x150.png')}}">
        <meta name="theme-color" content="#ffffff">
        <script src="{{ asset('vendors/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{ asset('vendors/simplebar/simplebar.min.js')}}"></script>
        <script src="{{ asset('assets/js/config.js')}}"></script>


        <!-- ===============================================-->
        <!--    Stylesheets-->
        <!-- ===============================================-->
        <link href="{{asset('vendors/choices/choices.min.css')}}" rel="stylesheet">
        <link href="{{asset('vendors/prism/prism-okaidia.css')}}" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
        <link href="{{ asset('vendors/simplebar/simplebar.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
        <link href="{{ asset('assets/css/theme-rtl.min.css')}}" type="text/css" rel="stylesheet" id="style-rtl">
        <link href="{{ asset('assets/css/theme.min.css')}}" type="text/css" rel="stylesheet" id="style-default">
        <link href="{{ asset('assets/css/user-rtl.min.css')}}" type="text/css" rel="stylesheet" id="user-style-rtl">
        <link href="{{ asset('assets/css/user.min.css')}}" type="text/css" rel="stylesheet" id="user-style-default">
        <script>
            var phoenixIsRTL = window.config.config.phoenixIsRTL;
            if (phoenixIsRTL) {
                var linkDefault = document.getElementById('style-default');
                var userLinkDefault = document.getElementById('user-style-default');
                linkDefault.setAttribute('disabled', true);
                userLinkDefault.setAttribute('disabled', true);
                document.querySelector('html').setAttribute('dir', 'rtl');
            } else {
                var linkRTL = document.getElementById('style-rtl');
                var userLinkRTL = document.getElementById('user-style-rtl');
                linkRTL.setAttribute('disabled', true);
                userLinkRTL.setAttribute('disabled', true);
            }
        </script>
        <link href="{{ asset('vendors/leaflet/leaflet.css')}}" rel="stylesheet">
        <link href="{{ asset('vendors/leaflet.markercluster/MarkerCluster.css')}}" rel="stylesheet">
        <link href="{{ asset('vendors/leaflet.markercluster/MarkerCluster.Default.css')}}" rel="stylesheet">

    </head>
    <body>
        @inertia

        {{-- <script type="module" src="./src/main.js"></script> --}}
        <!-- ===============================================-->
        <!--    JavaScripts-->
        <!-- ===============================================-->
        <script src="{{ asset('vendors/popper/popper.min.js')}}"></script>
        <script src="{{ asset('vendors/bootstrap/bootstrap.min.js')}}"></script>
        <script src="{{ asset('vendors/anchorjs/anchor.min.js')}}"></script>
        <script src="{{ asset('vendors/is/is.min.js')}}"></script>
        <script src="{{ asset('vendors/fontawesome/all.min.js')}}"></script>
        <script src="{{ asset('vendors/lodash/lodash.min.js')}}"></script>
        <script src="{{ asset('vendors/list.js/list.min.js')}}"></script>
        <script src="{{ asset('vendors/feather-icons/feather.min.js')}}"></script>
        <script src="{{ asset('vendors/dayjs/dayjs.min.js')}}"></script>
        <script src="{{ asset('vendors/prism/prism.js')}}"></script>
        <script src="{{ asset('assets/js/phoenix.js')}}"></script>
        <script src="{{ asset('vendors/echarts/echarts.min.js')}}"></script>
        <script src="{{ asset('vendors/leaflet/leaflet.js')}}"></script>
        <script src="{{ asset('vendors/leaflet.markercluster/leaflet.markercluster.js')}}"></script>
        <script src="{{ asset('vendors/leaflet.tilelayer.colorfilter/leaflet-tilelayer-colorfilter.min.js')}}"></script>
        <script src="{{ asset('assets/js/ecommerce-dashboard.js')}}"></script>
    </body>
</html>
