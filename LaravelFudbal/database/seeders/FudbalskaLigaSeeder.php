<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FudbalskaLiga;

class FudbalskaLigaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FudbalskaLiga::factory()->count(29)->create();
    }
}
