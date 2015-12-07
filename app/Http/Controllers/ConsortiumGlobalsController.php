<?php

namespace App\Http\Controllers;

use App\Models\ConsortiumGlobal;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class ConsortiumGlobalsController extends ApiController
{
    protected $records;

    public function __construct(ConsortiumGlobal $records)
    {
        $this->records = $records;
        $this->related = [];
    }

    public function index()
    {
        // show all
        $records = ConsortiumGlobal::with($this->related)->get();
        return $records;
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('ConsortiumGlobal was deleted');
    }

    public function show($id)
    {
        //show single
        $record = ConsortiumGlobal::with($this->related)->findOrFail($id);
        return $record;
    }

    public function store()
    {
        // insert new
        $record = ConsortiumGlobal::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            ConsortiumGlobal::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }
}
