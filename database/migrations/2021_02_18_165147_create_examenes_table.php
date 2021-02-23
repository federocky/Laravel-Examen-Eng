<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examenes', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->string('asignatura');

            $table->unsignedBigInteger('user_id'); //agrego estas lineas, es el profesor que crea el examen y el curso
            $table->foreign('user_id')->references('id')->on('users');  

            $table->unsignedBigInteger('curso_id'); 
            $table->foreign('curso_id')->references('id')->on('cursos');  

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
        Schema::dropIfExists('examenes');
    }
}
