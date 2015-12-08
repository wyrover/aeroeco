<?php

use App\Models\Notification;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotificationsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('notifications')->delete();

        $collection = [
            [
                'type_id' => 1,
                'user_id' => 2,
                'message' => 'New comment on selling with ADC'
            ],
            [
                'type_id' => 3,
                'user_id' => 2,
                'message' => 'New message from George'
            ],
            [
                'type_id' => 1,
                'user_id' => 2,
                'message' => 'New comment on selling with ADC',
                'status' => 'complete'
            ],
            [
                'type_id' => 4,
                'user_id' => 2,
                'message' => 'Watched auction closing'
            ],
            [
                'type_id' => 5,
                'user_id' => 2,
                'message' => 'Watchlist inventory received.'
            ]
        ];

        foreach ($collection as $record) {
            Notification::create($record);
        }
    }
}
