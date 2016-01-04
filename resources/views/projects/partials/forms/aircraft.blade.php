{!! Form::hidden('projectaircraft_id', $aircraft->id) !!}
{!! Form::hidden('project_id', $aircraft->project_id) !!}
<div class="row">
    <div class="col-md-6">
        {!! Form::label('type_id', 'Aircraft Type') !!}
        <input type="text" id="type_id" name="type_id" class="form-control" placeholder="Aircraft Type" value="{{getAircraft($aircraft->type_id)}}" autocomplete="off" >
    </div>
    <div class="col-md-6">
        {!! Form::label('country_id', 'Country of Origin') !!}
        {!! Form::select('country_id', $countries, 184, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        {!! Form::label('owner', 'Aircraft Owner') !!}
        {!! Form::text('owner', $aircraft->owner, ['class' => 'form-control', 'placeholder' => 'Aircraft Owner']) !!}
    </div>
    <div class="col-md-6">
        {!! Form::label('last_operator', 'Current or Last Operator') !!}
        {!! Form::text('last_operator', $aircraft->last_operator, ['class' => 'form-control', 'placeholder="Current or Last Operator']) !!}
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        {!! Form::label('msn', 'Manufacturer\'s Serial Number (MSN)') !!}
        {!! Form::text('msn', $aircraft->msn, ['class' => 'form-control', 'placeholder' => 'Manufacturer\'s Serial Number (MSN)']) !!}
    </div>
    <div class="col-md-6">
        {!! Form::label('tail', 'Registration / Tail Number') !!}
        {!! Form::text('tail', $aircraft->tail, ['class' => 'form-control', 'placeholder' => 'Registration / Tail Number']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        {!! Form::label('manufacturer', 'Aircraft Manufacturer') !!}
        {!! Form::select('manufacturer', $mfg , $aircraft->manufacturer, ['class' => 'form-control']) !!}
    </div>
    <div class="col-md-6">
        {!! Form::label('model_year', 'Aircraft Model Year') !!}
        {!! Form::text('model_year', $aircraft->model_year, ['class' => 'form-control', 'placeholder' => 'Aircraft Model Year']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        {!! Form::label('flight_hours', 'Flight Hours') !!}
        {!! Form::text('flight_hours', $aircraft->flight_hours, ['class' => 'form-control', 'placeholder' => 'Flight Hours']) !!}
    </div>
    <div class="col-md-6">
        {!! Form::label('cycles', 'Cycles') !!}
        {!! Form::text('cycles', $aircraft->cycles, ['class' => 'form-control', 'placeholder' => 'Cycles']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        {!! Form::label('apu_stands_provider', 'APU Stands Provided By:&nbsp;&nbsp;') !!}
        {!! Form::select('apu_stands_provider', $provider , $aircraft->apu_stands_provider, ['class' => 'form-control']) !!}
    </div>
    <div class="col-md-6">
        {!! Form::label('reverse_thruster_stands_provider', 'Reverse Thruster Stands Provided By:&nbsp;&nbsp;') !!}
        {!! Form::select('reverse_thruster_stands_provider', $provider, $aircraft->reverse_thruster_stands_provider, ['class' => 'form-control']) !!}
    </div>
</div>
