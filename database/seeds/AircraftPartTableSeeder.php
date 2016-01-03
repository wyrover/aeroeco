<?php

use App\Models\AircraftPart;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AircraftPartTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('aircraft_part')->delete();

        $collection = [
            [
                'aircraft_id' => 21,
                'part_listing_id' => 1,
                'quantity' => 1
            ],
            [
                'aircraft_id' => 21,
                'part_listing_id' => 2,
                'quantity' => 6
            ],
            [
                'aircraft_id' => 21,
                'part_listing_id' => 3,
                'quantity' => 2
            ],
            [
                'aircraft_id' => 21,
                'part_listing_id' => 4,
                'quantity' => 2
            ],
            [
                'aircraft_id' => 21,
                'part_listing_id' => 5,
                'quantity' => 1
            ],
            [
                'aircraft_id' => 21,
                'part_listing_id' => 6,
                'quantity' => 4
            ],
            [
                'aircraft_id' => 21,
                'part_listing_id' => 7,
                'quantity' => 1
            ],
            [
                'aircraft_id' => 21,
                'part_listing_id' => 8,
                'quantity' => 3
            ],
            [
                'aircraft_id' => 21,
                'part_listing_id' => 9,
                'quantity' => 5
            ],
            [
                'aircraft_id' => 21,
                'part_listing_id' => 10,
                'quantity' => 10
            ],
            [
                'aircraft_id' => 21,
                'part_listing_id' => 11,
                'quantity' => 2
            ],
            [
                'aircraft_id' => 21,
                'part_listing_id' => 12,
                'quantity' => 2
            ],
            [
                'aircraft_id' => 21,
                'part_listing_id' => 13,
                'quantity' => 1
            ],
            [
                'aircraft_id' => 21,
                'part_listing_id' => 14,
                'quantity' => 5
            ],
            [
                'aircraft_id' => 21,
                'part_listing_id' => 15,
                'quantity' => 1
            ],
            [
                'aircraft_id' => 21,
                'part_listing_id' => 16,
                'quantity' => 1
            ],
            [
                'aircraft_id' => 21,
                'part_listing_id' => 17,
                'quantity' => 10
            ],
            [
                'aircraft_id' => 21,
                'part_listing_id' => 18,
                'quantity' => 18
            ],
            [
                'aircraft_id' => 21,
                'part_listing_id' => 19,
                'quantity' => 4
            ],
            [
                'aircraft_id' => 21,
                'part_listing_id' => 20,
                'quantity' => 8
            ],
            [
                'aircraft_id' => 21,
                'part_listing_id' => 21,
                'quantity' => 1
            ],
            [
                'aircraft_id' => 21,
                'part_listing_id' => 22,
                'quantity' => 2
            ],
            [
                'aircraft_id' => 21,
                'part_listing_id' => 23,
                'quantity' => 3
            ],
            [
                'aircraft_id' => 21,
                'part_listing_id' => 24,
                'quantity' => 1
            ],
            [
                'aircraft_id' => 21,
                'part_listing_id' => 25,
                'quantity' => 1
            ],
            [
                'aircraft_id' => 21,
                'part_listing_id' => 26,
                'quantity' => 1
            ],
            [
                'aircraft_id' => 21,
                'part_listing_id' => 27,
                'quantity' => 2
            ],
            [
                'aircraft_id' => 21,
                'part_listing_id' => 28,
                'quantity' => 2
            ],
            [
                'aircraft_id' => 21,
                'part_listing_id' => 29,
                'quantity' => 2
            ],
            [
                'aircraft_id' => 21,
                'part_listing_id' => 30,
                'quantity' => 1
            ],
            [
                'aircraft_id' => 21,
                'part_listing_id' => 31,
                'quantity' => 1
            ],
            [
                'aircraft_id' => 21,
                'part_listing_id' => 34,
                'quantity' => 4
            ]
        ];

        foreach ($collection as $record) {
            AircraftPart::create($record);
        }
    }
}
