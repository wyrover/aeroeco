@extends('layouts.logged')

@section('title', 'AeroEco::Notifications')

@section('content')
    <h3>All Notifications</h3>
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