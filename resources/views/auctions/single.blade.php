@extends('layouts.logged')

@section('title', 'AeroEco')

@section('content')
    <h3>Auction</h3>
    {{$auction}}
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