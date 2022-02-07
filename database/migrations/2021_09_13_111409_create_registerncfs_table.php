<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisterncfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registerncfs', function (Blueprint $table) {
            $table->id();
            $table->string('aprobacion');
            $table->string('codigo');
            $table->string('tipo_ncf');
            $table->string('quantity');
            $table->string('parte_fija');
            $table->string('secuencia')->nullable();
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
        Schema::dropIfExists('registerncfs');
    }
}
