<?php
use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ConditionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        DB::table('conditions')->delete();

        // Default Condition
        DB::table('conditions')->insert([
            'code' => 'AR',
            'description' => 'As Removed',
        ]);

        DB::table('conditions')->insert([
            'code' => 'NE',
            'description' => 'New Equipment',
        ]);

        DB::table('conditions')->insert([
            'code' => 'FN',
            'description' => 'Factory New',
        ]);

        DB::table('conditions')->insert([
            'code' => 'NS',
            'description' => 'New Surplus',
        ]);

        DB::table('conditions')->insert([
            'code' => 'SV',
            'description' => 'Servicable',
        ]);

        DB::table('conditions')->insert([
            'code' => 'OH',
            'description' => 'Overhaul Condition',
        ]);

        DB::table('conditions')->insert([
            'code' => 'OH CAP',
            'description' => 'Overhaul Capability',
        ]);

        DB::table('conditions')->insert([
            'code' => 'RP',
            'description' => 'Repairable',
        ]);

        DB::table('conditions')->insert([
            'code' => 'RP CAP',
            'description' => 'Repair Capability',
        ]);

        DB::table('conditions')->insert([
            'code' => 'REQUEST',
            'description' => 'The Seller would like specific conditions quoted by Buyers',
        ]);

        DB::table('conditions')->insert([
            'code' => 'Any Cond',
            'description' => 'Quote Any Condition',
        ]);

        DB::table('conditions')->insert([
            'code' => 'US',
            'description' => 'Used Surplus',
        ]);
    }
}
