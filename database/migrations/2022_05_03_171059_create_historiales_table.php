<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistorialesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historiales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('expediente_id');
            $table->date('fecha de expedicion');
            $table->date('fecha de enfermedad actual');
            $table->date('fecha de diagnostico');
            $table->string('enfermedad actual');
            $table->string('examenes prescritos');
            $table->string('diagnostico');
            $table->string('receta expedida');
            $table->string('observaciones');
            $table->string('plan medico a seguir');

            $table->foreign('expediente_id')->references('id')->on('expedientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historiales');
    }
}
