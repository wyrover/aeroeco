<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class MessagesController extends ApiController
{
    protected $records;

    public function __construct(Message $records)
    {
        $this->records = $records;
        $this->related = [];
    }

    public function index()
    {
        // show all
        $records = Message::with($this->related)->get();
        foreach($records as $record) {
            $record['gravatar'] = md5(strtolower(trim($record->sender_email)));
            $record['brief'] = str_limit($record['message'], 90);
        }
        return $records;
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Message was deleted');
    }

    public function show($id)
    {
        //show single
        $record = Message::with($this->related)->findOrFail($id);
        $record['gravatar'] = md5(strtolower(trim($record->sender_email)));
        return $record;
    }

    public function store()
    {
        // insert new
        $record = Message::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Message::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }

    public function myMessages()
    {
        $user = Auth::user();
        $messages = Message::with($this->related)->where('user_id', Auth::id())->get();
        foreach($messages as $message) {
            $message['gravatar'] = md5(strtolower(trim($message->sender_email)));
        }
        return view('pages.allmessages', compact('messages'));
    }
}
