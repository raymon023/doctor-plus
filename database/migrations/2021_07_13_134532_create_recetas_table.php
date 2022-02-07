<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recetas', function (Blueprint $table) {

            $table->id();
            $table->string('medicamento1');
            $table->string('tiempo_uso1');
            $table->string('descripcion1');


            $table->string('medicamento2');
            $table->string('tiempo_uso2');
            $table->string('descripcion2');

            $table->string('medicamento3');
            $table->string('tiempo_uso3');
            $table->string('descripcion3');



            $table->string('medicamento4');
            $table->string('tiempo_uso4');
            $table->string('descripcion4');

            $table->unsignedBigInteger('medico_id');
            $table->foreign('medico_id')
                ->references('id')
                ->on('medicos');

            $table->unsignedBigInteger('paciente_id');
            $table->foreign('paciente_id')
                ->references('id')
                ->on('pacientes');


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
        Schema::dropIfExists('recetas');
    }
}
