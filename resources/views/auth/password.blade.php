@extends('layouts/guest')

@section('content')

    <div class="text-center">
        <h1>Reset Password</h1>

        <div class="well" style="width: 60%; margin: 0 auto;">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            @if ($errors->any())
                @include('errors.errors')
            @endif

            @if (!session('status'))

                    {!! Form::open(['url' => '/password/email', 'class' => 'form-horizontal']) !!}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                        <label class="col-md-4 control-label">E-Mail Address</label>
                        <div class="col-md-6">
                            <input type="email" class="form-control" name="email" autocomplete="off" value="{{ old('email') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-uam">
                                Send Password Reset Link
                            </button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                @endif
        </div>
    </div>

@endsection