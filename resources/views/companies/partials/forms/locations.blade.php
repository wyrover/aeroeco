<div class="row">
    <h3>Company Locations</h3>
</div>
<div class="row" style="margin-top: 20px;">
    <table class="table table-striped rowed table-condensed disp-sm">
        <tr>
            <th>Name</th>
            <th>Address</th>
            <th>Address2</th>
            <th>Phone</th>
        </tr>
        @forelse($company->locations as $loc)
            <tr>
                <td>{{$loc->location}}</td>
                <td>{{$loc->address}}</td>
                <td>{{$loc->address2}}</td>
                <td>{{phone($loc->phone)}}</td>
            </tr>
        @empty
            <tr>
                <td colspan="4">No locations found.</td>
            </tr>
        @endforelse
    </table>
</div>
<br><br>
<div class="row">
    <div class="col-md-6">
        <a href="/add_location/{{$company->id}}" class="btn btn-default">
            <i class="fa fa-plus-circle"></i>&nbsp;
            Add another location
        </a>
    </div>
    <div class="col-md-6">
        <button class="btn btn-uam pull-right">Continue</button>
    </div>
</div>