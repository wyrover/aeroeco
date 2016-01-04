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
                'folder_name' => snake_case('Dagobah Charters'),
                'tier' => '2',
                'corporation_type' => 'Limited Liability Corporation',
                'admin_id' => 4
            ],
            [
                'company' => 'Aerospace Disassembly Consortium',
                'dba' => 'ADC',
                'domain' => 'aero-eco.com',
                'folder_name' => snake_case('Aerospace Disassembly Consortium'),
                'tier' => '1',
                'corporation_type' => 'Tennessee',
                'admin_id' => 9
            ],
            [
                'company' => 'Universal Asset Management',
                'dba' => 'UAM',
                'main_phone' => '9016824064',
                'domain' => 'uaminc.com',
                'folder_name' => snake_case('Universal Asset Management'),
                'tier' => '2',
                'corporation_type' => 'Tennessee',
                'admin_id' => 6
            ],
            [
                'company' => 'Braniff Airlines',
                'dba' => 'Braniff',
                'domain' => 'braniff.com',
                'folder_name' => snake_case('Braniff Airlines'),
                'tier' => '3',
                'corporation_type' => 'Limited Liability Corporation',
                'admin_id' => 3
            ],
            [
                'company' => 'Starfleet Academy',
                'dba' => 'SFA',
                'main_phone' => '4155551212',
                'domain' => 'sfa.org',
                'folder_name' => snake_case('Starfleet Academy'),
                'tier' => '4',
                'reply_to' => 'jon.gravois@sfa.com',
                'mail_domain' => 'sfa.org',
                'website' => 'http://acad.sfa.org/',
                'corporation_type' => 'San Francisco',
                'admin_id' => 2
            ]
        ];

        foreach ($collection as $record) {
            Company::create($record);
        }
    }
}
