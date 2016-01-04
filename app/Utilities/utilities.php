<?php

use App\Models\Message;
use App\Models\Notification;
use App\Models\ProjectPart;
use App\Models\Systemic;
use App\Models\Workticket;
use Illuminate\Support\Facades\Auth;

function flash($title = null, $message = null) {
    $flash = app('App\Http\Flash');

    if( func_num_args() == 0) {
        return $flash;
    }

    return $flash->info($title, $message);
}
function generateWorkTickets($pID)
{
    $ticks = ProjectPart::where('in_project', 1)->where('project_id', $pID)->get();

    foreach($ticks as $tick) {
        Workticket::create([
            'project_id' => $pID,
            'part_id' => $tick->part_listing_id,
            'scopestatus_id' => 1
        ]);
    } // end foreach

    return $pID;
}
function getCompanyActiveProjects($coID)
{
    $cntAP = DB::select(DB::raw("SELECT COUNT(*) AS count FROM projects WHERE company_id = {$coID} AND project_statuses_id != 1 AND project_statuses_id != 8"));

    if($cntAP) {
        return $cntAP;
    } else {
        return 0;
    }
}
function getCompanyCompletedProjects($coID)
{
    $cntAP = DB::select(DB::raw("SELECT COUNT(*) AS count FROM projects WHERE company_id = {$coID} AND project_statuses_id = 8"));

    if($cntAP) {
        return $cntAP;
    } else {
        return 0;
    }
}
function getCompanyPendingProjects($coID)
{
    $cntAP = DB::select(DB::raw("SELECT COUNT(*) AS count FROM projects WHERE company_id = {$coID} AND project_statuses_id = 1"));

    if($cntAP) {
        return $cntAP;
    } else {
        return 0;
    }
}
function logIt($msg)
{
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
function phone($data) {
    if(!$data) {return; }
    return "(".substr($data, 0, 3).") ".substr($data, 3, 3)."-".substr($data,6);
}