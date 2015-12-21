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
use App\Models\ProjectPart;
use App\Models\ProjectType;
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
        $this->related = ['aircraft.country', 'aircraft.type', 'company.addresses', 'creator', 'engines', 'project_type', 'sales.manager', 'status', 'worksite'];
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

    public function contract_gta($id) {
        $conType = "General Terms Agreement";
        $topics = Contracttopic::where('contract_type_id', 1)
            ->orderBy('sort_order')
            ->get();

        $project = Project::with('company.addresses')->where('id', $id)->first();
        $company = $project->company;

        $adc = ConsortiumGlobal::where('id', '1')->first();

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

    public function profile()
    {
        $adc = ConsortiumGlobal::where('id', '1')->first();
        $atas = Ata::where('active', 1)->get();
        $disassemblers = Disassembler::lists('name', 'id');
        $user = Auth::user();
        $types = ProjectType::lists('type', 'id');
        $company = Company::where('id', $user->company_id)->first();

        return view('projects.profile', compact('adc', 'atas', 'disassemblers', 'company', 'types', 'user'));
    }

    public function store(Request $request)
    {
        // insert new
        $user = Auth::user();
        $company = Company::find($user->company_id);
        $ins = array_add($request, 'company_id', $user->company_id);
        $ins = array_add($ins, 'directory_path', $company->company . '/' . date("Y") . '/');
        //TODO: add projected_completion_date

        //TODO: Handle Upload Inventory Optional Upload

        //dd($request);
        $record = Project::updateOrCreate(['project_id' => $request->input('project_id')], $ins->all());
        $request->session()->put('project', $record);
        //dd($record);
        return redirect()->action('ProjectsController@aircraft', ['project' => $record]);
    }

    public function aircraft($id)
    {
        $project = Project::findOrFail($id);
        $countries = Country::lists('country', 'id');
        return view('projects.aircraft', compact('countries', 'project'));
    } // end aircraft function

    public function store_aircraft(Request $request)
    {
        $type_id = Aircraft::where('model', $request->input('aircraft_type'))->pluck('id');
        $ins = array_add($request, 'type_id', $type_id);

        //TODO: Handle Uploads

        $record = ProjectAircraft::updateOrCreate(['project_id' => $request->input('project_id')], $ins->all());
        return redirect()->action('ProjectsController@engines', ['project' => $request->input('project_id')]);
    } // end store_aircraft function

    public function engines($id)
    {
        $project = Project::findOrFail($id);
        return view('projects.engines', compact('project'));
    } // end engines function

    public function store_engines(Request $request)
    {
        return $request;
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

    public function store_parts(Request $request)
    {
        return $request;
    } // end store_parts function

    public function summary()
    {
        return view('projects.summary');
    } // end summary function

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
                    'condition' => 1
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
}
