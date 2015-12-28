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
                'company_id' => 5,
                'location' => 'San Francisco',
                'address' => '1 Star Fleet Row',
                'address2' => 'San Francisco, CA 90021, USA',
                'phone' => '1239993434'
            ]
        ];

        foreach ($collection as $record) {
            Location::create($record);
        }
    }
}
