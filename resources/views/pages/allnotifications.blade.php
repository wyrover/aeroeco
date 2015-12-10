@extends('layouts.logged')

@section('title', 'AeroEco::Notifications')

@section('content')
    <div class="container">
        <notificator></notificator>
    </div>
@endsection

@section('footer')
    @include('layouts/partials/footer')
@endsection

@push('scripts')
@endpush