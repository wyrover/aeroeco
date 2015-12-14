@extends('layouts/logged')

@section('title', 'AeroEco:: Message Center')

@section('content')
    <h3><i class="fa fa-inbox"></i>&nbsp;Inbox</h3>
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