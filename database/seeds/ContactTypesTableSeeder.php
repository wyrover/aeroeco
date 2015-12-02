<?php

use App\Models\ContactType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactTypesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('contact_types')->delete();

        $collection = [
            [
                'type' => 'RFQ Recipient'
            ],
            [
                'type' => 'MRO RFQ Recipient'
            ],
            [
                'type' => 'Sales'
            ],
            [
                'type' => 'Accounting'
            ],
            [
                'type' => 'Human Resources'
            ],
            [
                'type' => 'Information Technology'
            ]
        ];

        foreach ($collection as $record) {
            ContactType::create($record);
        }
    }
}
