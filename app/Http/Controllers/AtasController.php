<?php

namespace App\Http\Controllers;

use App\Models\Ata;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class AtasController extends ApiController
{
    protected $records;

    public function __construct(Ata $records)
    {
        $this->records = $records;
    }

    public function index()
    {
        // show all
        $records = Ata::all();
        return $records;
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Ata was deleted');
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
        $record = Ata::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Ata::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }
}
