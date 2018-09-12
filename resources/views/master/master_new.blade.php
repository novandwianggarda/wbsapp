<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>WBS | DPMPTSP Prov. Jateng</title>
    <link rel="icon" type="gif/ico" href="{{asset('img/prov.gif')}}" />
    <meta name="description" content="WBS DPMPTSP Prov Jateng">
    <meta name="author" content="DPMPTSP Prov Jateng | 2018">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset('css/front/base.css')}}">
    <link rel="stylesheet" href="{{asset('css/front/vendor.css')}}">
    <link rel="stylesheet" href="{{asset('css/front/main.css')}}">

    <!-- script
    ================================================== -->
    <script src="{{asset('js/front/modernizr.js')}}"></script>
    <script src="{{asset('js/front/pace.min.js')}}"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon">

</head>
<body id="top">
    <!-- header
    ================================================== -->

    @yield('header')


    <!-- FORM
    ================================================== -->

    @yield('form')


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
            <div class="line-scale-pulse-out">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <!-- Java Script
        ================================================== -->
    <script src="{{asset('js/front/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/front/plugins.js')}}"></script>
    <script src="{{asset('js/front/main.js')}}"></script>
</body>
</html>
