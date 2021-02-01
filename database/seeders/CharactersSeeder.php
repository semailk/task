<?php

namespace Database\Seeders;

use App\Models\Character;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CharactersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 1; $i <= 100; $i++) {
            Character::factory()->create();
        }
    }
}
