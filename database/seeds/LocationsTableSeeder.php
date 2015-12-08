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

        ];

        foreach ($collection as $record) {
            Location::create($record);
        }
    }
}
