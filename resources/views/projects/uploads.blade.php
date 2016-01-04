@extends('layouts.logged')

@section('title', 'AeroEco::Create Project')

@section('content')
    <style>
        .row { margin-bottom: 20px; }
    </style>
    @include('projects.partials.tabs')
    @include('errors.errors')
    @include('layouts.flash')
    <div style="margin-top: 15px;">
        {!! Form::open([
            'url' => '/uploads_update',
            'class' => 'form',
            'novalidate' => 'novalidate',
            'files' => 'true'
        ]) !!}
        {!! Form::hidden('project_id', $project->id) !!}
        @include('projects.partials.forms.uploads')
        <div class="row pull-right" style="margin-right: 0;">
            {!! Form::submit('Continue', ['id' => 'btnUploads', 'class' => 'btn btn-uam']) !!}
        </div>
        {!! Form::close() !!}
        <br><br>
    </div>
@endsection

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