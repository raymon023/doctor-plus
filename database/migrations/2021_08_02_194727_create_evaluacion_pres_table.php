<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluacionPresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluacion_pres', function (Blueprint $table) {
            $table->id();
            $table->date('fecha')->nullable();
            $table->integer('codigo');
            $table->string('nombre');
            $table->integer('edad');
            $table->string('sexo');
            $table->string('direccion');
            $table->string('val_dx')->nullable();
            $table->string('plan_terapéutico')->nullable();


            $table->enum('angina', ['Si', 'No'])->default('No');
            $table->string('antec_disnea')->nullable();
            $table->string('antec_ortopnea')->nullable();
            $table->string('antec_disnea_parox_noct')->nullable();
            $table->string('antec_palpitac')->nullable();
            $table->string('antec_iam')->nullable();
            $table->string('antec_mas6')->nullable();
            $table->string('antec_men6')->nullable();
            $table->string('antec_evol')->nullable();
            $table->string('antec_tos')->nullable();
            $table->string('antec_excpetor')->nullable();
            $table->string('antec_hemotpisis')->nullable();
            $table->string('antec_tabaquismo')->nullable();
            $table->string('antec_asma')->nullable();
            $table->string('antec_neumonia')->nullable();
            $table->string('antec_tb')->nullable();
            $table->string('antec_dm')->nullable();
            $table->string('antec_nefropatia')->nullable();
            $table->string('antec_hepatopia')->nullable();
            $table->string('antec_etilismo')->nullable();
            $table->string('antec_alergia')->nullable();
            $table->string('antec_sangrado')->nullable();
            $table->string('antec_medicamento')->nullable();


            $table->string('antec_otros')->nullable();
            $table->string('expl_ta')->nullable();
            $table->string('expl_fc')->nullable();
            $table->string('expl_fr')->nullable();
            $table->string('expl_corazon')->nullable();
            $table->string('expl_gland_tiroide')->nullable();
            $table->string('expl_pulsos')->nullable();
            $table->string('expl_soplos')->nullable();
            $table->string('expl_pulmones')->nullable();
            $table->string('expl_abdomen')->nullable();
            $table->string('expl_ms_is')->nullable();
            $table->string('expl_ecg_ritmo')->nullable();
            $table->string('laboratorio')->nullable();

            $table->string('dx')->nullable();
            $table->string('diag_comentario')->nullable();
            $table->string('diag_riesgo')->nullable();
            $table->string('tx')->nullable();

            $table->unsignedBigInteger('paciente_id');
            $table->foreign('paciente_id')
                ->references('id')
                ->on('pacientes');


            $table->unsignedBigInteger('medico_id');
            $table->foreign('medico_id')
                ->references('id')
                ->on('medicos');


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
        Schema::dropIfExists('evaluacion_pres');
    }
}
