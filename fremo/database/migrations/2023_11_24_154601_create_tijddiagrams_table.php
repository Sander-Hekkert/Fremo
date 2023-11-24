<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTijddiagramsTable extends Migration
{
    public function up()
    {
        Schema::create('tijddiagrams', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('projects_id');
            $table->string('status');
            // Add other columns as needed
            $table->timestamps();

            $table->foreign('projects_id')->references('id')->on('projects')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tijddiagrams');
    }
}
