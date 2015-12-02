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

        ];

        foreach ($collection as $record) {
            CompanyContact::create($record);
        }
    }
}
