<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreinwegTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treinweg', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('trein_id');
            $table->unsignedBigInteger('wegdiagram_id');
            
            // Foreign key constraints
            $table->foreign('trein_id')->references('id')->on('treinen');
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
        Schema::dropIfExists('treinweg');
    }
}
