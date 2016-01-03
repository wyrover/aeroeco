@extends('layouts.logged')

@section('title', 'Create Company Profile')

@section('content')
    <style>
        .row { margin-bottom: 20px; }
    </style>
    <div style="margin-top: 5px;">
        @include('companies.partials.tabs')
        {!! Form::model($company->plugins, [
            'url' => '/store_plugins',
            'class' => 'form',
            'novalidate' => 'novalidate'
        ]) !!}
        <h3>Need Content</h3>
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