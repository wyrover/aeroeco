<?php

use App\Models\Package;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackagesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('packages')->delete();

        $collection = [
            [
                'name' => 'None',
                'level' => 0,
                'price' => 0
            ],[
                'name' => 'Basic',
                'level' => 1,
                'price' => 75000
            ],
            [
                'name' => 'Enhanced',
                'level' => 2,
                'price' => 100000
            ],
            [
                'name' => 'Supreme',
                'level' => 3,
                'price' => 150000
            ]
        ];

        foreach ($collection as $record) {
            Package::create($record);
        }
    }
}
