<div class="row">
    <table class="table table-striped table-condensed">
        <tr>
            <th>&nbsp;</th>
            <th>Part #</th>
            <th>Description</th>
            <th>Serial Number (SSN)</th>
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
