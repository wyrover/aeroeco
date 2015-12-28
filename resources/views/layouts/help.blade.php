<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> @yield('title') </title>
    <link type="image/x-icon" href="favicon.ico" rel="shortcut icon" />
    <meta id="token" name="token" value="{{ csrf_token() }}">
    {!! HTML::style('css/app.css') !!}
</head>
<body class="@yield('body_class')">
<div class="wrapper">
    <div class="header"></div>

    <div class="container">
        @yield('content')
    </div>

    <div class="footer"></div>
</div>
</body>
{!! HTML::script('js/app.js') !!}
<!-- App scripts -->
@stack('scripts')
    <!-- App scripts -->
</html>