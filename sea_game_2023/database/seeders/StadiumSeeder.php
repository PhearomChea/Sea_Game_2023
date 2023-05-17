<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Stadium;

class StadiumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $all_stadium = ([
            [
                'stadium_name'=>'Morodok Techo',
                'stadium_address'=>'Phnom Penh',
            ],
            [
                'stadium_name'=>'Army Stadium',
                'stadium_address'=>'Phnom Penh',
            ],
            [
                'stadium_name'=>'Prince Stadium',
                'stadium_address'=>'Phnom Penh',
            ],
            [
                'stadium_name'=>'Smart RSN Stadium',
                'stadium_address'=>'Phnom Penh',
            ],
            [
                'stadium_name'=>'Olympic Stadium',
                'stadium_address'=>'Phnom Penh',
            ],
        ]);
        foreach($all_stadium as $stadium){
            Stadium::create($stadium);
        };
    }
}
