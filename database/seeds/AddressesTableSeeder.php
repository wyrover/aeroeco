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
                'company_id' => 5,
                'country_id' => 1,
                'type' => 'business',
                'address1' => '5350 Poplar Ave Suite 150',
                'address2' => '',
                'city' => 'Memphis',
                'state' => 'TN',
                'postal_code' => '38119'
            ],
            [
                'company_id' => 2,
                'country_id' => 1,
                'type' => 'business',
                'address1' => '6750 Poplar Ave Suite 500',
                'address2' => '',
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
