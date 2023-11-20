<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStationwegTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stationweg', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('station_id');
            $table->unsignedBigInteger('wegdiagram_id');
            $table->integer('positie');
            
            // Foreign key constraints
            $table->foreign('station_id')->references('id')->on('stations');
            $table->foreign('wegdiagram_id')->references('id')->on('wegdiagram');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stationweg');
    }
}
