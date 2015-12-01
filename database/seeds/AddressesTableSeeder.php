<?php

use App\Models\Address;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('addresses')->delete();

        $collection = [
            [
                'company_id' => 1,
                'country_id' => 1,
                'type' => 'physical',
                'address1' => '5350 Poplar Ave',
                'address2' => 'Suite 150',
                'city' => 'Memphis',
                'state' => 'TN',
                'postal_code' => '38119'
            ],
            [
                'company_id' => 2,
                'country_id' => 1,
                'type' => 'business',
                'address1' => '6750 Poplar Ave',
                'address2' => 'Suite 500',
                'city' => 'Memphis',
                'state' => 'TN',
                'postal_code' => '38138'
            ]
        ];

        foreach ($collection as $record) {
            Address::create($record);
        }
    }
}
