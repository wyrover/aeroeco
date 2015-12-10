<?php

namespace App\Http\Controllers;

use App\Models\ProjectStatus;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class ProjectStatusesController extends ApiController
{
    protected $records;

    public function __construct(ProjectStatus $records)
    {
        $this->records = $records;
        $this->related = [];
    }

    public function index()
    {
        // show all
        $records = ProjectStatus::with($this->related)->get();
        return $records;
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('ProjectStatus was deleted');
    }

    public function show($id)
    {
        //show single
        $record = ProjectStatus::with($this->related)->findOrFail($id);
        return $record;
    }

    public function store()
    {
        // insert new
        $record = ProjectStatus::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            ProjectStatus::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }
}
