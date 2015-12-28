<div class="row">
    {!! Form::hidden('project_id', $project->id) !!}
    <div class="col-md-6">
        <label>Aircraft Type</label>
        <input type="text" id="aircraft_type" name="aircraft_type" class="form-control" placeholder="Aircraft Type" autocomplete="off" >
    </div>
    <div class="col-md-6">
        {!! Form::label('country_id', 'Country of Origin') !!}
        {!! Form::select('country_id', $countries, 184, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <label>Aircraft Owner</label>
        <input type="text" class="form-control" name="owner" placeholder="Aircraft Owner" />
    </div>
    <div class="col-md-6">
        <label>Current or Last Operator</label>
        <input type="text" class="form-control" name="last_operator" placeholder="Current or last operator"/>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <label>Manufacturer's Serial Number (MSN)</label>
        <input type="text" class="form-control" name="msn" placeholder="Manufacturer's Serial Number (MSN)"/>
    </div>
    <div class="col-md-6">
        <label>Registration / Tail Number</label>
        <input type="text" class="form-control" name="tail" placeholder="Registration / Tail Number"/>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        {!! Form::label('manufacturer', 'Aircraft Manufacturer') !!}
        <select name="manufacturer" class="form-control">
            <option value="">Please select ...</option>
            <option>Airbus</option>
            <option>Boeing</option>
        </select>
    </div>
    <div class="col-md-6">
        <label>Aircraft Model Year</label>
        <input type="number" class="form-control" name="model_year" placeholder="Aircraft Model Year">
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <label>Flight Hours</label>
        <input type="number" class="form-control" name="flight_hours" placeholder="Flight Hours">
    </div>
    <div class="col-md-6">
        <label>Cycles</label>
        <input type="number" class="form-control" name="cycles" placeholder="Cycles">
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <label>APU Stands Provided By:&nbsp;&nbsp;
            <select name="apu_stands_provider" class="form-control">
                <option value="ADC">ADC</option>
                <option value="owner">Owner</option>
            </select>
    </div>
    <div class="col-md-6">
        <label>Reverse Thruster Stands Provided By:&nbsp;&nbsp;
            <select name="reserse_thruster_stands_provider" class="form-control">
                <option value="ADC">ADC</option>
                <option value="owner">Owner</option>
            </select>
        </label>
    </div>
</div>
