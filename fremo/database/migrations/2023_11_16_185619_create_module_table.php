<?php
// database/migrations/xxxx_xx_xx_create_module_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModuleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('module', function (Blueprint $table) {
            $table->id();
            $table->string('Naam Bezitter');
            $table->string('Afkorting');
            $table->string('Nummer Module');
            $table->string('Naam/thema van de module');
            $table->string('Lengte 1 [mm]');
            $table->string('Lengte 2 [mm]');
            $table->string('Lengte 3 [mm]');
            $table->string('E+F');
            $table->string('Hoek [°]');
            $table->string('Straal [mm]');
            $table->string('Type eindprofiel 1');
            $table->string('Type eindprofiel 2');
            $table->string('Bovenbouw (rails)');
            $table->string('Opmerkingen, bijzonderheden');
            $table->string('Aantal sporen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('module');
    }
}
