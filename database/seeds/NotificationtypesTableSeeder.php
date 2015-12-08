<?php

use App\Models\Notificationtype;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotificationtypesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('notification_types')->delete();

        $collection = [
            [
                'type' => 'comment',
                'icon' => 'comment'
            ],
            [
                'type' => 'registration',
                'icon' => 'plus'
            ],
            [
                'type' => 'message',
                'icon' => 'envelope'
            ],
            [
                'type' => 'auction',
                'icon' => 'shopping-cart'
            ],
            [
                'type' => 'watchlist',
                'icon' => 'eye'
            ],
        ];

        foreach ($collection as $record) {
            Notificationtype::create($record);
        }
    }
}
