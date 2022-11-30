<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ObrisiKolonuTelefonIgracs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('igracs', function (Blueprint $table) {
            $table->dropColumn('telefon');
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
            $table->after('email', function ($table) {
                $table->string('telefon');
            });

        });
    }
}
