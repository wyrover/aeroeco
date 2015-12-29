<?php

use App\Models\Tech;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TechsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('techs')->delete();

        $collection = [
            [
                'disassemblers_id' => 1,
                'user_id' => 21
            ],
            [
                'disassemblers_id' => 1,
                'user_id' => 22
            ],
            [
                'disassemblers_id' => 1,
                'user_id' => 23
            ],
            [
                'disassemblers_id' => 1,
                'user_id' => 24
            ],
            [
                'disassemblers_id' => 1,
                'user_id' => 25
            ],
            [
                'disassemblers_id' => 1,
                'user_id' => 26
            ],
            [
                'disassemblers_id' => 1,
                'user_id' => 27
            ]
        ];

        foreach ($collection as $record) {
            Tech::create($record);
        }
    }
}
