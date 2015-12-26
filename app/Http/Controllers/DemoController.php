<?php

namespace App\Http\Controllers;

use App\Helpers\Contracts\RocketShipContract;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DemoController extends Controller
{
    public function index(RocketShipContract $rocketship)
    {
        $boom = $rocketship->blastOff();
        return view('demo.index', compact('boom'));
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
