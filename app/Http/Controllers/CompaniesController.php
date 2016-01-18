<?php

namespace App\Http\Controllers;

use App\Events\CompanyWasCreated;
use App\Models\Company;
use App\Models\Country;
use App\Models\Location;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class CompaniesController extends ApiController
{
    protected $records;

    public function __construct(Company $records)
    {
        $this->records = $records;
        $this->related = [
            'addresses',
            'admin',
            'contacts.type',
            'locations',
//            'messages',
            'phones',
//            'roles',
            'users'
        ];
    }

    public function index()
    {
        // show all
        $records = Company::with($this->related)->get();
        return $records;
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Company was deleted');
    }

    public function show($id)
    {
        //show single
        $record = $this->records->with($this->related)->findOrFail($id);
        return $record;
    }

    public function store()
    {
        // insert new
        $record = Company::create(Input::all());
        event(new CompanyWasCreated($record));
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Company::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }

    // CREATE / EDIT COMPANIES

    public function listAll()
    {
        // show all
        $companies = Company::with($this->related)->orderBy('tier')->get();
        foreach($companies as $company) {
            $company->active_projects = getCompanyActiveProjects($company->id);
            $company->completed_projects = getCompanyCompletedProjects($company->id);
            $company->pending_projects = getCompanyPendingProjects($company->id);
        }

        return view('companies.list', compact('companies'));
    }

    public function listOne($id)
    {
        //show single
        $company = $this->records->with($this->related)->findOrFail($id);
        return view('companies.single', compact('company'));
    }

    public function profile($id = null)
    {
        if(!$id) {
            $id = Company::create()->id;
            $newed = Company::findOrFail($id);
            event(new CompanyWasCreated($newed));
            return redirect('companies/' . $id . '/profile');
        } else {
            $company = Company::with($this->related)
                ->where('id', $id)
                ->first();
        }

        $countries = Country::lists('country', 'id');

        //return $company;
        return view('companies.profile', compact('company', 'countries'));
    } // end profile function

    public function storeProfile(Request $request)
    {
        $companyID = $request->get('company_id');
        $company = Company::findOrFail($companyID);
        $input = $request->all();
        $company->fill($input)->save();
        flash('Success', 'Profile successfully added!');
        return redirect()->back();
    } // end store_profile function

    public function locations($id = null)
    {
        if(!$id) {
            $company = [];
        } else {
            $company = Company::with($this->related)
                ->where('id', $id)
                ->first();
        }

        return view('companies.locations', compact('company'));
    } // end location function

    public function storeLocations(Request $request)
    {
        dd($request);
    } // end store_locations function

    public function contacts($id = null)
    {
        if(!$id) {
            $company = [];
        } else {
            $company = Company::with($this->related)
                ->where('id', $id)
                ->first();
        }
        //return $company->contacts;
        return view('companies.contacts', compact('company'));
    } // end contacts function

    public function storeContacts(Request $request)
    {
        dd($request);
    } // end store_contacts function

    public function roles($id = null)
    {
        if(!$id) {
            $company = [];
        } else {
            $company = Company::with($this->related)
                ->where('id', $id)
                ->first();
        }

        return view('companies.roles', compact('company'));
    } // end contacts function

    public function storeRoles(Request $request)
    {
        dd($requests);
    } // end store_roles function

    public function users($id = null)
    {
        if(!$id) {
            $company = [];
        } else {
            $company = Company::with($this->related)
                ->where('id', $id)
                ->first();
        }

        return view('companies.users', compact('company'));
    } // end contacts function

    public function storeUsers(Request $request)
    {
        dd($requests);
    } // end store_roles function

    public function plugins($id = null)
    {
        if(!$id) {
            $company = [];
        } else {
            $company = Company::with($this->related)
                ->where('id', $id)
                ->first();
        }

        return view('companies.plugins', compact('company'));
    } // end contacts function

    public function storePlugins(Request $request)
    {
        dd($requests);
    } // end store_roles function

    public function messages($id = null)
    {
        if(!$id) {
            $company = [];
        } else {
            $company = Company::with($this->related)
                ->where('id', $id)
                ->first();
        }

        return view('companies.messages', compact('company'));
    } // end contacts function

    public function storeMessages(Request $request)
    {
        dd($requests);
    } // end store_roles function

    public function emails($id = null)
    {
        if(!$id) {
            $company = [];
        } else {
            $company = Company::with($this->related)
                ->where('id', $id)
                ->first();
        }

        return view('companies.emails', compact('company'));
    } // end contacts function

    public function storeEmails(Request $request)
    {
        dd($requests);
    } // end store_roles function

    public function listLocations($id)
    {
        return Location::where('company_id', $id)->get();
    } // end listLocations function
}
