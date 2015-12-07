<?php

use App\Models\Location;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('locations')->delete();

        $collection = [
            [
                'location' => 'Global Headquarters'
            ],
            [
                'location' => 'On-site'
            ],
            [
                'location' => 'Tupelo Regional Airport, Tupelo, MS, (KTUP)'
            ],
            [
                'location' => 'Singapore'
            ],
            [
                'location' => 'Hove, East Sussex, UK'
            ]
        ];

        foreach ($collection as $record) {
            Location::create($record);
        }
    }
}
