<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();

        $collection = [
            [
                'firstname' => 'AeroEco',
                'lastname' => 'Software',
                'email' => 'groundcontrol@eco.local',
                'password' => Hash::make('password'),
                'company_id' => 2,
                'all_companies' => true,
                'manager_id' => 10,
                'is_admin' => true,
                'can_sell' => true,
                'role_id' => 1,
                'tier' => 1
            ],
            [
                'firstname' => 'Jon',
                'lastname' => 'Gravois',
                'email' => 'jgravois@uaminc.com',
                'password' => Hash::make('password'),
                'company_id' => 5,
                'all_companies' => true,
                'manager_id' => 8,
                'is_admin' => true,
                'can_sell' => true,
                'role_id' => 2,
                'tier' => 1
            ],
            [
                'firstname' => 'Kenn E',
                'lastname' => 'Thompson',
                'email' => 'kennthompson@gmail.com',
                'password' => Hash::make('password'),
                'company_id' => 5,
                'all_companies' => true,
                'manager_id' => 8,
                'is_admin' => true,
                'can_sell' => true,
                'role_id' => 2,
                'tier' => 1
            ],
            [
                'firstname' => 'Anh',
                'lastname' => 'Truong',
                'email' => 'atruong@uaminc.com',
                'password' => Hash::make('password'),
                'company_id' => 5,
                'all_companies' => true,
                'manager_id' => 8,
                'is_admin' => true,
                'can_sell' => true,
                'role_id' => 2,
                'tier' => 1
            ],
            [
                'firstname' => 'Matt',
                'lastname' => 'Scott',
                'email' => 'mscott@uaminc.com',
                'password' => Hash::make('password'),
                'company_id' => 5,
                'all_companies' => true,
                'manager_id' => 8,
                'is_admin' => true,
                'can_sell' => true,
                'role_id' => 2,
                'tier' => 1
            ],
            [
                'firstname' => 'Tracy',
                'lastname' => 'Andrews',
                'email' => 'tandrews@uaminc.com',
                'password' => Hash::make('password'),
                'company_id' => 5,
                'all_companies' => true,
                'manager_id' => 8,
                'is_admin' => true,
                'can_sell' => true,
                'role_id' => 2,
                'tier' => 1
            ],
            [
                'firstname' => 'Jon',
                'lastname' => 'Moon',
                'email' => 'jmoon@uaminc.com',
                'password' => Hash::make('password'),
                'company_id' => 5,
                'all_companies' => true,
                'manager_id' => 8,
                'is_admin' => true,
                'can_sell' => true,
                'role_id' => 2,
                'tier' => 1
            ],
            [
                'firstname' => 'Mike',
                'lastname' => 'Kenney',
                'email' => 'mkenney@uaminc.com',
                'password' => Hash::make('password'),
                'company_id' => 5,
                'all_companies' => true,
                'manager_id' => 8,
                'is_admin' => true,
                'can_sell' => true,
                'role_id' => 2,
                'tier' => 1
            ],
            [
                'firstname' => 'Keri',
                'lastname' => 'Wright',
                'email' => 'kwright@uaminc.com',
                'password' => Hash::make('password'),
                'company_id' => 5,
                'all_companies' => true,
                'manager_id' => 8,
                'is_admin' => true,
                'can_sell' => true,
                'role_id' => 2,
                'tier' => 1
            ],
            [
                'firstname' => 'AeroEco',
                'lastname' => 'Sysadmin',
                'email' => 'admin@aero.local',
                'password' => Hash::make('password'),
                'all_companies' => true,
                'manager_id' => 7,
                'is_admin' => true,
                'can_sell' => true,
                'role_id' => 2,
                'tier' => 1
            ],
            [
                'firstname' => 'AeroEco',
                'lastname' => 'Accounting',
                'email' => 'accounting@aero.local',
                'password' => Hash::make('password'),
                'all_companies' => true,
                'manager_id' => 7,
                'is_admin' => false,
                'can_sell' => true,
                'role_id' => 8
            ],
            [
                'firstname' => 'AeroEco',
                'lastname' => 'TechAdmin',
                'email' => 'techadmin@aero.local',
                'password' => Hash::make('password'),
                'all_companies' => true,
                'manager_id' => 7,
                'is_admin' => true,
                'can_sell' => true,
                'role_id' => 5
            ],
            [
                'firstname' => 'AeroEco',
                'lastname' => 'Support',
                'email' => 'support@aero.local',
                'password' => Hash::make('password'),
                'manager_id' => 7,
                'all_companies' => true,
                'can_sell' => true,
                'role_id' => 6
            ],
            [
                'firstname' => 'AeroEco',
                'lastname' => 'Team Leader',
                'email' => 'teamleader@aero.local',
                'password' => Hash::make('password'),
                'manager_id' => 7,
                'all_companies' => true,
                'can_sell' => true,
                'role_id' => 7
            ],
            [
                'firstname' => 'AeroEco',
                'lastname' => 'Seller',
                'email' => 'seller@aero.local',
                'password' => Hash::make('password'),
                'manager_id' => 7,
                'can_sell' => true,
                'role_id' => 9
            ],
            [
                'firstname' => 'AeroEco',
                'lastname' => 'Tier 1',
                'email' => 'tier1@aero.local',
                'password' => Hash::make('password'),
                'manager_id' => 7,
                'can_sell' => true,
                'role_id' => 10
            ],
            [
                'firstname' => 'AeroEco',
                'lastname' => 'Tier 2',
                'email' => 'tier2@aero.local',
                'password' => Hash::make('password'),
                'manager_id' => 7,
                'can_sell' => true,
                'role_id' => 11
            ],
            [
                'firstname' => 'AeroEco',
                'lastname' => 'Tier 3',
                'email' => 'tier3@aero.local',
                'password' => Hash::make('password'),
                'manager_id' => 7,
                'can_sell' => true,
                'role_id' => 12
            ],
            [
                'firstname' => 'AeroEco',
                'lastname' => 'Tier 4',
                'email' => 'tier4@aero.local',
                'password' => Hash::make('password'),
                'manager_id' => 7,
                'can_sell' => true,
                'role_id' => 13
            ],
            [
                'firstname' => 'AeroEco',
                'lastname' => 'Vendor',
                'email' => 'vendor@aero.local',
                'manager_id' => 7,
                'password' => Hash::make('password'),
                'role_id' => 14,
                'company_id' => 5,
                'can_sell' => false
            ],
            [
                'firstname' => 'Shawn',
                'lastname' => 'Kling',
                'email' => 'skling@uaminc.com',
                'password' => Hash::make('password'),
                'company_id' => 5,
                'all_companies' => true,
                'manager_id' => 8,
                'is_admin' => true,
                'can_sell' => true,
                'role_id' => 2,
                'tier' => 1
            ],
            [
                'firstname' => 'Michael',
                'lastname' => 'Cairo',
                'email' => 'mcairo@uaminc.com',
                'password' => Hash::make('password'),
                'company_id' => 5,
                'all_companies' => true,
                'manager_id' => 8,
                'is_admin' => true,
                'can_sell' => true,
                'role_id' => 2,
                'tier' => 1
            ],
            [
                'firstname' => 'Warren',
                'lastname' => 'Davenport',
                'email' => 'wdavenport@uaminc.com',
                'password' => Hash::make('password'),
                'company_id' => 5,
                'all_companies' => true,
                'manager_id' => 8,
                'is_admin' => true,
                'can_sell' => true,
                'role_id' => 2,
                'tier' => 1
            ],
            [
                'firstname' => 'James',
                'lastname' => 'Johnson',
                'email' => 'jjohnson@uaminc.com',
                'password' => Hash::make('password'),
                'company_id' => 5,
                'all_companies' => true,
                'manager_id' => 6,
                'is_admin' => true,
                'can_sell' => true,
                'role_id' => 2,
                'tier' => 1
            ]
        ];

        foreach ($collection as $record) {
            User::create($record);
        }
    }
}
