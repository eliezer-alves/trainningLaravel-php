<?php

namespace Database\Seeders;

use App\Models\Team;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try {
            DB::beginTransaction();
            Team::Factory()->create();
            DB::commit();
        } catch (Exception $e) {
            DB::rolback();
        }
    }
}
