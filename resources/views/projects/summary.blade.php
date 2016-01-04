@extends('layouts/logged')

@section('title', 'AeroEco::Create Project')

@section('content')
    <style>
        .row { margin-bottom: 20px; }
    </style>
    @include('projects.partials.tabs')
    @include('errors.errors')
    @include('layouts.flash')
    <div style="margin-top: 5px;">
        {!! Form::open([
            'url' => '/project_summary',
            'class' => 'form',
            'novalidate' => 'novalidate'
        ]) !!}
        {{--@include('projects.partials.forms.summary')--}}
        <div class="row">
            <div class="col-md-12" style="text-align: right;">
                <button class="btn btn-uam">Submit Project for Approval</button>
            </div>
        </div>
        {!! Form::close() !!}
        <br><br>
    </div>
@stop

@section('footer')
    @include('layouts/partials/footer')
@endsection

@push('scripts')
<script>
    $(function() {
        //alert('jQuery');
    });
</script>
@endpush