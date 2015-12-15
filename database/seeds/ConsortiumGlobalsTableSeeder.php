<?php

use App\Models\ConsortiumGlobal;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConsortiumGlobalsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('consortium_globals')->delete();

        $collection = [
            [
                'name' => 'Aerospace Disassembly Consortium',
                'abr' => 'ADC',
                'address' => '5350 Poplar Avenue, Suite 150',
                'address2' => 'Memphis, TN 38119',
                'phone' => '9016824064',
                'fax' => '9012021042',
                'corporation_type' => 'Tennessee'
            ]
        ];

        foreach ($collection as $record) {
            ConsortiumGlobal::create($record);
        }
    }
}
