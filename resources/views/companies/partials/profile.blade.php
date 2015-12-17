{!! Form::open([
    'url' => '/companies',
    'class' => 'form',
    'novalidate' => 'novalidate',
    'files' => 'true'
]) !!}
    @include('companies.partials.forms.profile')
{!! Form::close() !!}
<br><br>
