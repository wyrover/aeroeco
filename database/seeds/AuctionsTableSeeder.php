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
            [
                'project_id' => 1
            ],
            [
                'project_id' => 2
            ],
            [
                'project_id' => 3
            ],
            [
                'project_id' => 4
            ],
            [
                'project_id' => 5
            ]
        ];

        foreach ($collection as $record) {
            Auction::create($record);
        }
    }
}
