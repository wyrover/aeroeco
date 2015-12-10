<div class="col-md-4 col-md-offset-4" style="margin-top:20px;">
    {!! Form::open(['route' => 'project_store']) !!}
    {!! Form::hidden('creator_id', $user->id) !!}
    <div class="row">
        {!! Form::label('project_type_id', 'Project Type') !!}
        {!! Form::select('project_type_id', $types, null, ['class' => 'form-control']) !!}
    </div>
    <div class="row">
        {!! Form::label('disassemblers_id', 'Disassembly Location') !!}
        {!! Form::select('disassemblers_id', $disassemblers, null, ['class' => 'form-control']) !!}
    </div>
    <div class="row">
        {!! Form::label('asset_arrival_date', 'Asset Arrival Date') !!}
        {!! Form::date('asset_arrival_date', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
    </div>
    <div class="row text-right" style="margin-top:20px;">
        {!! Form::submit('Continue', ['id' => 'btnProfile', 'class' => 'btn btn-uam']) !!}
    </div>
    {!! Form::close() !!}
</div>
