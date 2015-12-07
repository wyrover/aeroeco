<?php

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('projects')->delete();

        $collection = [
            [
                'project_types_id' => 1,
                'location_id' => 3,
                'creator_id' => 2,
                'company_id' => 5,
                'sales_id' => 7,
                'project_start_date' => '2015-12-07',
                'asset_arrival_date' => '2015-12-25',
                'projected_completion_date' => '2016-01-10'
            ]
        ];

        foreach ($collection as $record) {
            Project::create($record);
        }
    }
}
