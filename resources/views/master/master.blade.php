<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>{{config('app.name', 'WBS')}}</title>

    <link rel="stylesheet"  type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>
<body>
    <div class="wrapper">
        @yield('header')
    </div>
    <div class="main app form" id="main">
        @yield('front')

        @yield('detail_laporan')

        @yield('form')

        @yield('lapor')

        @yield('sikil')
    </div>
    <a id="back-top" class="back-to-top page-scroll" href="#main"> <i class="ion-ios-arrow-thin-up"></i> </a>

    <!-- Preloader -->
    <div id="preloader">
        <div id="status">
            <div class="loader"></div>
        </div>
    </div>
    <!-- /Preloader -->

    {{--Script--}}
    <script type="text/javascript" src="{{asset('js/jquery-2.1.1.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/plugins.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/menu.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
</body>
</html>
