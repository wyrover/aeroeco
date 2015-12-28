@extends('layouts/guest')

@section('title', 'Create Company Profile')

@section('content')
    <style>
        .row { margin-bottom: 20px; }
    </style>
    <div style="margin-top: 5px;">
        @include('companies.partials.tabs')
        {!! Form::open([
            'url' => '/store_users',
            'class' => 'form',
            'novalidate' => 'novalidate'
        ]) !!}
        @include('companies.partials.forms.users')
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