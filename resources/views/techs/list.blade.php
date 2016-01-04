@extends('layouts.logged')

@section('title', 'AeroEco')

@section('content')
    <h3>Disassembly Teams</h3>
    <br>
    <technicians></technicians>
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