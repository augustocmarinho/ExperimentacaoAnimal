<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Protocolos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Protocolos', function (Blueprint $table) {
            $table->increments('id');
            $table->date('dtInicio');
            $table->date('dtFim');
            $table->integer('quantidade');
            $table->enum('status', ['Aguardando envio para parecer', 'Aguardando parecer', 'Aguardando a deliberação']);

            $table->integer('IDsolicitante')->unsigned(); 
            $table->foreign('IDsolicitante')->references('id')->on('users'); 

            $table->integer('IDanimal')->unsigned(); 
            $table->foreign('IDanimal')->references('codigo')->on('Animais');
            
            $table->integer('IDbioterios')->unsigned(); 
            $table->foreign('IDbioterios')->references('id')->on('Bioterios');

            $table->longText('justificativa');
            $table->longText('resumoPortugues');
            $table->longText('resumoIngles');
            
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
