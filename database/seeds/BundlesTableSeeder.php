<?php

use App\Models\Bundle;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BundlesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('bundles')->delete();

        $collection = [
            [
                'name' => 'Small',
                'description' => 'Left Wing and Avionics',
                'color' => '#3f8dc6',
                'cost' => 75000,
                'value' => 200000
            ],
            [
                'name' => 'Large',
                'description' => 'Left Wing, Right Wing and Avionics',
                'color' => '#c6783f',
                'cost' => 100000,
                'value' => 300000
            ],
            [
                'name' => 'Super Size',
                'description' => 'Left Wing, Right, Avionics and Interior',
                'color' => '#783fc6',
                'cost' => 150000,
                'value' => 1000000
            ]
        ];

        foreach ($collection as $record) {
            Bundle::create($record);
        }
    }
}