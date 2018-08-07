<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <title>{{config('app.name', 'WBS')}}</title>

    <link rel="stylesheet" href="{{asset('css/new/mobirise-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/new/tether.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/new/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/new/bootstrap-grid.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/new/bootstrap-reboot.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/new/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/new/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/new/style-2.css')}}">
    <link rel="stylesheet" href="{{asset('css/new/mbr-additional.css')}}">

</head>
<body>

<section class="menu cid-qXVv7jAyP4" once="menu" id="menu1-6">
    @yield('menu')
</section>

<section class="mbr-section form1 cid-qXVwH3SYrI" id="form1-8">
    @yield('form')
</section>
@include('master.error')
<section class="cid-qXVwSlg7em" id="footer2-c">
    @yield('this')
</section>

<a id="back-top" class="back-to-top page-scroll" href="#main"> <i class="ion-ios-arrow-thin-up"></i> </a>

<!-- Preloader -->
<div id="preloader">
    <div id="status">
        <div class="loader"></div>
    </div>
</div>
<!-- /Preloader -->

<script src="{{asset('js/new/jquery.min.js')}}"></script>
<script src="{{asset('js/new/popper.min.js')}}"></script>
<script src="{{asset('js/new/tether.min.js')}}"></script>
<script src="{{asset('js/new/bootstrap.min.js')}}"></script>
<script src="{{asset('js/new/smooth-scroll.js')}}"></script>
<script src="{{asset('js/new/script.min.js')}}"></script>
<script src="{{asset('js/new/jquery.touch-swipe.min.js')}}"></script>
<script src="{{asset('js/new/jarallax.min.js')}}"></script>
<script src="{{asset('js/new/social-likes.js')}}"></script>
<script src="{{asset('js/new/script.min.js')}}"></script>
<script src="{{asset('js/new/formoid.min.js')}}"></script>

</body>
</html>
