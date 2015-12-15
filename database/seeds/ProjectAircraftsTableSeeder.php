<?php

use App\Models\ProjectAircraft;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectAircraftsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('project_aircrafts')->delete();

        $collection = [
            [
                'project_id' => 1,
                'type_id' => 19,
                'msn' => '37833',
                'tail' => 'N195UA',
                'has_incident' => false,
                'owner' => 'OK Consulatants, Inc',
                'last_operator' => 'Unites Airlines',
                'country_id' => 184,
                'model_year' => '1992',
                'flight_hours' => 66000,
                'cycles' => 42975,
                'path_plane_image' => 'plane.jpg'
            ]
        ];

        foreach ($collection as $record) {
            ProjectAircraft::create($record);
        }
    }
}
