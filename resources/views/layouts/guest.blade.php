<!DOCTYPE html>
<html>
<head>
    <title> @yield('title') </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta id="token" name="token" value="{{ csrf_token() }}">

    <link type="image/x-icon" href="favicon.ico" rel="shortcut icon" />
    <script src="https://use.typekit.net/eqs2vwj.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

    {!! HTML::style('css/app.css') !!}
</head>
<body class="@yield('body_class')">
<div class="wrapper">
    <div class="header">
        @yield('header')
    </div>

    <div class="container">
        @yield('content')
    </div>

    <div class="footer">
        @yield('footer')
    </div>
</div>
</body>
{!! HTML::script('js/app.js') !!}
@include('layouts.flash')
<!-- App scripts -->
@stack('scripts')
    <!-- App scripts -->
</html>