@extends('layouts/guest')

@section('title', 'Password Reset')

@section('content')
    <div class="text-center">
        <h1>Reset Password</h1>
        <br>
        <div class="well" style="width: 60%; margin: 0 auto;">
             @if ($errors->any())
                  @include('errors.errors')
              @endif
              
             {!! Form::open(['url' => '/password/reset']) !!}

                 <label>Email Address</label>
                 <input type="email" class="form-control" placeholder="Email Address" name="email" value="{{ old('email') }}">
                 <br>

                 <label>Password</label>
                 <input type="password" class="form-control" placeholder="Password" id="password" name="password">
                 <br>

                 <label>Confirm Password</label>
                 <input type="password" class="form-control" placeholder="Confirm Password" id="password_confirmation" name="password_confirmation">
                 <br>

                 <div class="login-submit-area">
                     <p class="text-right" style="margin-top: -18px;">
                         <button type="submit" class="btn btn-uam">Reset Password</button>
                     </p>
                 </div>
              
              {!! Form::close() !!}
        </div>
    </div>

@endsection

@section('footer')
    @include('layouts/partials/footer')
@endsection