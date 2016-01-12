<br><br>
<div class="row">
    <div class="col-md-4">
        <dl>
            <dt>Company</dt>
            <dd>{{$project->company->company}}</dd>
        </dl>
    </div>
    <div class="col-md-4">
        <dl>
            <dt>Asset</dt>
            <dd>{{$project->aircraft->type->model}} :: {{$project->aircraft->tail}}</dd>
        </dl>
    </div>
    <div class="col-md-4">
        <dl>
            <dt>Project Start</dt>
            <dd>{{$project->project_start_date->toFormattedDateString()}}</dd>
        </dl>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <dl>
            <dt>Contact</dt>
            <dd>{{$project->creator->firstname}}&nbsp;{{$project->creator->lastname}}</dd>
        </dl>
    </div>
    <div class="col-md-4">
        <dl>
            <dt>ADC Contact</dt>
            <dd>{{$project->sales->firstname}}&nbsp;{{$project->sales->lastname}}</dd>
        </dl>
    </div>
    <div class="col-md-4">
        <dl>
            <dt>Asset Arrival</dt>
            <dd>{{$project->asset_arrival_date->toFormattedDateString()}}</dd>
        </dl>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <dl>
            <dt>Last Operator</dt>
            <dd>{{$project->aircraft->last_operator}}</dd>
        </dl>
    </div>
    <div class="col-md-4">
        <dl>
            <dt>Worksite</dt>
            <dd>{{$project->disassembler->name}}</dd>
        </dl>
    </div>
    <div class="col-md-4">
        <dl>
            <dt>Disassembly Arrival</dt>
            <dd>{{$project->asset_arrival_date->toFormattedDateString()}}</dd>
        </dl>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <dl>
            <dt>Owner</dt>
            <dd>{{$project->aircraft->owner}}</dd>
        </dl>
    </div>
    <div class="col-md-4">
        <dl>
            <dt>Flight Hours</dt>
            <dd>{{$project->aircraft->flight_hours}}</dd>
        </dl>
    </div>
    <div class="col-md-4">
        <dl>
            <dt>Cycles</dt>
            <dd>{{$project->aircraft->cycles}}</dd>
        </dl>
    </div>
</div>


