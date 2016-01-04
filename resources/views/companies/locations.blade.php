@extends('layouts/logged')

@section('title', 'Create Company Profile')

@section('content')
    <style>
        .row { margin-bottom: 20px; }
    </style>
    <div style="margin-top: 5px;">
        @include('companies.partials.tabs')
        @include('errors.errors')
        @include('layouts.flash')
        {!! Form::model($company, [
            'url' => '/store_locations',
            'class' => 'form',
            'novalidate' => 'novalidate',
            'files' => 'true'
        ]) !!}
        @include('companies.partials.forms.locations')
        <div class="row">
            <div class="col-md-12" style="max-height: 36px;">
                {!! Form::submit('Update', ['class' => 'btn btn-uam pull-right']) !!}
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