<?php

namespace App\Http\Controllers;

use App\Models\Tech;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class TechsController extends ApiController
{
    protected $records;

    public function __construct(Tech $records)
    {
        $this->records = $records;
        $this->related = ['user'];
    }

    public function index()
    {
        // show all
        $records = Tech::with($this->related)->get();
        return $records;
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Tech was deleted');
    }

    public function show($id)
    {
        //show single
        $record = Tech::with($this->related)->findOrFail($id);
        return $record;
    }

    public function store()
    {
        // insert new
        $record = Tech::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Tech::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }
}
