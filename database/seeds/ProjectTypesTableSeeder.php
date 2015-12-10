<?php

use App\Models\ProjectType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectTypesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('project_types')->delete();

        $collection = [
            [
                'type' => 'Aircraft'
            ],
            [
                'type' => 'Auxiliary Power Unit (APU)'
            ],
            [
                'type' => 'Engine'
            ],
            [
                'type' => 'Landing Gear'
            ],
            [
                'type' => 'Thrust Reverser'
            ]
        ];

        foreach ($collection as $record) {
            ProjectType::create($record);
        }
    }
}
