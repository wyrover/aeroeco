<?php

use App\Models\Systemic;
use Illuminate\Support\Facades\Auth;

function logIt($msg) {
    if( !Auth::check() ) {
        //TODO: Handle Exception
    }

    $user = Auth::user();

    $ins = [
        'user_id' => $user->id,
        'event' => 'User ' . $user->email . ' ' . $msg
    ];
    Systemic::create($ins);

    return true;
}