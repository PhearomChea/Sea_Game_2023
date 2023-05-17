<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hall;

class HallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $all_hall = [
            [
                "hall_name"=>"National stadium",
                "stadium_id"=>1
            ],
            [
                "hall_name"=>"Olympic Swimming Pool",
                "stadium_id"=>1
            ],
            [
                "hall_name"=>"Table tennis Hall",
                "stadium_id"=>1
            ],
            [
                "hall_name"=>"Basketball Hall",
                "stadium_id"=>1
            ],
            [
                "hall_name"=>"Tennis Sports Center",
                "stadium_id"=>1
            ],
            [
                "hall_name"=>"Indoor Hall",
                "stadium_id"=>1
            ],
            [
                "hall_name"=>"Elephant Hall 1",
                "stadium_id"=>1
            ],
            [
                "hall_name"=>"Olympic Stadium",
                "stadium_id"=>5
            ],
            [
                "hall_name"=>"Army Stadium",
                "stadium_id"=>2
            ],
        ];
        foreach ($all_hall as $hall) {
            Hall::create($hall);
        };
    }
}
