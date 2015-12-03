@extends('layouts/guest')

@section('title', 'Create Your Company Profile')

@section('content')
    <br><br>
    <div class="row">
        <div class="col-md-12 text-center">
            <br><h2>Thanks for coming aboard!<br>You're the company administration ... waaay to go!<br>Click to create your company now!</h2>
            <a href="/companies/newco" class="btn btn-default">Begin</a>
        </div>
    </div>
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