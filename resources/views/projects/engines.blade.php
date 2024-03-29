@extends('layouts/logged')

@section('title', 'AeroEco::Create Project')

@section('content')
    <style>
        .row { margin-bottom: 20px; }
    </style>
    @include('projects.partials.tabs')
    @include('errors.errors')
    @include('layouts.flash')
    {!! Form::open([
        'url' => '/engines_update',
        'class' => 'form',
        'novalidate' => 'novalidate'
    ]) !!}
    {!! Form::hidden('project_id', $project->id) !!}
    <div class="row" style="margin-top: 5px;">
        <engines project="{{$project->id}}"></engines>
    </div>
    <div class="row pull-right">
       <button class="btn btn-uam" style="margin-right: 20px;">
            Continue
        </button>
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