<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class RolesController extends ApiController
{
    protected $records;

    public function __construct(Role $records)
    {
        $this->records = $records;
    }

    public function index()
    {
        // show all
        $records = Role::all();
        return $records;
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Role was deleted');
    }

    public function show($id)
    {
        //show single
        $record = $this->records->findOrFail($id);
        return $record;
    }

    public function store()
    {
        // insert new
        $record = Role::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Role::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }
}
