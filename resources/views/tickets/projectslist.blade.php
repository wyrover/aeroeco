@extends('layouts.logged')

@section('title', 'AeroEco')

@section('content')
    <h3>Tickets</h3>
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