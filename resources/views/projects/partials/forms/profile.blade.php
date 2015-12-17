<div class="row">
    {!! Form::label('project_type_id', 'Project Type') !!}
    {!! Form::select('project_type_id', $types, null, ['class' => 'form-control']) !!}
</div>
<div class="row">
    <label>Upload Inventory Listing (if available)</label>
    <input type="file" class="form-control"  />
</div>
<div class="row">
    {!! Form::label('disassemblers_id', 'Disassembly Location') !!}
    {!! Form::select('disassemblers_id', $disassemblers, null, ['class' => 'form-control']) !!}
</div>
<div class="row">
    {!! Form::label('asset_arrival_date', 'Asset Arrival Date') !!}
    {!! Form::date('asset_arrival_date', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
</div>