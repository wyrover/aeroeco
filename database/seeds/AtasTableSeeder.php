<?php
use App\Models\Ata;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AtasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        DB::table('atas')->delete();
        DB::unprepared(file_get_contents('database/seeds/imports/atas.sql'));
    }
}
