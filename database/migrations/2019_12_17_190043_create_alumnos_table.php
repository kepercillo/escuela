<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->smallIncrements('id')->unsigned();
            $table->char('nombres', 50);
            $table->char('apellidos', 50);
            $table->smallInteger('grado_id')->unsigned();
            $table->foreign('grado_id')->references('id')->on('grados');
            $table->softDeletes();
           // $table->smallIncrements('materia_id')-unsigned();
            //$table->foreign('materia_id')->references('id')->on('materias');


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
        Schema::dropIfExists('alumnos');
    }
}
