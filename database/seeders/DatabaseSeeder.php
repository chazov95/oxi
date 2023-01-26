<?php

namespace Database\Seeders;

use App\Models\Level;
use App\Models\Premises;
use App\Models\Build;
use App\Models\Room;
use App\Models\Zone;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Build::factory(5)->create();
        Level::factory(100)->create();
        Zone::factory(400)->create();
        Room::factory(1000)->create();
    }
}
