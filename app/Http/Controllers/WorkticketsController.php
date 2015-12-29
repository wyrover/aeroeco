<?php

namespace App\Http\Controllers;

use App\Models\Workticket;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class WorkticketsController extends ApiController
{
    protected $records;

    public function __construct(Workticket $records)
    {
        $this->records = $records;
        $this->related = [];
    }

    public function index()
    {
        // show all
        $records = Workticket::with($this->related)->get();
        return $records;
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Workticket was deleted');
    }

    public function show($id)
    {
        //show single
        $record = Workticket::with($this->related)->findOrFail($id);
        return $record;
    }

    public function store()
    {
        // insert new
        $record = Workticket::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Workticket::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }

    public function listAll()
    {
        // show all
        $tickets = Workticket::with($this->related)->get();
        return view('tickets.list', compact('tickets'));
    }

    public function listOne($id)
    {
        //show single
        $ticket = Workticket::with($this->related)->findOrFail($id);
        return view('tickets.single', compact('ticket'));
    }
}
