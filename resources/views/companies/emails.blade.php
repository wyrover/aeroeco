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
        {!! Form::open([
            'url' => '/store_emails',
            'class' => 'form',
            'novalidate' => 'novalidate'
        ]) !!}
        @include('companies.partials.forms.emails')
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