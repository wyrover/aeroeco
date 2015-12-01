@extends('layouts/logged')

@section('title', 'ADC::Create New Project')

@section('content')
    <h1 class="text-center">Create New Project</h1>
    <h2 class="intro-text">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias atque blanditits consequatur.
    </h2>
    <br>
@stop

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