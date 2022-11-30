<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Igrac;

class IgracSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Igrac::factory()->count(32)->create();
    }
}
