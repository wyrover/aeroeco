@extends('layouts.logged')

@section('title', 'AeroEco::User Preferences')

@section('content')
    <div>

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#notifications" aria-controls="notifications" role="tab" data-toggle="tab">Notifications</a></li>
            <li role="presentation"><a href="#widgets" aria-controls="widgets" role="tab" data-toggle="tab">Widgets</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="notifications">...</div>
            <div role="tabpanel" class="tab-pane fade" id="widgets">...</div>
        </div>

    </div>
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