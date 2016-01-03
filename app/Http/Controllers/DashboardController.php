<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();

        switch((int)$user->role_id) {
            case 2:
                return view('dashboard.adcadmin', compact('user'));
                break;
            case 4:
                return view('dashboard.coadmin', compact('user'));
                break;
            case 5:
                return view('dashboard.techadmin', compact('user'));
                break;
            case 6:
                return view('dashboard.support', compact('user'));
                break;
            case 7:
                return view('dashboard.teamleader', compact('user'));
                break;
            case 8:
                return view('dashboard.accounting', compact('user'));
                break;
            case 9:
                return view('dashboard.seller', compact('user'));
                break;
            case 10:
                return view('dashboard.tierone', compact('user'));
                break;
            case 11:
                return view('dashboard.tiertwo', compact('user'));
                break;
            case 12:
                return view('dashboard.tierthree', compact('user'));
                break;
            case 13:
                return view('dashboard.tierfour', compact('user'));
                break;
            case 14:
                return view('dashboard.vendor', compact('user'));
                break;
            default:
                //redirect to login???
                return 'Default';
                break;
        } // end switch
        return view('dashboard.dashboard', compact('user'));
    }

} // end controller
