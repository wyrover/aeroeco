@extends('layouts/logged')

@section('title', 'ADC::Create New Project')

@section('body_class', 'project_page')

@section('content')
    <div style="margin-top: 10px;">
        <!-- Nav tabs -->
        <ul id="projectTabs" class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active">
                <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
                    PROFILE
                </a>
            </li>
            <li role="presentation">
                <a href="#aircraft" aria-controls="aircraft" role="tab" data-toggle="tab">
                    AIRCRAFT
                </a>
            </li>
            <li role="presentation">
                <a href="#engines" aria-controls="engines" role="tab" data-toggle="tab">
                    ENGINES
                </a>
            </li>
            <li role="presentation">
                <a href="#scope" aria-controls="scope" role="tab" data-toggle="tab">
                    SCOPE
                </a>
            </li>
            <li role="presentation">
                <a href="#summary" aria-controls="summary" role="tab" data-toggle="tab">
                    SUMMARY
                </a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="profile">
                @include('projects.partials.profile')
            </div>
            <div role="tabpanel" class="tab-pane fade in" id="aircraft">
                @include('projects.partials.aircraft')
            </div>
            <div role="tabpanel" class="tab-pane fade in" id="engines">
                @include('projects.partials.engines')
            </div>
            <div role="tabpanel" class="tab-pane fade in" id="scope">
                @include('projects.partials.scope')
            </div>
            <div role="tabpanel" class="tab-pane fade in" id="summary">
                @include('projects.partials.summary')
            </div>
        </div>
    </div>
    </div>
@endsection

@section('footer')
    @include('layouts/partials/footer')
@endsection

@push('scripts')
<script>
    $(function() {
        $('#btnProfile').on('click', function(e) {
            e.preventDefault();
            alert('I caught that!');
            $('#projectTabs a[href = "#aircraft"]').tab('show')
        });
        $('#btnAircraft').on('click', function(e) {
            e.preventDefault();
            alert('I caught that from Aircraft!');
        });
    });
</script>
@endpush