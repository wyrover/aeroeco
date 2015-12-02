@extends('layouts/guest')

@section('title', 'Create Company Profile')

@section('body_class', 'companies')

@section('content')
    <div style="margin-top: 10px;">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#company" aria-controls="company" role="tab" data-toggle="tab">PROFILE</a></li>
            <li role="presentation"><a href="#roles" aria-controls="roles" role="tab" data-toggle="tab">ROLES</a></li>
            <li role="presentation"><a href="#users" aria-controls="users" role="tab" data-toggle="tab">USERS</a></li>
            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">MESSAGES</a></li>
            <li role="presentation"><a href="#emails" aria-controls="emails" role="tab" data-toggle="tab">EMAILS</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="company">
                @include('companies.partials.profile')
            </div>
            <div role="tabpanel" class="tab-pane fade" id="roles">
                @include('companies.partials.roles')
            </div>
            <div role="tabpanel" class="tab-pane fade" id="users">
                @include('companies.partials.users')
            </div>
            <div role="tabpanel" class="tab-pane fade" id="messages">
                @include('companies.partials.messages')
            </div>
            <div role="tabpanel" class="tab-pane fade" id="emails">
                @include('companies.partials.emails')
            </div>
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