<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultas', function (Blueprint $table) {

            $table->id();
            $table->dateTime('fecha');
            $table->text('motivo', 1000);
            $table->string('antec_pers_quirugicos');
            $table->string('antec_pers_patologicos');
            $table->text('evaluacion', 1000);
            $table->text('observacion');
            $table->string('diagnostico');
            $table->string('antec_here_fam');
            $table->text('hab_toxico', 1000);
            $table->text('hist_enf', 1000);


            $table->unsignedBigInteger('turno_id');
            $table->foreign('turno_id')
                ->references('id')
                ->on('turnos');

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
        Schema::dropIfExists('consultas');
    }
}
