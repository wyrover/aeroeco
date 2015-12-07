<?php

use App\Models\Contracttype;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContracttypesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('contract_types')->delete();

        $collection = [
            [
                'type' => 'General Terms Agreement',
                'abr' => 'GTA'
            ]
        ];

        foreach ($collection as $record) {
            Contracttype::create($record);
        }
    }
}
