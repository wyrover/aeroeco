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
                'topic' => 'Article 1. Scope of Work',
                'slug' => 's02',
                'sort_order' => 2
            ],
            [
                'contract_type_id' => 1,
                'topic' => 'Article 2. Term of Agreement',
                'slug' => 's03',
                'sort_order' => 3
            ],
            [
                'contract_type_id' => 1,
                'topic' => 'Article 3. Standards of Service',
                'slug' => 's04',
                'sort_order' => 4
            ],
            [
                'contract_type_id' => 1,
                'topic' => 'Article 4. Materials',
                'slug' => 's05',
                'sort_order' => 5
            ],
            [
                'contract_type_id' => 1,
                'topic' => 'Article 5. Completion of Services',
                'slug' => 's06',
                'sort_order' => 6
            ],
            [
                'contract_type_id' => 1,
                'topic' => 'Article 6. Customer Furnished Data',
                'slug' => 's07',
                'sort_order' => 7
            ],
            [
                'contract_type_id' => 1,
                'topic' => 'Article 7. Invoicing & Payment',
                'slug' => 's08',
                'sort_order' => 8
            ],
            [
                'contract_type_id' => 1,
                'topic' => 'Article 8. Disassembly Services',
                'slug' => 's09',
                'sort_order' => 9
            ],
            [
                'contract_type_id' => 1,
                'topic' => 'Article 9. Engine Services',
                'slug' => 's10',
                'sort_order' => 10
            ],
            [
                'contract_type_id' => 1,
                'topic' => 'Article 10. Additional Services',
                'slug' => 's11',
                'sort_order' => 11
            ],
            [
                'contract_type_id' => 1,
                'topic' => 'Article 11. Insurance & Indemnification',
                'slug' => 's12',
                'sort_order' => 12
            ],
            [
                'contract_type_id' => 1,
                'topic' => 'Article 12. Notices, Communication & Requests',
                'slug' => 's13',
                'sort_order' => 13
            ],
            [
                'contract_type_id' => 1,
                'topic' => 'Article 13. Severability',
                'slug' => 's14',
                'sort_order' => 14
            ],
            [
                'contract_type_id' => 1,
                'topic' => 'Article 14. Termination',
                'slug' => 's15',
                'sort_order' => 15
            ],
            [
                'contract_type_id' => 1,
                'topic' => 'Article 15. Force Majeure & Excusable Delays',
                'slug' => 's16',
                'sort_order' => 16
            ],
            [
                'contract_type_id' => 1,
                'topic' => 'Article 16. Entire Agreement & Charges',
                'slug' => 's17',
                'sort_order' => 17
            ],
            [
                'contract_type_id' => 1,
                'topic' => 'Article 17. Brokers/Finders',
                'slug' => 's18',
                'sort_order' => 18
            ],
            [
                'contract_type_id' => 1,
                'topic' => 'Article 18. Governing Law & Disputes',
                'slug' => 's19',
                'sort_order' => 19
            ],
            [
                'contract_type_id' => 1,
                'topic' => 'Article 19. Miscellaneous',
                'slug' => 's20',
                'sort_order' => 20
            ],
            [
                'contract_type_id' => 1,
                'topic' => 'Article 20. Multiple Counterparts',
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
