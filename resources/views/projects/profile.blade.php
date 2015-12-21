@extends('layouts/logged')

@section('title', 'AeroEco::Create Project')

@section('body_class', 'project_page')

@section('content')
    <style>
        .row { margin-bottom: 20px; }
    </style>
    <div style="margin-top: 5px;">
        @include('projects.partials.tabs')
        @include('errors.errors')
        <div style="width:40%; margin: 20px auto 0 auto;">
            {!! Form::open([
                'url' => '/projects',
                'class' => 'form',
                'novalidate' => 'novalidate',
                'files' => 'true'
            ]) !!}
            @include('projects.partials.forms.profile')
            <div class="row pull-right">
                {!! Form::submit('Continue', ['class' => 'btn btn-uam']) !!}
            </div>
            {!! Form::close() !!}
        </div>
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