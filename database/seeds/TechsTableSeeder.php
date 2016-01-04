<?php

use App\Models\Tech;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TechsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('techs')->delete();

        $collection = [
            [
                'disassemblers_id' => 1,
                'team_id' => 2,
                'firstname' => 'Peter',
                'lastname' => 'Parker',
                'phone' => '6159991000',
                'email' => 'pparker@technicians.org',
                'title' => 'SpiderMan'
            ],
            [
                'disassemblers_id' => 1,
                'team_id' => 2,
                'firstname' => 'Tony',
                'lastname' => 'Stark',
                'phone' => '7029991000',
                'email' => 'tstark@technicians.org',
                'title' => 'IronMan'
            ],
            [
                'disassemblers_id' => 1,
                'team_id' => 2,
                'firstname' => 'Clint',
                'lastname' => 'Barton',
                'phone' => '3109991000',
                'email' => 'cbarton@technicians.org',
                'title' => 'Hawkeye'
            ],
            [
                'disassemblers_id' => 1,
                'team_id' => 3,
                'firstname' => 'Rachael',
                'lastname' => 'Roth',
                'phone' => '2109991000',
                'email' => 'rroth@technicians.org',
                'title' => 'Raven'
            ],
            [
                'disassemblers_id' => 1,
                'team_id' => 3,
                'firstname' => 'Diana',
                'lastname' => 'Prince',
                'phone' => '9019991000',
                'email' => 'dprince@technicians.org',
                'title' => 'Wonder Woman'
            ],
            [
                'disassemblers_id' => 1,
                'team_id' => 3,
                'firstname' => 'Barry',
                'lastname' => 'Allen',
                'phone' => '3029991000',
                'email' => 'ballen@technicians.org',
                'title' => 'Flash'
            ],
            [
                'disassemblers_id' => 1,
                'team_id' => 3,
                'firstname' => 'Donald',
                'lastname' => 'Blake',
                'phone' => '8889991000',
                'email' => 'dblake@technicians.org',
                'title' => 'Thor'
            ],
            [
                'disassemblers_id' => 1,
                'team_id' => 3,
                'firstname' => 'Bruce',
                'lastname' => 'Banner',
                'phone' => '1909991000',
                'email' => 'bbanner@technicians.org',
                'title' => 'Hulk'
            ],
            [
                'disassemblers_id' => 1,
                'team_id' => 4,
                'firstname' => 'Steve',
                'lastname' => 'Rogers',
                'phone' => '7779991000',
                'email' => 'srogers@technicians.org',
                'title' => 'Captain America'
            ],
            [
                'disassemblers_id' => 1,
                'team_id' => 4,
                'firstname' => 'Kate',
                'lastname' => 'Manzer',
                'phone' => '5169991000',
                'email' => 'kmanzer@technicians.org',
                'title' => 'Hawkgirl'
            ],
            [
                'disassemblers_id' => 1,
                'team_id' => 4,
                'firstname' => 'Billy',
                'lastname' => 'Batson',
                'phone' => '1099991000',
                'email' => 'bbatson@technicians.org',
                'title' => 'Shazam'
            ],
            [
                'disassemblers_id' => 1,
                'team_id' => 4,
                'firstname' => 'Sharon',
                'lastname' => 'Carter',
                'phone' => '7209991000',
                'email' => 'scarter@technicians.org',
                'title' => 'Agent 13'
            ],
            [
                'disassemblers_id' => 1,
                'team_id' => 1,
                'firstname' => 'Ray',
                'lastname' => 'Palmer',
                'phone' => '7209991050',
                'email' => 'rpalmer@technicians.org',
                'title' => 'The Atom'
            ]
        ];

        foreach ($collection as $record) {
            Tech::create($record);
        }
    }
}
