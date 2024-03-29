@extends('layouts.logged')

@section('title', 'AeroEco::Inventory')

@section('content')
    <style>
        .row { margin-bottom: 20px; }
    </style>
    <div style="margin-top: 5px;">
        @include('projects.partials.tabs')
        @include('errors.errors')
        @include('layouts.flash')
        <div style="width:40%; margin: 20px auto 0 auto;">
            {!! Form::open([
                'url' => '/upload_inventory',
                'class' => 'form',
                'novalidate' => 'novalidate',
                'files' => 'true'
            ]) !!}
            {!! Form::hidden('project_id', $project->id) !!}
            <div class="row">
                <label>Upload Inventory Listing (if available)</label>
                <input type="file" class="form-control"  />
            </div>

            <div class="row pull-right">
                {!! Form::submit('Continue', ['class' => 'btn btn-uam']) !!}
            </div>
            {!! Form::close() !!}
        </div>
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