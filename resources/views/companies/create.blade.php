@extends('layouts/guest')

@section('title', 'Create Your Company Profile')

@section('content')
    <br><br>
    <div class="row">
        <div class="col-md-6 text-right">
            {!! HTML::image('images/beaux.png', '', []) !!}
            <h3>Hi, we're <span style="color: #333;">BEAUX</span></h3>
        </div>
        <div class="col-md-6">
            {!! HTML::image('images/aero.png', '', []) !!}
            <h3>and <span style="color: #333;">AERO</span>!</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <br><h2>Thanks for coming aboard!<br>You're the company administration ... waaay to go!<br>Click to create your company now!</h2>
            <a href="/newco" class="btn btn-default">Begin</a>
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