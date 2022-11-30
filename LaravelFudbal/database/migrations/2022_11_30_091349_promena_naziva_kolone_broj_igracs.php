<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PromenaNazivaKoloneBrojIgracs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('igracs', function (Blueprint $table) {
            $table->renameColumn('broj', 'broj_na_dresu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('igracs', function (Blueprint $table) {
            $table->renameColumn('broj_na_dresu', 'broj');
            
        });
    }
}
