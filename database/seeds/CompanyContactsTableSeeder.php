<?php
use App\Models\CompanyContact;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanyContactsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('company_contacts')->delete();

        $collection = [
            [
                'company_id' => 5,
                'contact_type_id' => 1,
                'name' => 'James T Kirk',
                'title' => 'CEO',
                'phone' => '901.456-9210',
                'fax' => 'n/a'
            ],
            [
                'company_id' => 5,
                'contact_type_id' => 2,
                'name' => 'Mister Spock',
                'title' => 'CSO',
                'phone' => '901.456-9211',
                'fax' => 'n/a'
            ],
            [
                'company_id' => 5,
                'contact_type_id' => 3,
                'name' => 'Leonard McCoy',
                'title' => 'CMO',
                'phone' => '901.456-9212',
                'fax' => 'n/a'
            ],
            [
                'company_id' => 5,
                'contact_type_id' => 4,
                'name' => 'Montgomery Scott',
                'title' => 'COO',
                'phone' => '901.456-9213',
                'fax' => 'n/a'
            ]
        ];

        foreach ($collection as $record) {
            CompanyContact::create($record);
        }
    }
}
