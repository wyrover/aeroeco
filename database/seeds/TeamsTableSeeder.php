<?php

use App\Models\Team;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('teams')->delete();
        $collection = [
            [
                'teamleader_id' => 0,
                'team_name' => 'Unassigned'
            ],
            [
                'teamleader_id' => 25,
                'team_name' => 'Gotham City'
            ],
            [
                'teamleader_id' => 26,
                'team_name' => 'Smallville'
            ],
            [
                'teamleader_id' => 27,
                'team_name' => 'Hells Kitchen'
            ]
        ];

        foreach ($collection as $record) {
            Team::create($record);
        }
    }
}
