@extends('layouts.logged')

@section('title', 'AeroEco')

@section('content')
    <h3>Work Tickets</h3>
    {{$tickets}}
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