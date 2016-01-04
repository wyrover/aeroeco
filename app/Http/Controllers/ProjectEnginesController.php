<?php

namespace App\Http\Controllers;

use App\Models\ProjectApu;
use App\Models\ProjectEngine;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProjectEnginesController extends Controller
{
    public function apuByProject($id)
    {
        return ProjectApu::where('project_id', $id)->first();
    } // end apuByProject function
    public function listByProject($id)
    {
        return ProjectEngine::where('project_id', $id)->get();
    } // end listByProject function
}
