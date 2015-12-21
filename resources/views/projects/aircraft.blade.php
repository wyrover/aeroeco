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
            'url' => '/aircraft_store',
            'class' => 'form',
            'novalidate' => 'novalidate',
            'files' => 'true'
        ]) !!}
        @include('projects.partials.forms.aircraft')
        <div class="row pull-right" style="margin-right: 0;">
            {!! Form::submit('Continue', ['id' => 'btnEngines', 'class' => 'btn btn-uam']) !!}
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
        $('#aircraft_type').typeahead({
            ajax: '/api/aircrafts/list',
            displayField: 'model',
            triggerLength: 1,
            onSelect: function(item) {
                console.log(item);
            }
        });
    });
</script>
@endpush