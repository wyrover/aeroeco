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
                'active' => true
            ],
            [
                'chapter' => 12,
                'title' => 'SERVICING',
                'active' => true
            ],
            [
                'chapter' => 13,
                'title' => 'n/a',
                'active' => false
            ],
            [
                'chapter' => 14,
                'title' => 'HARDWARE',
                'active' => true
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
                'active' => true
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
                'active' => true
            ],
            [
                'chapter' => 22,
                'title' => 'AUTO FLIGHT',
                'active' => true
            ],
            [
                'chapter' => 23,
                'title' => 'COMMUNICATIONS',
                'active' => true
            ],
            [
                'chapter' => 24,
                'title' => 'ELECTRICAL POWER',
                'active' => true
            ],
            [
                'chapter' => 25,
                'title' => 'EQUIPMENT/FURNISHINGS',
                'active' => true
            ],
            [
                'chapter' => 26,
                'title' => 'FIRE PROTECTION',
                'active' => true
            ],
            [
                'chapter' => 27,
                'title' => 'FLIGHT CONTROLS',
                'active' => true
            ],
            [
                'chapter' => 28,
                'title' => 'FUEL',
                'active' => true
            ],
            [
                'chapter' => 29,
                'title' => 'HYDRAULIC POWER',
                'active' => true
            ],
            [
                'chapter' => 30,
                'title' => 'ICE AND RAIN PROTECTION',
                'active' => true
            ],
            [
                'chapter' => 31,
                'title' => 'INSTRUMENTS',
                'active' => true
            ],
            [
                'chapter' => 32,
                'title' => 'LANDING GEAR',
                'active' => true
            ],
            [
                'chapter' => 33,
                'title' => 'LIGHTS',
                'active' => true
            ],
            [
                'chapter' => 34,
                'title' => 'NAVIGATION',
                'active' => true
            ],
            [
                'chapter' => 35,
                'title' => 'OXYGEN',
                'active' => true
            ],
            [
                'chapter' => 36,
                'title' => 'PNEUMATIC',
                'active' => true
            ],
            [
                'chapter' => 37,
                'title' => 'ICE',
                'active' => true
            ],
            [
                'chapter' => 38,
                'title' => 'WATER/WASTE',
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
                'active' => true
            ],
            [
                'chapter' => 52,
                'title' => 'DOORS',
                'active' => true
            ],
            [
                'chapter' => 53,
                'title' => 'FUSELAGE',
                'active' => true
            ],
            [
                'chapter' => 54,
                'title' => 'NACELLES/PYLONS',
                'active' => true
            ],
            [
                'chapter' => 55,
                'title' => 'STABILIZERS',
                'active' => true
            ],
            [
                'chapter' => 56,
                'title' => 'WINDOWS',
                'active' => true
            ],
            [
                'chapter' => 57,
                'title' => 'WINGS',
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
                'active' => true
            ],
            [
                'chapter' => 62,
                'title' => 'MAIN ROTOR',
                'active' => true
            ],
            [
                'chapter' => 63,
                'title' => 'MAIN ROTOR DRIVE',
                'active' => true
            ],
            [
                'chapter' => 64,
                'title' => 'TAIL ROTOR',
                'active' => true
            ],
            [
                'chapter' => 65,
                'title' => 'TAIL ROTOR DRIVE',
                'active' => true
            ],
            [
                'chapter' => 66,
                'title' => 'n/a',
                'active' => false
            ],
            [
                'chapter' => 67,
                'title' => 'ROTORS FLIGHT CONTROL',
                'active' => true
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
                'active' => true
            ],
            [
                'chapter' => 72,
                'title' => 'TURBINE/TURBOPROP ENGINE ',
                'active' => true
            ],
            [
                'chapter' => 73,
                'title' => 'ENGINE FUEL AND CONTROL',
                'active' => true
            ],
            [
                'chapter' => 74,
                'title' => 'IGNITION',
                'active' => true
            ],
            [
                'chapter' => 75,
                'title' => 'AIR',
                'active' => true
            ],
            [
                'chapter' => 76,
                'title' => 'ENGINE CONTROLS',
                'active' => true
            ],
            [
                'chapter' => 77,
                'title' => 'ENGINE INDICATING',
                'active' => true
            ],
            [
                'chapter' => 78,
                'title' => 'ENGINE EXHAUST',
                'active' => true
            ],
            [
                'chapter' => 79,
                'title' => 'ENGINE OIL',
                'active' => true
            ],
            [
                'chapter' => 80,
                'title' => 'STARTING',
                'active' => true
            ],
            [
                'chapter' => 81,
                'title' => 'TURBOCHARGING',
                'active' => true
            ],
            [
                'chapter' => 82,
                'title' => 'WATER INJECTION',
                'active' => true
            ],
            [
                'chapter' => 83,
                'title' => 'ACCESSORY GEARBOXES',
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
                'active' => false
            ],
        ];

        foreach ($collection as $record) {
            Ata::create($record);
        }
    }
}