<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\FudbalskaLigaSeeder;
use Database\Seeders\KlubSeeder;
use Database\Seeders\IgracSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $fl = new FudbalskaLigaSeeder();
        $kl = new KlubSeeder();
        $ig = new IgracSeeder();

        $fl->run();
        $kl->run();
        $ig->run();

    }
}
