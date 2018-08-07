<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{config('app.name', ' || Admin')}}</title>

    <link href="{{ asset('adminpublic/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('adminpublic/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('adminpublic/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('adminpublic/css/style.css') }}" rel="stylesheet">

</head>

<body>


<div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        @yield('menu')
    </nav>

    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        @yield('header')
        </div>
        <div class="wrapper wrapper-content">
        @yield('content')
        </div>
        @yield('footer')
    </div> {{--wrapper--}}
</div>


{{--main script--}}
<script src="{{ asset('adminpublic/js/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('adminpublic/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('adminpublic/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
<script src="{{ asset('adminpublic/js/plugins/slimscroll/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('adminpublic/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

{{--Float script--}}
<script src="{{ asset('adminpublic/js/plugins/flot/jquery.flot.js') }}"></script>
<script src="{{ asset('adminpublic/js/plugins/flot/jquery.flot.tooltip.min.js') }}"></script>
<script src="{{ asset('adminpublic/js/plugins/flot/jquery.flot.spline.js') }}"></script>
<script src="{{ asset('adminpublic/js/plugins/flot/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('adminpublic/js/plugins/flot/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('adminpublic/js/plugins/flot/jquery.flot.symbol.js') }}"></script>
<script src="{{ asset('adminpublic/js/plugins/flot/jquery.flot.time.js') }}"></script>

<!-- Peity -->
<script src="{{ asset('adminpublic/js/plugins/peity/jquery.peity.min.js') }}"></script>
<script src="{{ asset('adminpublic/js/demo/peity-demo.js') }}"></script>

<script src="{{ asset('adminpublic/js/inspinia.js') }}"></script>
<script src="{{ asset('adminpublic/js/plugins/pace/pace.min.js') }}"></script>

<script src="{{ asset('adminpublic/js/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

{{--<script src="{{ asset('adminpublic/') }}"></script>
<script src="{{ asset('adminpublic/') }}"></script>--}}


</body>


</html>