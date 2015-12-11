<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class UsersController extends ApiController
{
    protected $records;

    public function __construct(User $records)
    {
        $this->records = $records;
        $this->related = ['company.contacts.type', 'notifications.type'];
    }

    public function index()
    {
        // show all
        $records = User::with($this->related)->get();
        return $records;
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('User was deleted');
    }

    public function show($id)
    {
        //show single
        $record = User::with($this->related)->findOrFail($id);
        return $record;
    }

    public function store()
    {
        // insert new
        $record = User::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            User::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }

    public function profile()
    {
        return view('user.profile');
    }

    public function preferences()
    {
        return view('user.preferences');
    }
}
