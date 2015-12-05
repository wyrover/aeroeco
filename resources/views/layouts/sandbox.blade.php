<!DOCTYPE html>
<html>
<head>
    <title> @yield('title') </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<body id="app" class="@yield('body_class')">
<div class="wrapper">
    <div class="container">
        @yield('content')
    </div>
</div>
</body>

{!! HTML::script('js/main.js') !!}
<!-- App scripts -->
@stack('scripts')
    <!-- App scripts -->
</html>