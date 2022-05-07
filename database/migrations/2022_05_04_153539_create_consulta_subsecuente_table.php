<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultaSubsecuenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consulta_subsecuente', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('historial_id');
            $table->integer('presion arterial maxima');
            $table->integer('temperatura');
            $table->integer('pulso');
            $table->float('peso');
            $table->float('imc');
            $table->integer('presion arterial minima');
            $table->float('talla');
            $table->float('altura');
            $table->foreign('historial_id')->references('id')->on('historiales');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consulta_subsecuente');
    }
}
