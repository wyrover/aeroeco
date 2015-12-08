<div id="aircraft">
    <div class="row">
        <div class="col-md-4">
            <label>Aircraft Type</label>
            <input type="text" class="form-control" placeholder="Aircraft Type"  ng-model="aircraft_type" uib-typeahead="m.model for m in vm.mocks | filter:$viewValue | limitTo:8">
        </div>
        <div class="col-md-4">
            <label>Manufacturer's Serial Number (MSN)</label>
            <input type="text" class="form-control" placeholder="Manufacturer's Serial Number (MSN)"/>
        </div>
        <div class="col-md-4">
            <label>Registration / Tail Number</label>
            <input type="text" class="form-control" placeholder="Registration / Tail Number"/>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <label>Aircraft Owner</label>
            <input type="text" class="form-control" placeholder="Aircraft Owner" />
        </div>
        <div class="col-md-4">
            <label>Current or Last Operator</label>
            <input type="text" class="form-control" placeholder="Current or last operator"/>
        </div>
        <div class="col-md-4">
            <label>Country of Origin</label>
            <select name="country_origin" class="form-control">
                <option value="184">United States of America</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <label>Proof of Ownership</label>
            <input type="file" class="form-control">
        </div>
        <div class="col-md-4">
            <label>Non-Incident Statement (NIS)</label>
            <input type="file" class="form-control">
        </div>
        <div class="col-md-4">
            <label>Aircraft Trace</label>
            <input type="file" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <label>Proof of Insurance</label>
            <input type="file" class="form-control">
        </div>
        <div class="col-md-4">
            <label>Aircraft Maintenance Manual (AMM)</label>
            <input type="file" class="form-control">
        </div>
        <div class="col-md-4">
            <label>Illustrated Parts Catalog (IPC)</label>
            <input type="file" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label>Upload an image of the aircraft.</label>
            <input type="file" class="form-control">
        </div>
        <div class="col-md-6">&nbsp;</div>
    </div>
    <div class="row">
        <div class="col-md-12" style="text-align: right;">
            <button ng-click="vm.moveToEngines()" class="btn btn-uam">Continue</button>
        </div>
    </div>
</div>