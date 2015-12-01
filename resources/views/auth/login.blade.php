@extends('layouts.guest')

@section('title', 'Welcome to AeroEco')

@section('content')
    <div class="text-center frmLogin">
        <h1>Welcome to the Aerospace Disassembly Consortium (ADC)</h1>
        <br><br>
        <div class="well" style="width: 20%; margin: 0 auto;">
            @if ($errors->any())
                @include('errors.errors')
            @endif
            {!! Form::open(['url' => '/auth/login']) !!}
                <label>Email Address</label>
                <input type="email" class="form-control" placeholder="Email Address" name="email" value="{{ old('email') }}">
                <br>
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Password" id="password" name="password">
                <br>
                <div class="login-submit-area">
                    <div class="login-remember">
                        <label>
                            <input type="checkbox" name="remember"> Remember Me
                        </label>
                    </div>
                    <div class="login-submit">
                        <p class="text-right" style="margin-top: -18px;">
                            <button type="submit" class="btn btn-uam">Log In</button>
                        </p>
                    </div>
                </div>
                <br>
                <div>
                    <p style="font-size: 0.75em;">
                        <a href="/password/email" class="naked_link">Forgot Password</a>
                    </p>
                </div>
                <div>
                    <p style="font-size: 0.75em;">
                        <a href="/auth/register" class="naked_link">Register for a free preview</a>
                    </p>
                </div>
            {!! Form::close() !!}
        </div>
        <div style="min-height: 68px;">&nbsp;</div>
    </div>
@endsection

@section('footer')
    @include('layouts/partials/footer')
@endsection