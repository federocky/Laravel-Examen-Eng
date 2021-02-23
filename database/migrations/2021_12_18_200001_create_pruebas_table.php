<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Esto está regular

class CreatePruebasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pruebas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pregunta_id');
            $table->unsignedBigInteger('examen_id');
            $table->unsignedBigInteger('user_id');
            $table->integer('respuesta_id');
            $table->timestamps();

            $table->foreign('pregunta_id')->references('id')->on('preguntas');
            $table->foreign('examen_id')->references('id')->on('examenes');
            $table->foreign('user_id')->references('id')->on('users');
            //$table->foreign('respuesta_id')->references('id')->on('respuestas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pruebas');
    }
}
