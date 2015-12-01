<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class ProjectsController extends ApiController
{
    protected $records;

    public function __construct(Project $records)
    {
        $this->middleware('auth');
        $this->records = $records;
    }

    public function index()
    {
        // show all
        $records = Project::all();
        return $records;
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Project was deleted');
    }

    public function show($id)
    {
        //show single
        $record = $this->records->findOrFail($id);
        return $record;
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store()
    {
        // insert new
        $record = Project::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);
        
        if(! $record){
            Project::create(Input::all());
            return $this->respond($record);
        }
        
        $record->fill(Input::all())->save();
        return $this->respond($record);
    }
}
