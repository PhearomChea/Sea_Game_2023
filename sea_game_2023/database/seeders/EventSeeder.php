<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = [
            [
                'event_name'=>'Men Football',
                'date'=>'2023-05-15',
                'time_start'=>'03:30:00',
                'number_standA'=>5,
                'number_standB'=>10,
                'sport_id'=> 1,
                'hall_id'=> 8,
            ],
            [
                'event_name'=>'Women Football',
                'date'=>'2023-05-18',
                'time_start'=>'03:30:00',
                'number_standA'=>10,
                'number_standB'=>20,
                'sport_id'=> 7,
                'hall_id'=> 9,
            ],
        ];
        foreach($events as $event){
            Event::create($event);
        }
    }
}
