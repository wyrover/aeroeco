@extends('layouts.logged')

@section('title', 'AeroEco')

@section('header')
    @include('layouts.partials.userbar')
@stop

@section('content')
    <h1>Dashboard</h1>
@stop

@section('footer')
    <div class="footer">
        @include('layouts.partials.footer')
    </div>
@stop
