@extends('layouts.logged')

@section('title', 'AeroEco')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h3>
                Work Scope for {{$tickets[0]->project->aircraft->type->model}} [Tail: {{$tickets[0]->project->aircraft->tail}} ]
            </h3>        </div>
        <div class="col-md-6">
            <h3 class="pull-right">
                Arrival: {{$tickets[0]->project->asset_arrival_date->format('Y-m-d')}}
            </h3>
        </div>
    </div>

    {!! Form::open() !!}
    <table class="table table-striped table-condensed">
        <tr>
            <th>ATA</th>
            <th>Part#</th>
            <th>Description</th>
            <th>Assigned To</th>
        </tr>
        @forelse($tickets as $ticket)
            <tr>
                <td>
                    {{$ticket->part->atas->chapter}}: {{$ticket->part->atas->title}}
                </td>
                <td>
                    {{$ticket->part->base_part_number}}
                </td>
                <td>
                    {{ucwords($ticket->part->description)}}
                </td>
                <td>
                    {!! Form::select('tech_id', $techsDD , null , ['class' => 'form-control']) !!}
                </td>
            </tr>
        @empty
            <tr>
                <td><strong>No Work Tickets Found</strong></td>
            </tr>
        @endforelse
    </table>
    {!! Form::close() !!}
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