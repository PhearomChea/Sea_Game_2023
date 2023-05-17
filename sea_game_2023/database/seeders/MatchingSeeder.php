<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Matching;

class MatchingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $all_matching = [
            [
                'home_country'=>'Indonesia',
                'away_country'=>'Myanmar',
                'time_start'=>'03:30:00',
                'event_id'=> 1
            ],
            [
                'home_country'=>'Cambodia',
                'away_country'=>'Timor',
                'time_start'=>'07:00:00',
                'event_id'=> 1
            ],
            [
                'home_country'=>'Vietnam',
                'away_country'=>'Myanmar',
                'time_start'=>'03:30:00',
                'event_id'=> 2
            ],
            [
                'home_country'=>'Laos',
                'away_country'=>'Cambodia',
                'time_start'=>'07:00:00',
                'event_id'=> 2
            ],
        ];
        foreach ($all_matching as $matching) {
            Matching::create($matching);
        }
    }
}
