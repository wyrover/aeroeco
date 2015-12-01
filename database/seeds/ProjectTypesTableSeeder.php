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
                'type' => 'aircraft'
            ],
            [
                'type' => 'engine'
            ]
        ];

        foreach ($collection as $record) {
            ProjectType::create($record);
        }
    }
}
