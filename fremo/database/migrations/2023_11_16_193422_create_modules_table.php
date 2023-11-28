<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->string('naam_bezitter');
            $table->string('naam');
            $table->string('nummer_module');
            $table->string('e_f');
            $table->text('opmerkingen_bijzonderheden')->nullable();
            $table->integer('aantal_sporen_begin');
            $table->integer('aantal_sporen_eind');
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
        Schema::dropIfExists('modules');
    }
}
