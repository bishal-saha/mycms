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

    <title>{{ config('app.name', 'KineticFastag') }}</title>

    <link rel="apple-touch-icon" href="{{ asset('admin/assets/images/apple-touch-icon.png') }}">
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.ico') }}">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('admin/global/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/global/css/bootstrap-extend.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/site.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/skins/orange.css') }}" type="text/css">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset('admin/global/vendor/animsition/animsition.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/global/vendor/asscrollable/asScrollable.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/global/vendor/switchery/switchery.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/global/vendor/intro-js/introjs.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/global/vendor/slidepanel/slidePanel.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/global/vendor/waves/waves.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/global/vendor/toastr/toastr.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/examples/css/advanced/toastr.css') }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('admin/global/fonts/material-design/material-design.min.css') }}">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
    <script defer src="{{ asset('fontawesome/fontawesome-all.min.js') }}"></script>

    <!--[if lt IE 9]>
    <script src="{{ asset('admin/global/vendor/html5shiv/html5shiv.min.js') }}"></script>
    <![endif]-->

    <!--[if lt IE 10]>
    <script src="{{ asset('admin/global/vendor/media-match/media.match.min.js') }}"></script>
    <script src="{{ asset('admin/global/vendor/respond/respond.min.js') }}"></script>
    <![endif]-->

    <!-- Scripts -->
    <script src="{{ asset('admin/global/vendor/breakpoints/breakpoints.js') }}"></script>
    <script>
        Breakpoints();
    </script>

    <link rel="stylesheet" href="{{ asset('admin/custom/css/admin.css') }}">

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.15.2/axios.js"></script>
    @yield('header.extended')
</head>
<body class="animsition">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

@include('admin.includes.header')
@include('admin.includes.sidebar')
<!-- Page -->
<div class="page" id="myApp">
    <div class="page-content container-fluid">
        @yield('content')
    </div>
</div>
<!-- End Page -->


<!-- Footer -->
@include('admin.includes.footer')
<!-- Core  -->
<script src="{{ asset('admin/global/vendor/babel-external-helpers/babel-external-helpers.js') }}"></script>
<script src="{{ asset('admin/global/vendor/jquery/jquery.js') }}"></script>
<script src="{{ asset('admin/global/vendor/popper-js/umd/popper.min.js') }}"></script>
<script src="{{ asset('admin/global/vendor/bootstrap/bootstrap.js') }}"></script>
<script src="{{ asset('admin/global/vendor/animsition/animsition.js') }}"></script>
<script src="{{ asset('admin/global/vendor/mousewheel/jquery.mousewheel.js') }}"></script>
<script src="{{ asset('admin/global/vendor/asscrollbar/jquery-asScrollbar.js') }}"></script>
<script src="{{ asset('admin/global/vendor/asscrollable/jquery-asScrollable.js') }}"></script>
<script src="{{ asset('admin/global/vendor/waves/waves.js') }}"></script>

<!-- Plugins -->
<script src="{{ asset('admin/global/vendor/switchery/switchery.js') }}"></script>
<script src="{{ asset('admin/global/vendor/intro-js/intro.js') }}"></script>
<script src="{{ asset('admin/global/vendor/screenfull/screenfull.js') }}"></script>
<script src="{{ asset('admin/global/vendor/slidepanel/jquery-slidePanel.js') }}"></script>
<script src="{{ asset('admin/global/vendor/toastr/toastr.js') }}"></script>
<!--script src="{{ asset('global/vendor/jquery-placeholder/jquery.placeholder.js') }}"></script-->

<!-- Scripts -->
<script src="{{ asset('admin/global/js/Component.js') }}"></script>
<script src="{{ asset('admin/global/js/Plugin.js') }}"></script>
<script src="{{ asset('admin/global/js/Base.js') }}"></script>
<script src="{{ asset('admin/global/js/Config.js') }}"></script>

<script src="{{ asset('admin/assets/js/Section/Menubar.js') }}"></script>
<script src="{{ asset('admin/assets/js/Section/Sidebar.js') }}"></script>
<script src="{{ asset('admin/assets/js/Section/PageAside.js') }}"></script>
<script src="{{ asset('admin/assets/js/Plugin/menu.js') }}"></script>

<!-- Config -->
<script src="{{ asset('admin/global/js/config/colors.js') }}"></script>
<script src="{{ asset('admin/assets/js/config/tour.js') }}"></script>
<script>Config.set('assets', 'assets');</script>

<!-- Page -->
<script src="{{ asset('admin/assets/js/Site.js') }}"></script>
<script src="{{ asset('admin/global/js/Plugin/asscrollable.js') }}"></script>
<script src="{{ asset('admin/global/js/Plugin/slidepanel.js') }}"></script>
<script src="{{ asset('admin/global/js/Plugin/switchery.js') }}"></script>
<!--script src="{{ asset('global/js/Plugin/jquery-placeholder.js') }}"></script-->
<!--script src="{{ asset('global/js/Plugin/input-group-file.js') }}"></script-->
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
