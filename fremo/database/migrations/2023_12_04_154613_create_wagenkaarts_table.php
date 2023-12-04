<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateWagenkaartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wagenkaarts', function (Blueprint $table) {
            $table->id();
            $table->string('Eigenaarsnaam');
            $table->string('naam');
            $table->string('nummer_module');
            $table->string('e_f');
            $table->text('opmerkingen_bijzonderheden')->nullable();
            $table->string('uic_typ')->nullable();
            $table->text('Beschrijving')->nullable();
            $table->string('Lengte')->nullable();
            $table->string('Asafstand')->nullable();
            $table->string('Nuttige_Lading')->nullable();
            $table->string('Ladelengte')->nullable();
            $table->string('Ladeflak')->nullable();
            $table->text('Lade_instructies')->nullable();
            $table->string('Modelaanduiding')->nullable();
            $table->string('Modelkenmerken')->nullable();
            $table->string('Eigenaar')->nullable();
            $table->string('Fabrikant')->nullable();
            $table->string('Wielstellen')->nullable();
            $table->string('Koppelingen')->nullable();
            $table->string('Veerpuffer')->nullable();
            $table->string('Model_lengte')->nullable();
            $table->string('Modelgewicht')->nullable();
            $table->string('Bouwjaar')->nullable();
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
        Schema::dropIfExists('wagenkaart');
    }

};
