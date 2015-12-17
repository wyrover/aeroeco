@extends('layouts/logged')

@section('title', 'AeroEco::Create Project')

@section('content')
    <style>
        .row { margin-bottom: 20px; }
    </style>
    @include('projects.partials.tabs')
    @include('errors.errors')
    <div style="margin-top: 15px;">
        {!! Form::open([
            'url' => '/projects/aircraft',
            'class' => 'form',
            'novalidate' => 'novalidate',
            'files' => 'true'
        ]) !!}
        @include('projects.partials.forms.aircraft')
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