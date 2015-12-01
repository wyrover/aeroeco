<?php

use App\Models\Company;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompaniesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('companies')->delete();

        $collection = [
            [
                'company' => 'Dagobah Charters',
                'dba' => 'DCY',
                'domain' => 'dagobah.com',
                'tier' => '2'
            ],
            [
                'company' => 'Aerospace Disassembly Consortium',
                'dba' => 'ADC',
                'domain' => 'aero-eco.com',
                'tier' => '1'
            ],
            [
                'company' => 'Universal Asset Management',
                'dba' => 'UAM',
                'domain' => 'uaminc.com',
                'tier' => '2'
            ],
            [
                'company' => 'Braniff Airlines',
                'dba' => 'Braniff',
                'domain' => 'braniff.com',
                'tier' => '3'
            ],
            [
                'company' => 'Robert Half Technology',
                'dba' => 'RHT',
                'domain' => 'rht.com',
                'tier' => '4'
            ]
        ];

        foreach ($collection as $record) {
            Company::create($record);
        }
    }
}
