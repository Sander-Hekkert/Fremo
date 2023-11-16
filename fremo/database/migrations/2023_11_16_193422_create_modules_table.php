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
            $table->string('afkorting');
            $table->string('nummer_module');
            $table->string('naam_thema_module');
            $table->integer('lengte_1');
            $table->integer('lengte_2');
            $table->integer('lengte_3');
            $table->string('e_f');
            $table->integer('hoek');
            $table->integer('straal');
            $table->string('type_eindprofiel_1');
            $table->string('type_eindprofiel_2');
            $table->string('bovenbouw_rails');
            $table->text('opmerkingen_bijzonderheden')->nullable();
            $table->integer('aantal_sporen');
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
