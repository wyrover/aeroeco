@extends('layouts.guest')

@section('title', 'Welcome to AeroEco')

@section('content')
    <div class="text-center frmLogin">
        <h1>Welcome to the Aerospace Disassembly Consortium (ADC)</h1>
        <br><br>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                @if ($errors->any())
                    @include('errors.errors')
                @endif
            </div>
        </div>
            {!! Form::open(['url' => '/auth/login']) !!}
                <div class="col-md-4 col-md-offset-4 well">
                    <div class="row">
                        <label>Email Address</label>
                        <input type="email" class="form-control" placeholder="Email Address" name="email" value="{{ old('email') }}">
                        <br>
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password" id="password" name="password">
                    <span>
                        <label>
                            <input type="checkbox" name="remember"> Remember Me
                        </label>
                    </span>
                        <br>
                    <span>
                        <button type="submit" class="btn btn-uam">
                            Log In
                        </button>
                    </span>
                    </div>
                    <br>
                    <div class="row">
                        <span style="font-size: 0.75em;">
                        <a href="/password/email" class="naked_link">Forgot Password</a>
                    </span>
                        <br><br>
                    <span style="font-size: 0.75em;">
                        <a href="/auth/register/5" class="naked_link">Register for a free preview</a>
                    </span>
                </div>
            {!! Form::close() !!}
        </div>
        <div style="min-height: 68px;">&nbsp;</div>
    </div>
@endsection

@section('footer')
    @include('layouts/partials/footer')
@endsection