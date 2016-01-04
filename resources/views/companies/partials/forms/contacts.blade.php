<div class="row">
    <h3>Company Contacts</h3>
</div>
<div class="row" style="margin-top: 20px;">
    <table class="table table-striped rowed table-condensed disp-sm" style="width:90%; margin: 0 auto;">
        <tr>
            <th>Contact Type</th>
            <th>Contact Name</th>
            <th>Title</th>
            <th>Phone</th>
            <th>Fax</th>
            <th style="width:40px;">&nbsp;</th>
        </tr>
        @foreach($company->contacts as $con)
            <tr>
                <td>
                    {{$con->type->type}}
                </td>
                <td>
                    {!! Form::text('name', $con->name, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
                </td>
                <td>
                    {!! Form::text('title', $con->title, ['class' => 'form-control', 'placeholder' => 'Title']) !!}
                </td>
                <td>
                    {!! Form::text('phone', $con->phone, ['class' => 'form-control', 'placeholder' => 'Phone', 'data-mask' => "(999) 999-9999"]) !!}
                </td>
                <td>
                    {!! Form::text('fax', $con->fax, ['class' => 'form-control', 'placeholder' => 'Fax', 'data-mask' => "(999) 999-9999"]) !!}
                </td>
                <td>
                    <i class="fa fa-floppy-o icon"
                       style="color:#090;"></i>
                </td>
            </tr>
        @endforeach
    </table>
</div>
<div class="row">
    <div class="col-md-6">&nbsp;</div>
    <div class="col-md-6">
        <button class="btn btn-uam pull-right">Continue</button>
    </div>
</div>
<br><br>