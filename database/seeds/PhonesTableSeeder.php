<?php

use App\Models\Phone;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhonesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('phones')->delete();

        $collection = [
            [
                'company_id' => 5,
                'phone' => '9016824064',
                'type' => 'work'
            ],
            [
                'company_id' => 6,
                'phone' => '9017592332',
                'type' => 'work'
            ],
            [
                'user_id' => 2,
                'phone' => '9012870209',
                'type' => 'mobile'
            ]
        ];

        foreach ($collection as $record) {
            Phone::create($record);
        }
    }
}
