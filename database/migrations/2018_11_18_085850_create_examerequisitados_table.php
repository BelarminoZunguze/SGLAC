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

           
            $table->integer('codigoFuncionario')->nullable();
            $table->string('situacao')->nullable();
            $table->integer('codigoAmostra')->nullable()->nullable();
            $table->string('tipoAmostra')->nullable();
            $table->string('dataColecta')->nullable();
            $table->string('validado')->nullable();
            $table->string('dataResultado')->nullable();
            $table->string('dataSaidaResultado')->nullable();
            $table->string('resultado')->nullable();
            $table->integer('codigoPaciente')->nullable();;
            $table->string('exame')->nullable();
            $table->integer('preco')->nullable();
            $table->string('pagamento')->nullable();
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
