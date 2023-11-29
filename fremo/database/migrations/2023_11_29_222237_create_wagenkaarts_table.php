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
        Schema::create('wagenkaarts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('wagennummer');
            $table->string('ii');
            $table->string('iii');
            $table->string('iv');
            $table->string('uic_typ');
            $table->string('beschreibung');
            $table->string('lüp');
            $table->string('achsstand');
            $table->string('nutzlast');
            $table->string('ladelänge');
            $table->string('ladefläche');
            $table->string('ladehinweise');
            $table->string('modelbeschriftung');
            $table->string('modellmerkmale');
            $table->string('eigentümer');
            $table->string('hersteller');
            $table->string('radsätze');
            $table->string('kupplungen');
            $table->string('federpuffer');
            $table->string('modell_lüp');
            $table->string('modellgewicht');
            $table->unsignedBigInteger('baujahr');
            $table->string('foto');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wagenkaart');
    }
};
