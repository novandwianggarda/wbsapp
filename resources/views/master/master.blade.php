<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{config('app.name', 'WBS')}}</title>

    <link rel="stylesheet"  type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" media="all">

</head>
<body>
    <div class="wrapper">
        @yield('header')
        <div class="main app form" id="main"><!-- Main Section-->
            @yield('front')

            {{--@yield('detail_laporan')

            @yield('lapor')

            @yield('sikil')--}}

        </div>
    </div>
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
    <script src="{{asset('js/jquery.subscribe.js')}}"></script>

    <script src="{{asset('js/parallax.min.js')}}"></script>
    <script>
        var scene = document.getElementById('scene');
        var parallaxInstance = new Parallax(scene);
    </script>
</body>
</html>
