@extends('layouts.logged')

@section('title', 'AeroEco::Home')

@section('header')
    @include('layouts.partials.userbar')
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <projects user="{{$user->id}}"></projects>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Widget</h3>
                </div>
                <div class="panel-body"></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Widget</h3>
                </div>
                <div class="panel-body"></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Widget</h3>
                </div>
                <div class="panel-body"></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Widget</h3>
                </div>
                <div class="panel-body"></div>
            </div>
        </div>
    </div>
    <!--<div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Widget</h3>
                </div>
                <div class="panel-body"></div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Widget</h3>
                </div>
                <div class="panel-body"></div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Widget</h3>
                </div>
                <div class="panel-body"></div>
            </div>
        </div>

    </div>-->
@stop

@section('footer')
    <div class="footer">
        @include('layouts.partials.footer')
    </div>
@stop
