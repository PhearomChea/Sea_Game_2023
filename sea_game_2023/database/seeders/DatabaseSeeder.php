<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sport;
use App\Models\Stadium;
use App\Models\Hall;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(SportSeeder::class);
        $this->call(StadiumSeeder::class);
        $this->call(HallSeeder::class);
        $this->call(EventSeeder::class);
        $this->call(MatchingSeeder::class);
    }
}
