@extends('layouts.sandbox')

@section('title', 'Tester')

@section('content')
    <div style="width: 400px; margin: 0 auto;">
        <notificator></notificator>
    </div>

    <div style="width: 400px; margin: 0 auto; display:none;">
        <alert type="alert">
            <strong>General!</strong> Your account needs to be updated!
        </alert>
        <alert type="success">
            <strong>Success!</strong> Your account has been updated!
        </alert>
        <alert type="error">
            <strong>Failure!</strong> Your account has not been updated!
        </alert>
        <alert type="success">
            <strong>General!</strong> Vue is pretty cool!
        </alert>
    </div>
@endsection

