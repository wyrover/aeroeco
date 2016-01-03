<?php

namespace App\Http\Controllers;

use App\Models\ProjectPart;
use App\Models\Workscope;
use App\Models\Workticket;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class WorkscopesController extends ApiController
{
    protected $records;

    public function __construct(Workscope $records)
    {
        $this->records = $records;
        $this->related = [];
    }

    public function index()
    {
        // show all
        $records = Workscope::with($this->related)->get();
        return $records;
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Workscope was deleted');
    }

    public function show($id)
    {
        //show single
        $record = Workscope::with($this->related)->findOrFail($id);
        return $record;
    }

    public function store()
    {
        // insert new
        $record = Workscope::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Workscope::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }

    public function listAll()
    {
        // show all
        $scopes = Workscope::with($this->related)->get();
        return view('workscopes.list', compact('scopes'));
    }

    public function listOne($id)
    {
        //show single
        $scope = Workscope::with($this->related)->findOrFail($id);
        return view('workscopes.single', compact('scope'));
    }

    public function listByProject($projectID)
    {
        $tickets = [];
        return view('tickets.list', compact('tickets'));
    } // end listByProject function
    
}
