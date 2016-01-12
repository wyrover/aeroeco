@extends('layouts.logged')

@section('title', 'AeroEco')

@section('content')
    <h3>Project {{$project->aircraft->tail}}</h3>
    <scope project="{{$project->id}}"></scope>
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