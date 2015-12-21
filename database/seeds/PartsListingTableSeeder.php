<?php

use App\Models\PartsListing;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartsListingTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('parts_listings')->delete();

        $collection = [
            [
                'ATA' => '21',
                'description' => 'actuator',
                'base_part_number' => '152305-2',
                'package_id' => 1
            ],
            [
                'ATA' => '21',
                'description' => 'air cooling fan',
                'base_part_number' => '732591D',
                'package_id' => 3
            ],
            [
                'ATA' => '21',
                'description' => 'heater',
                'base_part_number' => '8921560G5',
                'package_id' => 1
            ],
            [
                'ATA' => '22',
                'description' => 'lateral central control',
                'base_part_number' => '41007210-103',
                'package_id' => 2
            ],
            [
                'ATA' => '22',
                'description' => 'flight control comp FCC',
                'base_part_number' => '822-1261-101',
                'package_id' => 2
            ],
            [
                'ATA' => '22',
                'description' => 'accelerometer',
                'base_part_number' => '9000003-1',
                'package_id' => 2
            ],
            [
                'ATA' => '22',
                'description' => 'audio management unit',
                'base_part_number' => '1167014-144',
                'package_id' => 2
            ],
            [
                'ATA' => '23',
                'description' => 'audio control panel',
                'base_part_number' => '1167015-141',
                'package_id' => 3
            ],
            [
                'ATA' => '23',
                'description' => 'cabin service module',
                'base_part_number' => '1167018-140',
                'package_id' => 3
            ],
            [
                'ATA' => '23',
                'description' => 'video distribution unit',
                'base_part_number' => '1301820-101',
                'package_id' => 3
            ],
            [
                'ATA' => '23',
                'description' => 'digital media server',
                'base_part_number' => '1306619-101',
                'package_id' => 3
            ],
            [
                'ATA' => '23',
                'description' => 'antenna-high gain satco',
                'base_part_number' => '1333-200-201'
            ],
            [
                'ATA' => '23',
                'description' => 'cockpit voice recorder',
                'base_part_number' => '2100-1020-02',
                'package_id' => 1
            ],
            [
                'ATA' => '23',
                'description' => 'monitor 16"',
                'base_part_number' => '24-623228-002',
                'package_id' => 3
            ],
            [
                'ATA' => '23',
                'description' => 'satelite data unit-3-c',
                'base_part_number' => '822-0311-101'
            ],
            [
                'ATA' => '23',
                'description' => 'communication managemen',
                'base_part_number' => '965-0758-002'
            ],
            [
                'ATA' => '25',
                'description' => 'coffee maker',
                'base_part_number' => '425-0001-7',
                'package_id' => 3
            ],
            [
                'ATA' => '25',
                'description' => 'power drive unit-cargo',
                'base_part_number' => '747-5100-2-0',
                'package_id' => 2
            ],
            [
                'ATA' => '25',
                'description' => 'off wing/slide door',
                'base_part_number' => '7A1418-24',
                'package_id' => 1
            ],
            [
                'ATA' => '25',
                'description' => 'evacuation slide/raft d',
                'base_part_number' => '7A1467-21',
                'package_id' => 1
            ],
            [
                'ATA' => '25',
                'description' => 'espresso maker-dlh',
                'base_part_number' => 'AL-EX15-200E-21',
                'package_id' => 3
            ],
            [
                'ATA' => '25',
                'description' => 'master control unit',
                'base_part_number' => 'Z272H0000114',
                'package_id' => 1
            ],
            [
                'ATA' => '27',
                'description' => 'flap control unit',
                'base_part_number' => '285U0011-208',
                'package_id' => 1
            ],
            [
                'ATA' => '27',
                'description' => 'actuator flap control',
                'base_part_number' => '2B7-201E',
                'package_id' => 1
            ],
            [
                'ATA' => '27',
                'description' => 'speed brake control',
                'base_part_number' => '50196-7',
                'package_id' => 2
            ],
            [
                'ATA' => '28',
                'description' => 'motor apu fuel pump',
                'base_part_number' => '218387',
                'package_id' => 3
            ],
            [
                'ATA' => '28',
                'description' => 'fuel system management',
                'base_part_number' => '285U0018-203',
                'package_id' => 3
            ],
            [
                'ATA' => '28',
                'description' => 'fuel jettison control p',
                'base_part_number' => '285U0020-203'
            ],
            [
                'ATA' => '30',
                'description' => 'ice detector',
                'base_part_number' => '0871DL1',
                'package_id' => 2
            ],
            [
                'ATA' => '38',
                'description' => 'air compressor',
                'base_part_number' => '28823-1',
                'package_id' => 1
            ],
            [
                'ATA' => '73',
                'description' => 'fuel pump',
                'base_part_number' => '5006834M',
                'package_id' => 1
            ]
        ];

        foreach ($collection as $record) {
            PartsListing::create($record);
        }
    }
}
