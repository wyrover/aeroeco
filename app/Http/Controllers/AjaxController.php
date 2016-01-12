<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\ConsortiumGlobal;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class AjaxController extends ApiController
{
    public function fetchGlobals()
    {
        $data = ConsortiumGlobal::all();
        return $this->respond($data);
    } // end fetchGlobals function
    public function trialRegister(Request $request)
    {
        $errors = [];
        $data = [];

        $email = $request->input('email');
        $password = $request->input('password');
        $password2 = $request->input('password2');
        $country_id = $request->input('country_id');
        $company = $request->input('company');
        $dba = $request->input('dba');
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $phone = $request->input('phone');
        $can_sell = $request->input('can_sell');
        $terms_agree = $request->input('terms_agree');
        $contact_please = $request->input('contact_please');

        if(!$email) { $errors['email'] = 'Email is required.'; }
        if(!$password) { $errors['password'] = 'Password is required.'; }
        if(!$password2) { $errors['password2'] = 'Confirmation of password is required.'; }
        if(!$company) { $errors['company'] = 'Company legal name is required.'; }
        if(!$dba) { $errors['dba'] = 'Company common name is required.'; }
        if(!$firstname) { $errors['firstname'] = 'First Name is required.'; }
        if(!$lastname) { $errors['lastname'] = 'Last Name is required.'; }
        if(!$phone) { $errors['phone'] = 'Phone Number is required.'; }

        if(!empty($errors)) {
            $data['success'] = false;
            $data['errors'] = $errors;
        } else {
            // process form
            $newco = Company::create([
                'company' => $company,
                'dba' => $dba,
                'country_id' => $country_id,
                'terms_agree' => $terms_agree,
                'contact_please' => $contact_please,
                'can_sell' => $can_sell,
                'main_phone' => $phone,
                'tier' => 2,
                'folder_name' => snake_case($company)
            ]);
            $newuser = User::create([
                'firstname' => $firstname,
                'lastname' => $lastname,
                'email' => $email,
                'password' => bcrypt($password),
                'company_id' => $newco->id,
                'can_sell' => $can_sell
            ]);

            $updCo = $newco->fill(['admin_id' => $newuser->id])->save();
            $updU = $newuser->fill(['manager_id' => $newuser->id])->save();

            $data['success'] = true;
            $data['message'] = 'Success';
            $data['user_id'] = $newuser->id;
            $data['company_id'] = $newco->id;
        } // end if

        return $this->respond($data);
    } // end trialRegister function
}
