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
                'tier' => '2',
                'corporation_type' => 'Limited Liability Corporation'
            ],
            [
                'company' => 'Aerospace Disassembly Consortium',
                'dba' => 'ADC',
                'domain' => 'aero-eco.com',
                'tier' => '1',
                'corporation_type' => 'Tennessee'
            ],
            [
                'company' => 'Universal Asset Management',
                'dba' => 'UAM',
                'domain' => 'uaminc.com',
                'tier' => '2',
                'corporation_type' => 'Tennessee'
            ],
            [
                'company' => 'Braniff Airlines',
                'dba' => 'Braniff',
                'domain' => 'braniff.com',
                'tier' => '3',
                'corporation_type' => 'Limited Liability Corporation'
            ],
            [
                'company' => 'Robert Half Technology',
                'dba' => 'RHT',
                'domain' => 'rht.com',
                'tier' => '4',
                'reply_to' => 'jon.gravois@rhsps.com',
                'website' => 'http://www.rhtmemphis.com',
                'corporation_type' => 'New Jersey'
            ]
        ];

        foreach ($collection as $record) {
            Company::create($record);
        }
    }
}
