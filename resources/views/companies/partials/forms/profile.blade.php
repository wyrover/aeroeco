<style>
    .mini-text.linker {
        color: #3b3b3b;
        text-decoration: none;
    }
</style>
<div class="class">
    <h3>Company Profile</h3>
</div>
<div class="row" style="margin-top: 20px;">
    {!! Form::hidden('company_id', $company->id) !!}
    <div class="col-md-6">
        {!! Form::label('company', 'Company Legal Name') !!}
        {!! Form::text('company', null, ['class' => 'form-control', 'placeholder' => 'Company Legal Name']) !!}
    </div>
    <div class="col-md-6">
        {!! Form::label('dba', 'Company DBA') !!}
        {!! Form::text('dba', null, ['class' => 'form-control', 'placeholder' => 'Company DBA']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        {!! Form::label('main_phone', 'Main Phone') !!}
        {!! Form::text('main_phone', null, ['class' => 'form-control', 'placeholder' => 'Main Phone', 'data-mask' => '+1 (999) 999.9999']) !!}
    </div>
    <div class="col-md-6">
        {!! Form::label('country_id', 'Country of Operation') !!}
        {!! Form::select('country_id', $countries, 184, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        {!! Form::label('corporation_type', 'State of Incorporation') !!}
        {!! Form::text('corporation_type', null, ['class' => 'form-control', 'placeholder' => 'State of Incorporation']) !!}
    </div>
    <div class="col-md-6">
        {!! Form::label('mail_domain', 'Company Mail Domain') !!}
        {!! Form::text('mail_domain', null, ['class' => 'form-control', 'placeholder' => 'Company Mail Domain']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        {!! Form::label('website', 'Company Website') !!}
        {!! Form::text('website', null, ['class' => 'form-control', 'placeholder' => 'Company Website']) !!}
    </div>
    <div class="col-md-6">
        <label>Custom URL&nbsp;&nbsp;(<a href="/instructions/custom_url" target="_blank"><span class="mini-text linker">Click for instructions</span></a>)</label>
        {!! Form::text('domain', null, ['class' => 'form-control', 'placeholder' => 'Custom URL']) !!}
    </div>
</div>
<div class="row">

    <div class="col-md-6">
        {!! Form::label('logo', 'Company Logo') !!}
        @if(file_exists(public_path("vault/{$company->folder_name}/logo.png")))
            <p class="instructions">
                Click image to replace.
            </p>
            <a href="#">
                {!! HTML::image("vault/{$company->folder_name}/logo.png") !!}
            </a>
        @else
            {!! Form::file('file', ['class' => 'form-control']) !!}
            <p class="instructions">
                Upload a .png file of 340px X 115px.
            </p>
        @endif
    </div>
</div>