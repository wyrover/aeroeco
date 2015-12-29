@extends('layouts.logged')

@section('title', 'AeroEco')

@section('content')
    <h3>WorkTicket</h3>
    {{$ticket}}
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