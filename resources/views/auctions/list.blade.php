@extends('layouts.logged')

@section('title', 'AeroEco')

@section('content')
    <h3>Auctions</h3>
    <br>
    <h4>ACTIVE</h4>
    <br>
    <table class="table table-striped table-condensed">
        <thead>
            <tr>
                <th>Tier</th>
                <th>Project</th>
                <th>Total Inventory</th>
                <th>Start Date</th>
                <th>Close Date</th>
            </tr>
        </thead>
    </table>
    <br><br>
    <h4>PENDING</h4>
    <table class="table table-striped table-condensed">
        <thead>
        <tr>
            <th>Tier</th>
            <th>Project</th>
            <th>Total Inventory</th>
            <th>Start Date</th>
            <th>Close Date</th>
        </tr>
        </thead>
    </table>
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