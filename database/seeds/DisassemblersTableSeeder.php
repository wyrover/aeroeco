<?php

use App\Models\Disassembler;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DisassemblersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('disassemblers')->delete();

        $collection = [
            [
                'name' => 'Tupelo Regional Airport (KTUP)',
                'address' => '118 Lemons Drive',
                'city' => 'Tupelo',
                'state' => 'MS',
                'postal_code' => '38801',
                'contact' => 'Dean Lowry',
                'phone' => '6626209434',
                'email' => 'dlowry@uaminc.com'
            ],
            [
                'name' => 'On-site'
            ]
        ];

        foreach ($collection as $record) {
            Disassembler::create($record);
        }
    }
}
