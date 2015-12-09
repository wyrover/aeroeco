<?php

use App\Models\Message;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MessagesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('messages')->delete();

        $collection = [
            [
                'user_id' => 2,
                'sender' => 'George Clooney',
                'sender_email' => 'lead@hollywood.com',
                'message' => 'I am not sure where the trace documentation has gone. Do you know of a source where I can get another copy?'
            ],
            [
                'user_id' => 2,
                'sender' => 'Emma Watson',
                'sender_email' => 'hermione@potterworld.com',
                'message' => 'Although I have better offers, I will accept your proposal given that you will include a free upgrade to First Class for AeroEco.'
            ],
            [
                'user_id' => 2,
                'sender' => 'Robert Downey Jr.',
                'sender_email' => 'ironman@marvel.com',
                'message' => 'I am no longer interested. I have another source for my needs that is much more economic but I hope to do business with you in the very near future.'
            ],
            [
                'user_id' => 2,
                'sender' => 'Jason Vorhees',
                'sender_email' => 'mask@friday13.com',
                'message' => 'I will disassemble You with my axe when I meet you.',
                'status' => 'received'
            ]
        ];

        foreach ($collection as $record) {
            Message::create($record);
        }
    }
}
