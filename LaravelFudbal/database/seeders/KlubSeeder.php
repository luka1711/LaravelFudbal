<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Klub;

class KlubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Klub::factory()->count(35)->create();
    }
}
