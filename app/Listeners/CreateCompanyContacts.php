<?php

namespace App\Listeners;

use App\Events\CompanyWasCreated;
use App\Models\CompanyContact;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CreateCompanyContacts
{
    public function __construct()
    {
        //
    }

    public function handle(CompanyWasCreated $event)
    {
        $q = CompanyContact::create([
            'company_id' => $event->company->id,
            'contact_type_id' => 1
        ]);
        $r = CompanyContact::create([
            'company_id' => $event->company->id,
            'contact_type_id' => 2
        ]);
        $s = CompanyContact::create([
            'company_id' => $event->company->id,
            'contact_type_id' => 3
        ]);
        $t = CompanyContact::create([
            'company_id' => $event->company->id,
            'contact_type_id' => 4
        ]);
    }
}
