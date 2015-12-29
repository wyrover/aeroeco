<?php

use App\Models\Status;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('statuses')->delete();

        $collection = [
            [
                'status' => 'Tier One'
            ],
            [
                'status' => 'Tier Two'
            ],
            [
                'status' => 'Tier Three'
            ],
            [
                'status' => 'Tier Four'
            ],
            [
                'status' => 'Pending'
            ],
            [
                'status' => 'Completed'
            ],
            [
                'status' => 'Closed'
            ],
            [
                'status' => 'Suspended'
            ]
        ];

        foreach ($collection as $record) {
            Status::create($record);
        }
    }
}
