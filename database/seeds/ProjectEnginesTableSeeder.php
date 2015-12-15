<?php

use App\Models\ProjectEngine;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectEnginesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('project_engines')->delete();

        $collection = [
            [
                'project_id' => 1,
                'position' => 1,
                'engine_type_variant' => 'PW400-94',
                'stand_provider' => 'Owner',
                'MPA' => false,
                'boroscope' => true,
                'storage_program' => false
            ],
            [
                'project_id' => 1,
                'position' => 2,
                'engine_type_variant' => 'PW400-94',
                'stand_provider' => 'Owner',
                'MPA' => false,
                'boroscope' => true,
                'storage_program' => false
            ],
            [
                'project_id' => 1,
                'position' => 3,
                'engine_type_variant' => 'PW400-94',
                'stand_provider' => 'Owner',
                'MPA' => false,
                'boroscope' => true,
                'storage_program' => false
            ],
            [
                'project_id' => 1,
                'position' => 4,
                'engine_type_variant' => 'PW400-94',
                'stand_provider' => 'Owner',
                'MPA' => false,
                'boroscope' => true,
                'storage_program' => false
            ]
        ];

        foreach ($collection as $record) {
            ProjectEngine::create($record);
        }
    }
}
