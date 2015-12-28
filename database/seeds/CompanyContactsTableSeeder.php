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
                'phone' => '9014569210'
            ],
            [
                'company_id' => 5,
                'contact_type_id' => 2,
                'name' => 'Mister Spock',
                'title' => 'CSO',
                'phone' => '9014569211'
            ],
            [
                'company_id' => 5,
                'contact_type_id' => 3,
                'name' => 'Leonard McCoy',
                'title' => 'CMO',
                'phone' => '9014569212'
            ],
            [
                'company_id' => 5,
                'contact_type_id' => 4,
                'name' => 'Montgomery Scott',
                'title' => 'COO',
                'phone' => '9014569213'
            ]
        ];

        foreach ($collection as $record) {
            CompanyContact::create($record);
        }
    }
}
