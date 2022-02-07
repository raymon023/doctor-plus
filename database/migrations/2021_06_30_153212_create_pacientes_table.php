<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('cedula');
            $table->string('fecha_nac');
            $table->string('sexo');
            $table->string('lugar_trabj');
            $table->string('estado_civ');
            $table->string('direccion');
            $table->string('tel1');
            $table->string('tel2');
            $table->string('poliza');
            $table->string('tificacion');
            $table->string('email');


            $table->unsignedBigInteger('medico_id');
            $table->foreign('medico_id')
                ->references('id')->on('medicos');


            $table->unsignedBigInteger('seguro_id');
            $table->foreign('seguro_id')
                ->references('id')->on('seguros');

            $table->unsignedBigInteger('ciudad_id');
            $table->foreign('ciudad_id')
                ->references('id')->on('ciudads');


            $table->unsignedBigInteger('religion_id');
            $table->foreign('religion_id')
                ->references('id')->on('religions');


            $table->unsignedBigInteger('nacionalidad_id');
            $table->foreign('nacionalidad_id')
                ->references('id')->on('nacionalidads');

            $table->unsignedBigInteger('ocupacion_id');
            $table->foreign('ocupacion_id')
                ->references('id')->on('ocupacions');


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
        Schema::dropIfExists('pacientes');
    }
}
