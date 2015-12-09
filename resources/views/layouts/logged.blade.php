<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> @yield('title') </title>

    <link type="image/x-icon" href="favicon.ico" rel="shortcut icon" />
    <script src="https://use.typekit.net/eqs2vwj.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

    {!! HTML::style('css/app.css') !!}
</head>

<body id="app" class="@yield('body_class')">
@include('layouts.partials.userbar')

<div id="wrapper">
    <!-- #Sidebar Wrapper -->
    <div id="sidebar-wrapper">
        @include('layouts.partials.sidebar')
    </div>
    <!-- /#Sidebar Wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        @yield('content')
    </div>
    <!-- /Page Content -->

    <div class="footer">
        @yield('footer')
    </div>
</div>
</body>
<!-- Bootstrap and Bootcards JS -->
{!! HTML::script('js/app.js') !!}
{!! HTML::script('js/main.js') !!}
@include('layouts.flash')
<!-- App scripts -->
@stack('scripts')
    <!-- App scripts -->
</html>