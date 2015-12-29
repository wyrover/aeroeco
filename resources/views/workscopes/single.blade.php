@extends('layouts.logged')

@section('title', 'AeroEco')

@section('content')
    <h3>WorkScope</h3>
    {{$scope}}
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