@extends('layouts.logged')

@section('title', 'AeroEco')

@section('content')
    <h3>Auctions</h3>
    {{$auctions}}
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