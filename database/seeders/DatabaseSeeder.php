<?php

namespace Database\Seeders;

use App\Models\Premises;
use App\Models\Build;
use App\Models\Room;
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
        //Premises::factory(50)->create();
        Room::factory(50)->create();
    }
}
