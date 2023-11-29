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
            $table->unsignedBigInteger('projects_id');
            $table->time('starttijd');
            $table->time('eindtijd');
            $table->string('status');
            $table->unsignedBigInteger('modules_id');
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
