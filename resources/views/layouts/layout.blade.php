<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ==== Document Title ==== -->
    <title>{{ $settings->title }}</title>

    <!-- ==== Document Meta ==== -->
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- ==== Favicon ==== -->
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png">

    <!-- ==== Google Font ==== -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700%7CRoboto:300,400,400i,500,700">

    <!-- ==== Plugins Bundle ==== -->
    <link rel="stylesheet" href="{{ asset('css/plugins.min.css') }}">

    <!-- ==== Main Stylesheet ==== -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">

    <!-- ==== Responsive Stylesheet ==== -->
    <link rel="stylesheet" href="{{ asset('css/responsive-style.css') }}">

    <!-- ==== Color Scheme Stylesheet ==== -->
    <link rel="stylesheet" href="{{ asset('css/colors/color-1.css') }}" id="changeColorScheme">

    <!-- ==== Custom Stylesheet ==== -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    @yield('css')

    <!-- ==== HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries ==== -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- Preloader Start -->
<div id="preloader">
    <div class="preloader--inner"></div>
</div>
<!-- Preloader End -->

<!-- Wrapper Start -->
<div class="wrapper">

    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

</div>
<!-- Wrapper End -->

<!-- Back To Top Button Start -->
<div id="backToTop">
    <a href="#" class="btn"><i class="fa fa-caret-up"></i></a>
</div>
<!-- Back To Top Button End -->

<!-- ==== Plugins Bundle ==== -->
<script src="{{ asset('js/plugins.min.js') }}"></script>

<!-- ==== Main Script ==== -->
<script src="{{ asset('js/main.js') }}"></script>
@yield('js')
</body>
</html>