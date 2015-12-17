<div class="row">
    <div class="col-md-4">
        <label>Aircraft Type</label>
        <input type="text" class="form-control" name="type_id" placeholder="Aircraft Type" >
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
        <input type="text" class="form-control" class="owner" placeholder="Aircraft Owner" />
    </div>
    <div class="col-md-4">
        <label>Current or Last Operator</label>
        <input type="text" class="form-control" name="last_operator" placeholder="Current or last operator"/>
    </div>
    <div class="col-md-4">
        <label>Country of Origin</label>
        <select id="country_origin" class="form-control" name="country_id">
            <option value="184">United States of America</option>
        </select>
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
            Incidents:&nbsp;&nbsp;
            <input type="radio" name="has_incident" value="1">&nbsp; Yes
            &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="has_incident" value="0">&nbsp; No
        </label>
        <input type="file" class="form-control" name="path_nis">
    </div>
    <div class="col-md-4">
        <label>Upload an image of the aircraft.</label>
        <input type="file" class="form-control" name="path_plane_image">
    </div>
    <div class="col-md-4 text-right" style="padding-top: 30px;">
        {!! Form::submit('Continue', ['id' => 'btnAircraft', 'class' => 'btn btn-uam']) !!}
    </div>
</div>