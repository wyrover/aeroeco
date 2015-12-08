<div class="row">
    <table class="table table-striped table-condensed">
        <tr>
            <th>Position</th>
            <th>Engine Type / Variant</th>
            <th>Engine Serial Number (SSN)</th>
            <th>Engine Trace</th>
            <th>&nbsp;</th>
        </tr>
        <tr>
            <td>P1</td>
            <td>
                <input type="text" class="form-control">
            </td>
            <td>
                <input type="text" class="form-control">
            </td>
            <td>
                <input type="file" class="form-control">
            </td>
        </tr>
        <tr>
            <td>P2</td>
            <td>
                <input type="text" class="form-control">
            </td>
            <td>
                <input type="text" class="form-control">
            </td>
            <td>
                <input type="file" class="form-control">
            </td>
        </tr>
        <tr>
            <td colspan="5">
                <button class="btn btn-warning btn-sm">Add another engine</button>
            </td>
        </tr>
    </table>
</div>
<div class="row">
    <div class="col-md-12" style="text-align: right;">
        <button ng-click="vm.moveToParts()" class="btn btn-uam">Continue</button>
    </div>
</div>