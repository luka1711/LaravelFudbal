<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NovaKolonaDrzavaFligas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fudbalska_ligas', function (Blueprint $table) {
            $table->after('nivo', function ($table) {
                $table->string('drzava')->nullable();
            });

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fudbalska_ligas', function (Blueprint $table) {
            $table->dropColumn('drzava');
        });
    }
}
