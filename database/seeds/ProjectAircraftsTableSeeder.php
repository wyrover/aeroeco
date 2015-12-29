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
                'type_id' => 21,
                'msn' => '37833',
                'tail' => 'N195UA',
                'has_incident' => false,
                'owner' => 'OK Consulatants, Inc',
                'last_operator' => 'United Airlines',
                'country_id' => 184,
                'model_year' => '1992',
                'flight_hours' => 66000,
                'cycles' => 42975,
                'path_plane_image' => 'plane.jpg'
            ],
            [
                'project_id' => 2,
                'type_id' => 21,
                'msn' => '80333',
                'tail' => 'N508AA',
                'has_incident' => false,
                'owner' => 'GoneToSky, Inc',
                'last_operator' => 'American Airlines',
                'country_id' => 184,
                'model_year' => '1992',
                'flight_hours' => 76000,
                'cycles' => 5603,
                'path_plane_image' => 'plane.jpg'
            ],
            [
                'project_id' => 3,
                'type_id' => 21,
                'msn' => '57393',
                'tail' => 'N123AA',
                'has_incident' => false,
                'owner' => 'WannaFly, Inc',
                'last_operator' => 'American Airlines',
                'country_id' => 184,
                'model_year' => '1992',
                'flight_hours' => 88000,
                'cycles' => 9123,
                'path_plane_image' => 'plane.jpg'
            ],
            [
                'project_id' => 4,
                'type_id' => 4,
                'msn' => '10050',
                'tail' => 'N495GA',
                'has_incident' => false,
                'owner' => 'MakinCash, Inc',
                'last_operator' => 'Global Airlines',
                'country_id' => 184,
                'model_year' => '1988',
                'flight_hours' => 54000,
                'cycles' => 3423,
                'path_plane_image' => 'plane.jpg'
            ],
            [
                'project_id' => 5,
                'type_id' => 24,
                'msn' => '36759',
                'tail' => 'N715UA',
                'has_incident' => false,
                'owner' => 'Avionics, Inc',
                'last_operator' => 'United Airlines',
                'country_id' => 184,
                'model_year' => '1994',
                'flight_hours' => 74000,
                'cycles' => 9023,
                'path_plane_image' => 'plane.jpg'
            ]
        ];

        foreach ($collection as $record) {
            ProjectAircraft::create($record);
        }
    }
}
