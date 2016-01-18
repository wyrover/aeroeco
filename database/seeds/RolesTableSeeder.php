<?php

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('roles')->delete();

        $collection = [
            [
                'role' => 'System'
            ],
            [
                'role' => 'SysAdmin'
            ],
            [
                'role' => 'SysExec'
            ],
            [
                'role' => 'CompanyAdmin'
            ],
            [
                'role' => 'TechAdmin'
            ],
            [
                'role' => 'Support'
            ],
            [
                'role' => 'Tech'
            ],
            [
                'role' => 'Accounting'
            ],
            [
                'role' => 'Seller'
            ],
            [
                'role' => 'Tier1'
            ],
            [
                'role' => 'Tier2'
            ],
            [
                'role' => 'Tier3'
            ],
            [
                'role' => 'Tier4'
            ],
            [
                'role' => 'Vendor'
            ],
            [
                'role' => 'Company Captain'
            ],
            [
                'role' => 'Company First Officer'
            ],
            [
                'role' => 'Company Engineer'
            ],
            [
                'role' => 'Company Crew'
            ],
            [
                'role' => 'Company Deadheader'
            ]
        ];

        foreach ($collection as $record) {
            Role::create($record);
        }
    }
}
