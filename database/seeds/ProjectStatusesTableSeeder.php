<?php

use App\Models\ProjectStatus;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectStatusesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('project_statuses')->delete();

        $collection = [
            [
                'status' => 'Profile Incomplete'
            ],
            [
                'status' => 'Awaiting Arrival'
            ],
            [
                'status' => 'Pending Disassembly'
            ],
            [
                'status' => 'Disassembly In Progress'
            ],
            [
                'status' => 'Disassembly Completed'
            ],
            [
                'status' => 'Awaiting Scrap Report'
            ],
            [
                'status' => 'WorkScope Completed'
            ],
            [
                'status' => 'Project Complete'
            ]
        ];

        foreach ($collection as $record) {
            ProjectStatus::create($record);
        }
    }
}
