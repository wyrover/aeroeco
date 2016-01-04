<?php

use App\Models\Auction;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuctionsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('auctions')->delete();

        $collection = [

        ];

        foreach ($collection as $record) {
            Auction::create($record);
        }
    }
}
