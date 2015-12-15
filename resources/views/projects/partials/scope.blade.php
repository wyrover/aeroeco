<style>
    input[type=checkbox] {display: inline;}
</style>
<form>
    <div class="row">
        <div class="col-md-6">
            <label>Upload Parts Listing (OCCM)</label>
            <input type="file" class="form-control"  />
        </div>
        <div class="col-md-6">&nbsp;</div>
    </div>
    <div class="row">
        <table class="table table-striped table-condensed">
            <tr>
                <th>&nbsp;</th>
                <th>Part #</th>
                <th>Description</th>
                <th>Serial Number (SN)</th>
                <th>Condition</th>
                <th>Mkt History: Low/Hi</th>
                <th>Mkt History: Qty</th>
            </tr>
            <tr ng-repeat="_ in ((_ = []) && (_.length=12) && _) track by $index">
                <td>
                    <input type="checkbox">
                </td>
                <td>
                    <input type="text" class="form-control">
                </td>
                <td>
                    <input type="text" class="form-control">
                </td>
                <td>
                    <input type="text" class="form-control">
                </td>
                <td>
                    <select class="form-control">
                        <option>AR</option>
                    </select>
                </td>
                <td class="text-center mini-text">
                    Subscription<br>Required
                </td>
                <td class="text-center mini-text">
                    Subscription<br>Required
                </td>
            </tr>
        </table>
    </div>
    <div class="row">
        <div class="col-md-12" style="text-align: right;">
            <button ng-click="vm.moveToSummary()" class="btn btn-uam">Continue</button>
        </div>
    </div>
</form>