<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('treinen', function (Blueprint $table) {
            $table->id();
            $table->string('naam_bezitter');
            $table->string('afkorting');
            $table->string('nummer_trein');
            $table->string('code_trein');
            $table->string('omschrijving');
            $table->string('snelheid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('treinen');
    }
};
