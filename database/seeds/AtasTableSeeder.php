<?php
use App\Models\Ata;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AtasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('atas')->delete();

        $collection = [
            [
                'chapter' => 1,
                'title' => 'n/a',
                'active' => false
            ],
            [
                'chapter' => 2,
                'title' => 'n/a',
                'active' => false
            ],
            [
                'chapter' => 3,
                'title' => 'n/a',
                'active' => false
            ],
            [
                'chapter' => 4,
                'title' => 'n/a',
                'active' => false
            ],
            [
                'chapter' => 5,
                'title' => 'n/a',
                'active' => false
            ],
            [
                'chapter' => 6,
                'title' => 'n/a',
                'active' => false
            ],
            [
                'chapter' => 7,
                'title' => 'n/a',
                'active' => false
            ],
            [
                'chapter' => 8,
                'title' => 'n/a',
                'active' => false
            ],
            [
                'chapter' => 9,
                'title' => 'n/a',
                'active' => false
            ],
            [
                'chapter' => 10,
                'title' => 'n/a',
                'active' => false
            ],
            [
                'chapter' => 11,
                'title' => 'PLACARDS AND MARKINGS',
                'slug' => 'placards',
                'active' => false
            ],
            [
                'chapter' => 12,
                'title' => 'SERVICING',
                'slug' => 'servicing',
                'active' => false
            ],
            [
                'chapter' => 13,
                'title' => 'n/a',
                'active' => false
            ],
            [
                'chapter' => 14,
                'title' => 'HARDWARE',
                'slug' => 'hardware',
                'active' => false
            ],
            [
                'chapter' => 15,
                'title' => 'n/a',
                'active' => false
            ],
            [
                'chapter' => 16,
                'title' => 'n/a',
                'active' => false
            ],
            [
                'chapter' => 17,
                'title' => 'n/a',
                'active' => false
            ],
            [
                'chapter' => 18,
                'title' => 'HELICOPTER VIBRATION',
                'slug' => 'helicopter',
                'active' => false
            ],
            [
                'chapter' => 19,
                'title' => 'n/a',
                'active' => false
            ],
            [
                'chapter' => 20,
                'title' => 'n/a',
                'active' => false
            ],
            [
                'chapter' => 21,
                'title' => 'AIR CONDITIONING',
                'slug' => 'air_conditioning',
                'active' => true
            ],
            [
                'chapter' => 22,
                'title' => 'AUTO FLIGHT',
                'slug' => 'auto_flight',
                'active' => true
            ],
            [
                'chapter' => 23,
                'title' => 'COMMUNICATIONS',
                'slug' => 'communications',
                'active' => true
            ],
            [
                'chapter' => 24,
                'title' => 'ELECTRICAL POWER',
                'slug' => 'electrical_power',
                'active' => true
            ],
            [
                'chapter' => 25,
                'title' => 'EQUIPMENT/FURNISHINGS',
                'slug' => 'equipment',
                'active' => true
            ],
            [
                'chapter' => 26,
                'title' => 'FIRE PROTECTION',
                'slug' => 'fire_protection',
                'active' => true
            ],
            [
                'chapter' => 27,
                'title' => 'FLIGHT CONTROLS',
                'slug' => 'flight_controls',
                'active' => true
            ],
            [
                'chapter' => 28,
                'title' => 'FUEL',
                'slug' => 'fuel',
                'active' => true
            ],
            [
                'chapter' => 29,
                'title' => 'HYDRAULIC POWER',
                'slug' => 'hydraulic_power',
                'active' => true
            ],
            [
                'chapter' => 30,
                'title' => 'ICE AND RAIN PROTECTION',
                'slug' => 'ice_and_rain',
                'active' => true
            ],
            [
                'chapter' => 31,
                'title' => 'INSTRUMENTS',
                'slug' => 'instruments',
                'active' => true
            ],
            [
                'chapter' => 32,
                'title' => 'LANDING GEAR',
                'slug' => 'landing_gear',
                'active' => true
            ],
            [
                'chapter' => 33,
                'title' => 'LIGHTS',
                'slug' => 'lights',
                'active' => true
            ],
            [
                'chapter' => 34,
                'title' => 'NAVIGATION',
                'slug' => 'navigation',
                'active' => true
            ],
            [
                'chapter' => 35,
                'title' => 'OXYGEN',
                'slug' => 'oxygen',
                'active' => true
            ],
            [
                'chapter' => 36,
                'title' => 'PNEUMATIC',
                'slug' => 'pneumatic',
                'active' => true
            ],
            [
                'chapter' => 37,
                'title' => 'ICE',
                'slug' => 'ice',
                'active' => true
            ],
            [
                'chapter' => 38,
                'title' => 'WATER/WASTE',
                'slug' => 'water_waste',
                'active' => true
            ],
            [
                'chapter' => 39,
                'title' => 'n/a',
                'active' => false
            ],
            [
                'chapter' => 40,
                'title' => 'n/a',
                'active' => false
            ],
            [
                'chapter' => 41,
                'title' => 'n/a',
                'active' => false
            ],
            [
                'chapter' => 42,
                'title' => 'n/a',
                'active' => false
            ],
            [
                'chapter' => 43,
                'title' => 'n/a',
                'active' => false
            ],
            [
                'chapter' => 44,
                'title' => 'n/a',
                'active' => false
            ],
            [
                'chapter' => 45,
                'title' => 'CENTRAL MAINT. SYSTEM',
                'slug' => 'central_maintenance',
                'active' => true
            ],
            [
                'chapter' => 46,
                'title' => 'n/a',
                'active' => false
            ],
            [
                'chapter' => 47,
                'title' => 'n/a',
                'active' => false
            ],
            [
                'chapter' => 48,
                'title' => 'n/a',
                'active' => false
            ],
            [
                'chapter' => 49,
                'title' => 'AIRBORNE AUXILIARY POWER ',
                'slug' => 'airborne_auxilary',
                'active' => true
            ],
            [
                'chapter' => 50,
                'title' => 'n/a',
                'active' => false
            ],
            [
                'chapter' => 51,
                'title' => 'STANDARD PRACTICES/STRUCTURES',
                'slug' => 'structures',
                'active' => true
            ],
            [
                'chapter' => 52,
                'title' => 'DOORS',
                'slug' => 'doors',
                'active' => true
            ],
            [
                'chapter' => 53,
                'title' => 'FUSELAGE',
                'slug' => 'fuselage',
                'active' => true
            ],
            [
                'chapter' => 54,
                'title' => 'NACELLES/PYLONS',
                'slug' => 'nacelles',
                'active' => true
            ],
            [
                'chapter' => 55,
                'title' => 'STABILIZERS',
                'slug' => 'stabalizers',
                'active' => true
            ],
            [
                'chapter' => 56,
                'title' => 'WINDOWS',
                'slug' => 'windows',
                'active' => true
            ],
            [
                'chapter' => 57,
                'title' => 'WINGS',
                'slug' => 'wings',
                'active' => true
            ],
            [
                'chapter' => 58,
                'title' => 'n/a',
                'active' => false
            ],
            [
                'chapter' => 59,
                'title' => 'n/a',
                'active' => false
            ],
            [
                'chapter' => 60,
                'title' => 'n/a',
                'active' => false
            ],
            [
                'chapter' => 61,
                'title' => 'PROPELLERS/PROPULSORS',
                'slug' => 'propellers',
                'active' => true
            ],
            [
                'chapter' => 62,
                'title' => 'MAIN ROTOR',
                'slug' => 'main_rotor',
                'active' => false
            ],
            [
                'chapter' => 63,
                'title' => 'MAIN ROTOR DRIVE',
                'slug' => 'main_rotor_drive',
                'active' => false
            ],
            [
                'chapter' => 64,
                'title' => 'TAIL ROTOR',
                'slug' => 'tail_rotor',
                'active' => false
            ],
            [
                'chapter' => 65,
                'title' => 'TAIL ROTOR DRIVE',
                'slug' => 'tail_rotor_drive',
                'active' => false
            ],
            [
                'chapter' => 66,
                'title' => 'n/a',
                'active' => false
            ],
            [
                'chapter' => 67,
                'title' => 'ROTORS FLIGHT CONTROL',
                'slug' => 'rotors_flight_control',
                'active' => false
            ],
            [
                'chapter' => 68,
                'title' => 'n/a',
                'active' => false
            ],
            [
                'chapter' => 69,
                'title' => 'n/a',
                'active' => false
            ],
            [
                'chapter' => 70,
                'title' => 'n/a',
                'active' => false
            ],
            [
                'chapter' => 71,
                'title' => 'POWERPLANT',
                'slug' => 'powerplant',
                'active' => true
            ],
            [
                'chapter' => 72,
                'title' => 'TURBINE/TURBOPROP ENGINE ',
                'slug' => 'turnbine',
                'active' => true
            ],
            [
                'chapter' => 73,
                'title' => 'ENGINE FUEL AND CONTROL',
                'slug' => 'fuel_and_control',
                'active' => true
            ],
            [
                'chapter' => 74,
                'title' => 'IGNITION',
                'slug' => 'ignition',
                'active' => true
            ],
            [
                'chapter' => 75,
                'title' => 'AIR',
                'slug' => 'air',
                'active' => true
            ],
            [
                'chapter' => 76,
                'title' => 'ENGINE CONTROLS',
                'slug' => 'engine_controls',
                'active' => true
            ],
            [
                'chapter' => 77,
                'title' => 'ENGINE INDICATING',
                'slug' => 'engine_indicating',
                'active' => true
            ],
            [
                'chapter' => 78,
                'title' => 'ENGINE EXHAUST',
                'slug' => 'engine_exhaust',
                'active' => true
            ],
            [
                'chapter' => 79,
                'title' => 'ENGINE OIL',
                'slug' => 'engine_oil',
                'active' => true
            ],
            [
                'chapter' => 80,
                'title' => 'STARTING',
                'slug' => 'starting',
                'active' => true
            ],
            [
                'chapter' => 81,
                'title' => 'TURBOCHARGING',
                'slug' => 'turbocharging',
                'active' => true
            ],
            [
                'chapter' => 82,
                'title' => 'WATER INJECTION',
                'slug' => 'water_injection',
                'active' => true
            ],
            [
                'chapter' => 83,
                'title' => 'ACCESSORY GEARBOXES',
                'slug' => 'accessory_gearboxes',
                'active' => true
            ],
            [
                'chapter' => 84,
                'title' => 'n/a',
                'active' => false
            ],
            [
                'chapter' => 85,
                'title' => 'RECIPROCATING ENGINE',
                'slug' => 'reciprocating_engine',
                'active' => false
            ],
        ];

        foreach ($collection as $record) {
            Ata::create($record);
        }
    }
}