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
                'position' => 'P1',
                'engine_type_variant' => 'PW400-94',
                'owner' => 'leased',
                'task' => 'return to owner',
                'stand_provider' => 'ADC',
                'MPA' => true,
                'boroscope' => false,
                'storage_program' => false
            ],
            [
                'project_id' => 1,
                'position' => 'P2',
                'engine_type_variant' => 'PW400-94',
                'engine_msn' => 'D0G192',
                'owner' => 'Starfleet',
                'task' => 'market',
                'stand_provider' => 'Owner',
                'MPA' => false,
                'boroscope' => true,
                'storage_program' => false,
                'path_engine_trace' => 'd0g192.trace.pdf'
            ],
            [
                'project_id' => 1,
                'position' => 'P3',
                'engine_type_variant' => 'PW400-94',
                'engine_msn' => 'D0G188',
                'owner' => 'Starfleet',
                'task' => 'market',
                'stand_provider' => 'Owner',
                'MPA' => false,
                'boroscope' => false,
                'storage_program' => true,
                'path_engine_trace' => 'd0g188.trace.pdf'
            ],
            [
                'project_id' => 1,
                'position' => 'P4',
                'engine_type_variant' => 'PW400-94',
                'owner' => 'leased',
                'task' => 'return to owner',
                'stand_provider' => 'ADC',
                'MPA' => true,
                'boroscope' => true,
                'storage_program' => true
            ]
        ];

        foreach ($collection as $record) {
            ProjectEngine::create($record);
        }
    }
}
