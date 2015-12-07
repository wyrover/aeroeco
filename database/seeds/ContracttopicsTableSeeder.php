<?php

use App\Models\Contracttopic;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContracttopicsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('contract_topics')->delete();

        $collection = [
            [
                'contract_type_id' => 1,
                'topic' => 'Introduction',
                'slug' => 's01',
                'sort_order' => 1
            ],
            [
                'contract_type_id' => 1,
                'topic' => 'Scope of Work',
                'slug' => 's02',
                'sort_order' => 2
            ],
            [
                'contract_type_id' => 1,
                'topic' => 'Term of Agreement',
                'slug' => 's03',
                'sort_order' => 3
            ],
            [
                'contract_type_id' => 1,
                'topic' => 'Standards of Service',
                'slug' => 's04',
                'sort_order' => 4
            ],
            [
                'contract_type_id' => 1,
                'topic' => 'Materials',
                'slug' => 's05',
                'sort_order' => 5
            ],
            [
                'contract_type_id' => 1,
                'topic' => 'Completion of Services',
                'slug' => 's06',
                'sort_order' => 6
            ],
            [
                'contract_type_id' => 1,
                'topic' => 'Customer Furnished Data',
                'slug' => 's07',
                'sort_order' => 7
            ],
            [
                'contract_type_id' => 1,
                'topic' => 'Invoicing & Payment',
                'slug' => 's08',
                'sort_order' => 8
            ],
            [
                'contract_type_id' => 1,
                'topic' => 'Disassembly Services',
                'slug' => 's09',
                'sort_order' => 9
            ],
            [
                'contract_type_id' => 1,
                'topic' => 'Engine Services',
                'slug' => 's10',
                'sort_order' => 10
            ],
            [
                'contract_type_id' => 1,
                'topic' => 'Additional Services',
                'slug' => 's11',
                'sort_order' => 11
            ],
            [
                'contract_type_id' => 1,
                'topic' => 'Insurance & Indemnification',
                'slug' => 's12',
                'sort_order' => 12
            ],
            [
                'contract_type_id' => 1,
                'topic' => 'Notices, Communication & Requests',
                'slug' => 's13',
                'sort_order' => 13
            ],
            [
                'contract_type_id' => 1,
                'topic' => 'Severability',
                'slug' => 's14',
                'sort_order' => 14
            ],
            [
                'contract_type_id' => 1,
                'topic' => 'Termination',
                'slug' => 's15',
                'sort_order' => 15
            ],
            [
                'contract_type_id' => 1,
                'topic' => 'Force Majeure & Excusable Delays',
                'slug' => 's16',
                'sort_order' => 16
            ],
            [
                'contract_type_id' => 1,
                'topic' => 'Entire Agreement & Charges',
                'slug' => 's17',
                'sort_order' => 17
            ],
            [
                'contract_type_id' => 1,
                'topic' => 'Brokers/Finders',
                'slug' => 's18',
                'sort_order' => 18
            ],
            [
                'contract_type_id' => 1,
                'topic' => 'Governing Law & Dispute',
                'slug' => 's19',
                'sort_order' => 19
            ],
            [
                'contract_type_id' => 1,
                'topic' => 'Miscellaneous',
                'slug' => 's20',
                'sort_order' => 20
            ],
            [
                'contract_type_id' => 1,
                'topic' => 'Multiple Counterparts',
                'slug' => 's21',
                'sort_order' => 21
            ],
            [
                'contract_type_id' => 1,
                'topic' => 'Appendix A-1: Equipment Information',
                'slug' => 's22',
                'sort_order' => 22
            ],
            [
                'contract_type_id' => 1,
                'topic' => 'Appendix B-1: Fee Schedule',
                'slug' => 's23',
                'sort_order' => 23
            ],
            [
                'contract_type_id' => 1,
                'topic' => 'Appendix C-1: Work Scope',
                'slug' => 's24',
                'sort_order' => 24
            ],
            [
                'contract_type_id' => 1,
                'topic' => 'Appendix D-1: Delivery Acceptance',
                'slug' => 's25',
                'sort_order' => 25
            ],
            [
                'contract_type_id' => 1,
                'topic' => 'Appendix E-1: Scrap Bill of Sale',
                'slug' => 's26',
                'sort_order' => 26
            ],
            [
                'contract_type_id' => 1,
                'topic' => 'Exhibit 1: Removal Tag',
                'slug' => 's27',
                'sort_order' => 27
            ],
            [
                'contract_type_id' => 1,
                'topic' => 'Exhibit 2: Receiving Report',
                'slug' => 's28',
                'sort_order' => 28
            ],
            [
                'contract_type_id' => 1,
                'topic' => 'Exhibit 3: Additional Work Authorization',
                'slug' => 's29',
                'sort_order' => 29
            ],
            [
                'contract_type_id' => 1,
                'topic' => 'Exhibit 4: ADC Wire Transfer Instructions',
                'slug' => 's30',
                'sort_order' => 30
            ],
            [
                'contract_type_id' => 1,
                'topic' => 'Exhibit 5: Prior Permission Required Form (PPR)',
                'slug' => 's31',
                'sort_order' => 31
            ]
        ];

        foreach ($collection as $record) {
            Contracttopic::create($record);
        }
    }
}
