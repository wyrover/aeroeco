<?php

use App\Models\Aircraft;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AircraftsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('aircrafts')->delete();

        $collection = [
            [
                'model' => 'Airbus A300',
                'engine_count' => 2,
                'manufacturer' => 'Airbus'
            ],
            [
                'model' => 'Airbus A310',
                'engine_count' => 2,
                'manufacturer' => 'Airbus'
            ],
            [
                'model' => 'Airbus A318',
                'engine_count' => 2,
                'manufacturer' => 'Airbus'
            ],
            [
                'model' => 'Airbus A319',
                'engine_count' => 2,
                'manufacturer' => 'Airbus'
            ],
            [
                'model' => 'Airbus A320',
                'engine_count' => 1,
                'manufacturer' => 'Airbus'
            ],
            [
                'model' => 'Airbus A321',
                'engine_count' => 2,
                'manufacturer' => 'Airbus'
            ],
            [
                'model' => 'Airbus A330',
                'engine_count' => 2,
                'manufacturer' => 'Airbus'
            ],
            [
                'model' => 'Airbus A340',
                'engine_count' => 4,
                'manufacturer' => 'Airbus'
            ],
            [
                'model' => 'Airbus A350',
                'engine_count' => 2,
                'manufacturer' => 'Airbus'
            ],
            [
                'model' => 'Airbus A380',
                'engine_count' => 4,
                'manufacturer' => 'Airbus'
            ],
            [
                'model' => 'B737-700',
                'engine_count' => 2,
                'manufacturer' => 'Boeing'
            ],
            [
                'model' => 'B737-800',
                'engine_count' => 2,
                'manufacturer' => 'Boeing'
            ],
            [
                'model' => 'B737-900ER',
                'engine_count' => 2,
                'manufacturer' => 'Boeing'
            ],
            [
                'model' => 'B737-AEW&C',
                'engine_count' => 2,
                'manufacturer' => 'Boeing'
            ],
            [
                'model' => 'B737-BBJ',
                'engine_count' => 2,
                'manufacturer' => 'Boeing'
            ],
            [
                'model' => 'B737-C-40',
                'engine_count' => 2,
                'manufacturer' => 'Boeing'
            ],
            [
                'model' => 'B737-P-8',
                'engine_count' => 2,
                'manufacturer' => 'Boeing'
            ],
            [
                'model' => 'B747-100',
                'engine_count' => 4,
                'manufacturer' => 'Boeing'
            ],
            [
                'model' => 'B747-200',
                'engine_count' => 4,
                'manufacturer' => 'Boeing'
            ],
            [
                'model' => 'B747-300',
                'engine_count' => 4,
                'manufacturer' => 'Boeing'
            ],
            [
                'model' => 'B747-400',
                'engine_count' => 4,
                'manufacturer' => 'Boeing'
            ],
            [
                'model' => 'B747-8',
                'engine_count' => 4,
                'manufacturer' => 'Boeing'
            ],
            [
                'model' => 'B747-8F',
                'engine_count' => 4,
                'manufacturer' => 'Boeing'
            ],
            [
                'model' => 'B747-8I',
                'engine_count' => 4,
                'manufacturer' => 'Boeing'
            ],
            [
                'model' => 'B747-BBJ',
                'engine_count' => 4,
                'manufacturer' => 'Boeing'
            ],
            [
                'model' => 'B767-300F',
                'engine_count' => 2,
                'manufacturer' => 'Boeing'
            ],
            [
                'model' => 'B767-KC-46',
                'engine_count' => 2,
                'manufacturer' => 'Boeing'
            ],
            [
                'model' => 'B767-KC-767',
                'engine_count' => 2,
                'manufacturer' => 'Boeing'
            ],
            [
                'model' => 'B777-1209',
                'engine_count' => 2,
                'manufacturer' => 'Boeing'
            ],
            [
                'model' => 'B777-200',
                'engine_count' => 2,
                'manufacturer' => 'Boeing'
            ],[
                'model' => 'B777-200ER',
                'engine_count' => 2,
                'manufacturer' => 'Boeing'
            ],[
                'model' => 'B777-200LR',
                'engine_count' => 2,
                'manufacturer' => 'Boeing'
            ],[
                'model' => 'B777-300',
                'engine_count' => 2,
                'manufacturer' => 'Boeing'
            ],[
                'model' => 'B777-300ER',
                'engine_count' => 2,
                'manufacturer' => 'Boeing'
            ],
            [
                'model' => 'B777-F',
                'engine_count' => 2,
                'manufacturer' => 'Boeing'
            ],
            [
                'model' => 'B787-10',
                'engine_count' => 2,
                'manufacturer' => 'Boeing'
            ],
            [
                'model' => 'B787-8',
                'engine_count' => 2,
                'manufacturer' => 'Boeing'
            ],
            [
                'model' => 'B787-9',
                'engine_count' => 2,
                'manufacturer' => 'Boeing'
            ],
            [
                'model' => 'B787-BBJ',
                'engine_count' => 2,
                'manufacturer' => 'Boeing'
            ],
        ];

        foreach ($collection as $record) {
            Aircraft::create($record);
        }
    }
}
