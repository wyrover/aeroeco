<?php
use App\Models\Countries;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        DB::table('countries')->delete();
        DB::unprepared(file_get_contents('database/seeds/imports/countries.sql'));
    }
}
