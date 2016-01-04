<?php

namespace App\Http\Controllers;

use App\Models\Aircraft;
use App\Models\AircraftPart;
use App\Models\Ata;
use App\Models\Company;
use App\Models\ConsortiumGlobal;
use App\Models\Contracttopic;
use App\Models\Country;
use App\Models\Disassembler;
use App\Models\Project;
use App\Models\ProjectAircraft;
use App\Models\ProjectEngine;
use App\Models\ProjectPart;
use App\Models\ProjectType;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class ProjectsController extends ApiController
{
    protected $records;

    public function __construct(Project $records)
    {
        $this->middleware('auth');
        $this->records = $records;
        $this->related = ['aircraft.country', 'aircraft.type', 'company.addresses', 'creator', 'disassembler.country', 'engines', 'parts', 'project_type', 'sales.manager', 'status', 'worksite', 'worktickets'];
    }

    public function index()
    {
        // show all
        $records = Project::with($this->related)->get();
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
        $record = Project::with($this->related)->findOrFail($id);
        return $record;
    }

    public function storeAircraft()
    {
        return 'Gotcha';
    } // end storeAircraft function

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

    public function listAll()
    {
        // show all
        $user = Auth::user();
        if($user->all_companies) {
            $projects = Project::with($this->related)->get();
        } else {
            $projects = Project::with($this->related)
                ->where('company_id', $user->company_id)
                ->all();
        }

        return view('projects.list', compact('projects'));
    }

    public function listOne($id)
    {
        //show single
        $project = Project::with($this->related)->findOrFail($id);
        return view('projects.single', compact('project'));
    }

    public function delete($id)
    {
        $project = Project::with($this->related)->findOrFail($id);
        return $project;
    } // end delete function

    public function contract_gta($id) {
        $conType = "General Terms Agreement";
        $topics = Contracttopic::where('contract_type_id', 1)
            ->orderBy('sort_order')
            ->get();

        $project = Project::with($this->related)
            ->where('id', $id)
            ->first();
        $company = $project->company;

        $adc = ConsortiumGlobal::where('id', '1')->first();
        //return $project;

        return view('contracts.contract', compact('conType', 'topics', 'project', 'company', 'adc'));
    }

    public function contract_parts($id)
    {
        $conType = "General Terms Agreement";
        $atas = Ata::where('active', 1)
            ->get();

        $project = Project::where('id', $id)->first();
        $company = $project->company;

        $adc = ConsortiumGlobal::where('id', '1')->first();
        return view('workscopes.listing', compact('conType', 'atas', 'company', 'project', 'adc'));
    } // end contract_parts function

    public function profile($id = null)
    {
        $adc = ConsortiumGlobal::where('id', '1')->first();
        $atas = Ata::where('active', 1)->get();
        $disassemblers = Disassembler::lists('name', 'id');
        $user = Auth::user();
        $types = ProjectType::lists('type', 'id');
        $company = Company::where('id', $user->company_id)->first();

        if($id) {
            $project = Project::find($id);
        } else {
            $project = Project::create([
                'creator_id' => $user->id,
                'company_id' => $user->company_id,
                'directory_path' => $company->company . '/' . date('Y') . '/'
            ]);
        }

        return view('projects.profile', compact('adc', 'atas', 'company', 'disassemblers', 'project', 'types', 'user'));
    }

    public function update_profile(Request $request)
    {
        $company = Company::find(Auth::user()->company_id);
        $ins = array_add($request, 'company_id', Auth::user()->company_id);
        $ins = array_add($ins, 'directory_path', $company->company . '/' . date("Y") . '/');
        //TODO: add projected_completion_date

        $project = Project::findOrFail($request->get('project_id'));
        $project->fill($ins->all())->save();
        //return $project;

        $request->session()->put('project', $project);
        //dd($project);
        return redirect()->action('ProjectsController@aircraft', ['project' => $project]);
    }

    public function aircraft($id)
    {
        $aircraft = ProjectAircraft::where('project_id', $id)->first();
        $countries = Country::lists('country', 'id');
        $mfg = ['Boeing' => 'Boeing', 'Airbus' => 'Airbus'];
        $provider = ['ADC' => 'ADC', 'Owner' => 'Owner'];

        return view('projects.aircraft', compact('aircraft', 'countries', 'mfg', 'provider'));
    } // end aircraft function

    public function update_aircraft(Request $request)
    {
        $id = Input::get('projectaircraft_id');
        $craft_type_id = Aircraft::where('model', $request->input('type_id'))->pluck('id');
        Input::merge(['type_id' => $craft_type_id]);

        $ace = ProjectEngine::where('project_id', $id)->count();

        if((int)$ace == 0) {
            $cntEngines = Aircraft::where('id', $craft_type_id)->pluck('engine_count');
            for($e=1; $e<=$cntEngines; $e++) {
                ProjectEngine::create([
                    'project_id' => $id,
                    'position' => 'P' . $e
                ]);
            } // end for
        }

        $record = ProjectAircraft::updateOrCreate(['project_id' => $id], Input::all());
        return redirect()->action('ProjectsController@engines', ['project' => $id]);
    } // end store_aircraft function

    public function engines($id)
    {
        $project = Project::findOrFail($id);
        $engines = ProjectEngine::where('project_id', $id)->get();
        return view('projects.engines', compact('engines', 'project'));
    } // end engines function

    public function store_engines(Request $request)
    {
        $id = Input::get('project_id');
        return redirect()->action('ProjectsController@inventory', ['project' => $id]);
    } // end store_engine function

    public function inventory($id)
    {
        $project = Project::findOrFail($id);
        return view('projects.inventory', compact('project'));
    } // end inventory function

    public function upload_inventory(Request $request)
    {
        $id = Input::get('project_id');
        return redirect()->action('ProjectsController@scope', ['project' => $id]);
    } // end store_engine function

    public function scope($id)
    {
        $project = Project::findOrFail($id);
        $aircraft = ProjectAircraft::where('project_id', $id)->first();

        if($project->is_mocked) {
            $parts = ProjectPart::with('condition', 'part')
                ->where('project_id', $id)
                ->orderBy('ATA')
                ->get();
        } else {
            $parts = $this->mockToParts($id, $aircraft->type_id);
        }

        return view('projects.scope', compact('atas', 'parts', 'project'));
    } // end scope function

    public function update_parts(Request $request)
    {
        $id = Input::get('project_id');
        return redirect()->action('ProjectsController@uploads', ['project' => $id]);
    } // end store_parts function

    public function uploads($id)
    {
        $project = Project::findOrFail($id);
        return view('projects.uploads', compact('project'));
    } // end uploads function

    public function update_uploads(Request $request)
    {
        $id = Input::get('project_id');
        return redirect()->action('ProjectsController@summary', ['project' => $id]);
    } // end store_parts function

    public function summary()
    {
        return view('projects.summary');
    } // end summary function

    public function store_summary(Request $request)
    {
        return $request->all();
    } // end store_summary function

    public function togglePartInProject($partID)
    {
        $part = ProjectPart::where('id', $partID)->first();
        if($part->in_project) {
            $part->in_project = false;
            $part->save();
        } else {
            $part->in_project = true;
            $part->save();
        }
        return $part;
    } // end addPartToProject function

    public function toggleMSN(Request $item)
    {
        $part = ProjectPart::where('id', $item->id)->first();
        $part->msn = $item->msn;
        $part->can_sell = $item->can_sell;
        $part->save();
        return $part;

    } // end toggleMSN function

    public function ataList($id)
    {
        $ata = DB::select(DB::raw("SELECT CONCAT(n.chapter,': ',n.title) AS ATA, n.slug, n.chapter, coalesce(n.subtotal,0) AS in_project, coalesce(n.total,0) AS ata_total FROM (SELECT m.chapter, m.title, m.slug, (SELECT count(*) AS subtotal FROM atas a INNER JOIN parts_listings pl ON pl.ata = a.id INNER JOIN project_parts pp ON pp.part_listing_id = pl.id WHERE pl.ata = m.chapter AND pp.in_project AND a.active AND pp.project_id = {$id} GROUP BY a.id ORDER BY a.chapter) AS subtotal, (SELECT count(*) AS total FROM atas a INNER JOIN parts_listings pl ON pl.ata = a.id INNER JOIN project_parts pp ON pp.part_listing_id = pl.id WHERE pl.ata = m.chapter AND a.active AND pp.project_id = {$id} GROUP BY a.id ORDER BY a.chapter) AS total FROM atas m WHERE m.active AND (SELECT count(*) AS total FROM atas a INNER JOIN parts_listings pl ON pl.ata = a.id INNER JOIN project_parts pp ON pp.part_listing_id = pl.id WHERE pl.ata = m.chapter AND a.active AND pp.project_id = {$id} GROUP BY a.id ORDER BY a.chapter)  > 0 ORDER BY m.chapter) AS n"));
        return $ata;
    } // end ata_list function

    public function partsList($id)
    {
        return ProjectPart::with('condition', 'part')
            ->where('project_id', $id)
            ->orderBy('ATA')
            ->get();
    } // end partsList function

    public function applyPackage($project_id, $package_id)
    {
        $project = ProjectPart::where('project_id', $project_id)
            ->where('package_id', '<=', (integer)$package_id)
            ->get();
        foreach($project as $part) {
            $part->in_project = true;
            $part->save();
        }
        return;
    } // end applyPackage function

    public function mockToParts($projectID, $aircraftTypeId)
    {
        $project = Project::findOrFail($projectID);
        if($project->is_mocked) { return; }

        $mocker = AircraftPart::with('aircraft', 'parts.atas')
            ->where('aircraft_id', $aircraftTypeId)
            ->get();
        //return $mocker;

        foreach($mocker as $part) {
            for($p=0; $p < $part->quantity; $p++) {
                ProjectPart::create([
                    'project_id' => $projectID,
                    'ATA' => $part['parts'][0]->ATA,
                    'in_project' => false,
                    'part_listing_id' => $part->part_listing_id,
                    'package_id' => $part['parts'][0]->package_id,
                    'condition' => 1,
                    'can_sell' => false
                ]);
            }
        }

        $project->is_mocked = true;
        $project->save();

        return ProjectPart::with('condition', 'part')
            ->where('project_id', $projectID)
            ->orderBy('ATA')
            ->get();
    } // end mockToParts function

    public function listByUser($id)
    {
        $user = Auth::user();
        if($user->all_companies) {
            $projects = Project::with($this->related)->get();
        } else {
            $projects = Project::with($this->related)
                ->where('company_id', $user->company_id)
                ->all();
        }

        foreach($projects as $pro) {
            $cntParts = ProjectPart::where('project_id', $pro->id)
                ->where('in_project', true)
                ->count();
            $cntMarket = ProjectPart::where('project_id', $pro->id)
                ->where('in_project', true)
                ->where('can_sell', true)
                //->where('msn', '!=', NULL)
                ->count();

            $pro->in_market = $cntMarket;
            $pro->total_parts = $cntParts;
            if($cntParts == 0) {
                $pro->percentage = 0;
            } else {
                $pro->percentage = $cntMarket/$cntParts;
            }
        }

        return $projects;
    } // end listByUser function
}
