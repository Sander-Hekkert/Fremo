<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWegdiagramTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wegdiagram', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_id');
            $table->dateTime('starttijd');
            $table->dateTime('eindtijd');
            $table->string('status');
            $table->unsignedBigInteger('treinweg_id');
            $table->unsignedBigInteger('stationweg_id');
            
            // Foreign key constraints
            $table->foreign('project_id')->references('id')->on('projects');
            $table->foreign('treinweg_id')->references('id')->on('treinwegen');
            $table->foreign('stationweg_id')->references('id')->on('stationwegen');

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
        Schema::dropIfExists('wegdiagram');
    }
}
