<?php

namespace Database\Seeders;

use App\Models\Team;

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
        Team::factory(5)->create();
    }
}
