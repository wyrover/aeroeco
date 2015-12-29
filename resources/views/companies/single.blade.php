@extends('layouts.logged')

@section('title', 'Aeroeco')

@section('content')
    <h3>Company</h3>
    {{$company}}
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