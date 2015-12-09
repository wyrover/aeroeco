<?php

use App\Models\Message;
use App\Models\Notification;
use App\Models\Systemic;
use Illuminate\Support\Facades\Auth;

function flash($title = null, $message = null) {
    $flash = app('App\Http\Flash');

    if( func_num_args() == 0) {
        return $flash;
    }

    return $flash->info($title, $message);
}
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
function tweet($userId, $msg) {
    if( !Auth::check() ) {
        //TODO: Handle Exception
    }
    $user = Auth::user();
    $ins = [
        'user_id' => $userId,
        'sender' => $user->firstname . ' ' . $user->lastname,
        'sender_email' => $user->email,
        'message' => $msg
    ];
    Message::create($ins);
    return true;
}
function notify($userId, $typeId, $message) {
    $ins = [
        'type_id' => $typeId,
        'user_id' => $userId,
        'message' => $message
    ];
    Notification::create($ins);
    return true;
}