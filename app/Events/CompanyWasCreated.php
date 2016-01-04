<?php

namespace App\Events;

use App\Events\Event;
use App\Models\Company;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class CompanyWasCreated extends Event
{
    use SerializesModels;

    public $company;

    public function __construct(Company $company)
    {
        $this->company = $company;
    }

    public function broadcastOn()
    {
        return [];
    }
}
