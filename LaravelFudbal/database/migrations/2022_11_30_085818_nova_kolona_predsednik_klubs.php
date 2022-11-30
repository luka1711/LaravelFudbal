<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NovaKolonaPredsednikKlubs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('klubs', function (Blueprint $table) {
            $table->after('website', function ($table) {
                $table->string('predsednik')->unique();
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
        Schema::table('klubs', function (Blueprint $table) {
            $table->dropColumn('predsednik');
        });
    }
}
