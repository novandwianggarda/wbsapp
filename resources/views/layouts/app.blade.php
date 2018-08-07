<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('adminpublic/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('adminpublic/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('adminpublic/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('adminpublic/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('adminpublic/css/wbs.css') }}" rel="stylesheet">

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body class="gray-bg">
<ul class="nav navbar-nav navbar-right">
    <!-- Authentication Links -->
    @if (Auth::guest())

    @else
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <ul class="dropdown-menu" role="menu">
                <li>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </li>
    @endif
</ul>
    @yield('content')

    <!-- Scripts -->
    <script src="{{ asset('adminpublic/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('adminpublic/js/bootstrap.min.js') }}"></script>
</body>
</html>
