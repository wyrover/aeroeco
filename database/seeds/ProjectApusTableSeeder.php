<?php

use App\Models\ProjectApu;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectApusTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('project_apus')->delete();

        $collection = [
            [
                'project_id' => 1,
                'position' => 'APU',
                'engine_type_variant' => 'PW-901A',
                'owner' => 'leased',
                'task' => 'return to owner',
                'stand_provider' => 'ADC',
                'MPA' => true,
                'boroscope' => false,
                'storage_program' => false
            ]
        ];

        foreach ($collection as $record) {
            ProjectApu::create($record);
        }
    }
}
