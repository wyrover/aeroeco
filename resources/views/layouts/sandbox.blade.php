<!DOCTYPE html>
<html>
<head>
    <title> @yield('title') </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta id="token" name="token" value="{{ csrf_token() }}">
</head>
<body class="@yield('body_class')" v-cloak>
<div class="wrapper">
    <div class="container">
        @yield('content')
    </div>
</div>
</body>

{!! HTML::script('js/app.js') !!}
{!! HTML::script('js/main.js') !!}
<!-- App scripts -->
@stack('scripts')
    <!-- App scripts -->
</html>