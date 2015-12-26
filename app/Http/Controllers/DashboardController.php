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
        return view('dashboard.dashboard', compact('user'));
    }

} // end controller
