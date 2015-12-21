<div class="row">
    <table class="table table-striped table-condensed">
        <tr>
            <th style="width:5%;">Pos</th>
            <th style="width:15%;">Engine Type / Variant</th>
            <th style="width:15%;">Engine Serial Number (SSN)</th>
            <th style="width:12%;">Engine Stands</th>
            <th style="width:28%;">Engine Trace</th>
            <th style="width:15%;">Add-Ons</th>
        </tr>
        <tr>
            <td style="vertical-align:middle;">P1</td>
            <td style="vertical-align:middle;">
                <input type="text" class="form-control">
            </td>
            <td style="vertical-align:middle;">
                <input type="text" class="form-control">
            </td>
            <td style="vertical-align:middle;">
                <select name="stand_provider" class="form-control">
                    <option value="ADC">ADC</option>
                    <option value="owner">Owner</option>
                </select>
            </td>
            <td style="vertical-align:middle;">
                <input type="file" class="form-control">
            </td>
            <td style="vertical-align:middle;">
                <input type="checkbox"> MPA
                <br>
                <input type="checkbox"> Boromoter
                <br>
                <input type="checkbox"> Storage Program
            </td>
        </tr>
        <tr>
            <td colspan="6">
                <button class="btn btn-warning btn-sm">Add another engine</button>
            </td>
        </tr>
    </table>
</div>