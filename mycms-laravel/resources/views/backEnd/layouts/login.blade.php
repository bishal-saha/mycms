<!DOCTYPE html>
<html class="no-js css-menubar" lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap material admin template">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ProjectName') }}</title>

    <link rel="apple-touch-icon" href="{{ asset('backEnd/assets/images/apple-touch-icon.png') }}">
    <link rel="shortcut icon" href="{{ asset('backEnd/assets/images/favicon.ico') }}">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('backEnd/global/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backEnd/global/css/bootstrap-extend.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backEnd/assets/css/site.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backEnd/assets/skins/indigo.css') }}" type="text/css">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset('backEnd/global/vendor/animsition/animsition.css') }}">
    <link rel="stylesheet" href="{{ asset('backEnd/global/vendor/asscrollable/asScrollable.css') }}">
    <link rel="stylesheet" href="{{ asset('backEnd/global/vendor/switchery/switchery.css') }}">
    <link rel="stylesheet" href="{{ asset('backEnd/global/vendor/intro-js/introjs.css') }}">
    <link rel="stylesheet" href="{{ asset('backEnd/global/vendor/slidepanel/slidePanel.css') }}">
    <link rel="stylesheet" href="{{ asset('backEnd/global/vendor/waves/waves.css') }}">
    <link rel="stylesheet" href="{{ asset('backEnd/assets/examples/css/pages/login-v3.css') }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('backEnd/global/fonts/material-design/material-design.min.css') }}">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

    <!--[if lt IE 9]>
    <script src="{{ asset('backEnd/global/vendor/html5shiv/html5shiv.min.js') }}"></script>
    <![endif]-->

    <!--[if lt IE 10]>
    <script src="{{ asset('backEnd/global/vendor/media-match/media.match.min.js') }}"></script>
    <script src="{{ asset('backEnd/global/vendor/respond/respond.min.js') }}"></script>
    <![endif]-->

    <!-- Scripts -->
    <script src="{{ asset('backEnd/global/vendor/breakpoints/breakpoints.js') }}"></script>
    <script>
        Breakpoints();
    </script>

    <link rel="stylesheet" href="{{ asset('backEnd/custom/css/admin.css') }}">
    @yield('header.extended')
</head>
<body class="animsition page-login-v3 layout-full">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Page -->

        @yield('content')
<!-- End Page -->


<!-- Footer -->

<!-- Core  -->
<script src="{{ asset('backEnd/global/vendor/babel-external-helpers/babel-external-helpers.js') }}"></script>
<script src="{{ asset('backEnd/global/vendor/jquery/jquery.js') }}"></script>
<script src="{{ asset('backEnd/global/vendor/popper-js/umd/popper.min.js') }}"></script>
<script src="{{ asset('backEnd/global/vendor/bootstrap/bootstrap.js') }}"></script>
<script src="{{ asset('backEnd/global/vendor/animsition/animsition.js') }}"></script>
<script src="{{ asset('backEnd/global/vendor/mousewheel/jquery.mousewheel.js') }}"></script>
<script src="{{ asset('backEnd/global/vendor/asscrollbar/jquery-asScrollbar.js') }}"></script>
<script src="{{ asset('backEnd/global/vendor/asscrollable/jquery-asScrollable.js') }}"></script>
<script src="{{ asset('backEnd/global/vendor/waves/waves.js') }}"></script>

<!-- Plugins -->
<script src="{{ asset('backEnd/global/vendor/switchery/switchery.js') }}"></script>
<script src="{{ asset('backEnd/global/vendor/intro-js/intro.js') }}"></script>
<script src="{{ asset('backEnd/global/vendor/screenfull/screenfull.js') }}"></script>
<script src="{{ asset('backEnd/global/vendor/slidepanel/jquery-slidePanel.js') }}"></script>
<script src="{{ asset('backEnd/global/vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>

<!-- Scripts -->
<script src="{{ asset('backEnd/global/js/Component.js') }}"></script>
<script src="{{ asset('backEnd/global/js/Plugin.js') }}"></script>
<script src="{{ asset('backEnd/global/js/Base.js') }}"></script>
<script src="{{ asset('backEnd/global/js/Config.js') }}"></script>

<script src="{{ asset('backEnd/assets/js/Section/Menubar.js') }}"></script>
<script src="{{ asset('backEnd/assets/js/Section/Sidebar.js') }}"></script>
<script src="{{ asset('backEnd/assets/js/Section/PageAside.js') }}"></script>
<script src="{{ asset('backEnd/assets/js/Plugin/menu.js') }}"></script>

<!-- Config -->
<script src="{{ asset('backEnd/global/js/config/colors.js') }}"></script>
<script src="{{ asset('backEnd/assets/js/config/tour.js') }}"></script>
<script>Config.set('assets', 'assets');</script>

<!-- Page -->
<script src="{{ asset('backEnd/assets/js/Site.js') }}"></script>
<script src="{{ asset('backEnd/global/js/Plugin/asscrollable.js') }}"></script>
<script src="{{ asset('backEnd/global/js/Plugin/slidepanel.js') }}"></script>
<script src="{{ asset('backEnd/global/js/Plugin/switchery.js') }}"></script>
<script src="{{ asset('backEnd/global/js/Plugin/jquery-placeholder.js') }}"></script>
<script src="{{ asset('backEnd/global/js/Plugin/material.js') }}"></script>
<script>
    (function(document, window, $){
        'use strict';

        var Site = window.Site;
        $(document).ready(function(){
            Site.run();
        });
    })(document, window, jQuery);
</script>
<script>
    let type = "{{ Session::get('alert-type') }}";
    switch(type)
    {
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;
        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;
        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;
        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
</script>
@yield('footer.extended')
</body>
</html>
