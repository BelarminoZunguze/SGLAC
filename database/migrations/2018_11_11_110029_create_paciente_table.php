<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('genero')->nullable();
            $table->string('data_nasc')->nullable();
            $table->float('altura',2,2)->nullable();
            $table->float('peso',3,2)->nullable();
            $table->string('contacto')->nullable();
            $table->string('bi')->nullable();
            $table->string('grupo_sanguineo')->nullable();
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
