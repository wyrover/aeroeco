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
                'role' => 'CoAdmin'
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
            ]
        ];

        foreach ($collection as $record) {
            Role::create($record);
        }
    }
}
