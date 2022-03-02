<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pacientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('pacientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer(' tipo_documento_id');
            $table->integer('numero_documento');
            $table->string('nombre1');
            $table->string('nombre2');
            $table->string('apellido1');            
            $table->string('apellido2');            
            $table->integer(' genero_id');            
            $table->integer('departamento_id');            
            $table->integer('municipio_id');            
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
        //
    }
}
