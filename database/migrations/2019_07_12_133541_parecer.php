<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Parecer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Parecer', function(Blueprint $table){
            $table->increments('id');
            $table->integer('IDprotocolo')->unsigned();
            $table->foreign('IDprotocolo')->references('id')->on('Protocolos');
            $table->enum('recomendacao',['Uso recomendado', 'Uso não recomendado']);
            $table->string('justificativaRec');
            $table->enum('decisaoFinal',['Aprovado', 'Reprovado']);
            $table->string('justificativaDec');
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
