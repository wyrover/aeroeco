@extends('layouts/guest')

@section('title', 'Welcome to AeroEco')

@section('content')
    <div class="text-center">
        <h1>Welcome to the Aerospace Disassembly Consortium (ADC)</h1>
        <br>
        <div class="well" style="width: 40%; margin: 0 auto; text-align: left;">
             @if ($errors->any())
                  @include('errors.errors')
              @endif

             {!! Form::open(['url' => '/auth/register']) !!}
                 <input type="hidden" name="tier" value="{{ $tier }}">
                 <div>
                     First Name
                     <input type="text" class="form-control" name="firstname" value="{{ old('firstname') }}">
                 </div>

                 <div>
                     Last Name
                     <input type="text" class="form-control" name="lastname" value="{{ old('lastname') }}">
                 </div>

                 <div>
                     Email
                     <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                 </div>

                 <div>
                     Password
                     <input type="password" class="form-control" name="password">
                 </div>

                 <div>
                     Confirm Password
                     <input type="password" class="form-control" name="password_confirmation">
                 </div>

                 <div>
                     <input type="checkbox" class="form-control" name="can_sell">&nbsp;
                     <label class="checkbox-inline" style="margin-top: -55px;">
                         I am registering as an Asset Owner
                     </label>
                 </div>
                 <br><br>
                 <div class="text-right">
                     <button type="submit" class="btn btn-uam">Register</button>
                 </div>
             {!! Form::close() !!}
        </div>
    </div>
@endsection

@section('footer')
    @include('layouts/partials/footer')
@endsection
