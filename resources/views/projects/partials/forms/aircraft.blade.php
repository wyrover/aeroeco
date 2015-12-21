<div class="row">
    {!! Form::hidden('project_id', $project->id) !!}
    <div class="col-md-4">
        <label>Aircraft Type</label>
        <input type="text" id="aircraft_type" name="aircraft_type" class="form-control" placeholder="Aircraft Type" autocomplete="off" >
    </div>
    <div class="col-md-4">
        <label>Manufacturer's Serial Number (MSN)</label>
        <input type="text" class="form-control" name="msn" placeholder="Manufacturer's Serial Number (MSN)"/>
    </div>
    <div class="col-md-4">
        <label>Registration / Tail Number</label>
        <input type="text" class="form-control" name="tail" placeholder="Registration / Tail Number"/>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <label>Aircraft Owner</label>
        <input type="text" class="form-control" name="owner" placeholder="Aircraft Owner" />
    </div>
    <div class="col-md-4">
        <label>Current or Last Operator</label>
        <input type="text" class="form-control" name="last_operator" placeholder="Current or last operator"/>
    </div>
    <div class="col-md-4">
        {!! Form::label('country_id', 'Country of Origin') !!}
        {!! Form::select('animal', $countries, 184, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <label>Aircraft Model Year</label>
        <input type="number" class="form-control" name="model_year" placeholder="Aircraft Model Year">
    </div>
    <div class="col-md-4">
        <label>Flight Hours</label>
        <input type="number" class="form-control" name="flight_hours" placeholder="Flight Hours">
    </div>
    <div class="col-md-4">
        <label>Cycles</label>
        <input type="number" class="form-control" name="cycles" placeholder="Cycles">
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <label>APU Stands Provided By:&nbsp;&nbsp;
            <select name="apu_stands_provider" class="form-control">
                <option value="ADC">ADC</option>
                <option value="owner">Owner</option>
            </select>
    </div>
    <div class="col-md-4">

        <label>Landing Gear Stands Provided By:
            <select name="landing_gear_stands_provider" class="form-control">
                <option value="ADC">ADC</option>
                <option value="owner">Owner</option>
            </select>
        </label>
    </div>
    <div class="col-md-4">
        <label>Reverse Thruster Stands Provided By:&nbsp;&nbsp;
            <select name="reserse_thruster_stands_provider" class="form-control">
                <option value="ADC">ADC</option>
                <option value="owner">Owner</option>
            </select>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-md-4">
        <label>Proof of Ownership</label>
        <input type="file" class="form-control" name="path_proof_ownership">
    </div>
    <div class="col-md-4">
        <label>Proof of Insurance</label>
        <input type="file" class="form-control" name="path_proof_insurance">
    </div>
    <div class="col-md-4">
        <label>Aircraft Trace</label>
        <input type="file" class="form-control" name="path_trace">
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <label>Denied Party Clearance</label>
        <input type="file" class="form-control" name="path_denied_party">
    </div>
    <div class="col-md-4">
        <label>Aircraft Maintenance Manual (AMM)</label>
        <input type="file" class="form-control" name="path_amm">
    </div>
    <div class="col-md-4">
        <label>Illustrated Parts Catalog (IPC)</label>
        <input type="file" class="form-control" name="path_ipc">
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <label>
            Non-Incident Statement (NIS)
            &nbsp;&nbsp;-&nbsp;&nbsp;
            <input type="checkbox" name="has_incident" value="true">&nbsp; Incident(s) Recorded
        </label>
        <input type="file" class="form-control" name="path_nis">
    </div>
    <div class="col-md-4">
        <label>Upload an image of the aircraft.</label>
        <input type="file" class="form-control" name="path_plane_image">
    </div>
</div>