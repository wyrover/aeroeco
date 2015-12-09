@extends('layouts/logged')

@section('title', 'AeroEco:: Message Center')

@section('content')
    <h3>ALL MY MESSAGES</h3>
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