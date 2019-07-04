<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Funcionarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Funcionarios', function (Blueprint $table) {
            /* Informações Usuário */
            $table->increments('id')->unique();;
            $table->string('nome')->nullable();;
            $table->string('matricula')->nullable();
            $table->string('titulacao')->nullable();
            $table->string('tipo')->nullable();
            $table->string('cargo')->nullable();
            $table->string('login')->nullable();
            $table->string('senha')->nullable();
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
