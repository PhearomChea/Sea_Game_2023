<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sport;

class SportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $all_sports = ([
            [
                'sport_name' => 'men football'
            ],
            [
                'sport_name' => 'tennis'
            ],
            [
                'sport_name' => 'men Kun Khmer'
            ],
            [
                'sport_name' => 'Kick Bocking'
            ],
            [
                'sport_name' => 'men voleyball'
            ],
            [
                'sport_name' => 'women voleyball'
            ],
            [
                'sport_name' => 'women football'
            ],
        ]);
        foreach($all_sports as $value){
            Sport::create($value);
        }
    }
}
