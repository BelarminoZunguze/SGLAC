<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamerequisitadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examerequisitados', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('codigoRequisicao');
            $table->integer('codigoFuncionario');
            $table->string('situacao');
            $table->integer('codigoAmostra');
            $table->string('tipoAmostra');
            $table->string('dataColecta');
            $table->string('validado');
            $table->string('dataResultado');
            $table->string('dataSaidaResultado');
            $table->string('resultado');
            
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
        Schema::dropIfExists('examerequisitados');
    }
}
