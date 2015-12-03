<?php

use App\Models\Systemic;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SystemicsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('systemics')->delete();

        $collection = [
            [
                'user_id' => '2',
                'event' => 'User jongravois@gmail.com logged in to system.'
            ]
        ];

        foreach ($collection as $record) {
            Systemic::create($record);
        }
    }
}
