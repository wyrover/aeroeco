@extends('layouts/logged')

@section('title', 'AeroEco:: Message Center')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <h3><i class="fa fa-inbox"></i>&nbsp;Inbox</h3>
        </div>
        <div class="col-md-2">&nbsp;</div>
        <div class="col-md-6" style="padding-top: 15px !important;">
            <div class="btn-group pull-right" role="group">
                <button type="button" class="btn btn-default">
                    Compose
                </button>
                <button type="button" class="btn btn-default">
                    Reply
                </button>
                <button type="button" class="btn btn-default">
                    Reply All
                </button>
                <button type="button" class="btn btn-default">
                    Forward
                </button>
                <button type="button" class="btn btn-default">
                    Delete
                </button>
            </div>
        </div>
    </div>
    <br>
    <table class="table table-striped table-condensed table-bordered">
        <tr>
            <th style="width:15%;">From</th>
            <th style="width:65%;">Message</th>
            <th style="width:20%;">Sent</th>
        </tr>
        @foreach($messages as $msg)
            <tr>
                <td>
                    @if($msg->status == 'pending')
                        <span style="color:#e84e40;"><strong>
                    @endif
                    <input type="checkbox">&nbsp;
                    {{$msg->sender}}
                    @if($msg->status == 'pending')
                        </strong></span>
                    @endif
                </td>
                <td>{{$msg->message}}</td>
                <td>{{$msg->created_at->toDayDateTimeString()}}</td>
            </tr>
        @endforeach
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