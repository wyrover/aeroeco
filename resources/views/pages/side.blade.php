<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Simple Sidebar - Start Bootstrap Template</title>
    {!! HTML::style('css/app.css') !!}
</head>

<body>
@include('layouts.partials.userbar')

<div id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        @include('layouts.partials.sidebar')
    </div><!-- /#sidebar-wrapper -->
    <!-- Page Content -->
    <div id="page-content-wrapper">
        @yield('content')
    </div>
    <!-- /#page-content-wrapper -->
</div>
<!-- /#wrapper -->

{!! HTML::script('js/app.js') !!}
</body>

</html>
