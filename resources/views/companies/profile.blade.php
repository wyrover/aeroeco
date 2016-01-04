@extends('layouts/logged')

@section('title', 'AeroEco::Company Profile')

@section('content')
    <style>
        .row { margin-bottom: 20px; }
    </style>
    <div style="margin-top: 5px;">
        @include('companies.partials.tabs')
        @include('errors.errors')
        @include('layouts.flash')
        {!! Form::model($company, [
            'url' => '/companies/store_profile',
            'class' => 'form',
            'novalidate' => 'novalidate',
            'files' => 'true'
        ]) !!}
            @include('companies.partials.forms.profile')
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