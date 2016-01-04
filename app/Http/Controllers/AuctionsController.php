<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class AuctionsController extends ApiController
{
    protected $records;

    public function __construct(Auction $records)
    {
        $this->records = $records;
        $this->related = ['project', 'status'];
    }

    public function index()
    {
        // show all
        $records = Auction::with($this->related)->get();
        return $records;
    }

    public function destroy($id)
    {
        // delete single
        $record = $this->records->findOrFail($id);
        $record->delete();
        return $this->respondOK('Auction was deleted');
    }

    public function show($id)
    {
        //show single
        $record = Auction::with($this->related)->findOrFail($id);
        return $record;
    }

    public function store()
    {
        // insert new
        $record = Auction::create(Input::all());
        return $this->respond($record->id);
    }

    public function update($id)
    {
        // save updated
        $record = $this->records->find($id);

        if(! $record){
            Auction::create(Input::all());
            return $this->respond($record);
        }

        $record->fill(Input::all())->save();
        return $this->respond($record);
    }

    public function listAll()
    {
        // show all
        $auctions = Auction::with($this->related)->get();

        return view('auctions.list', compact('auctions'));
    }

    public function listOne($id)
    {
        //show single
        $auction = Auction::with($this->related)->findOrFail($id);
        return view('auctions.single', compact('auction'));
    }
}
