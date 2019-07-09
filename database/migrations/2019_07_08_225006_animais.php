<?php use Illuminate\Support\Facades\Schema; use 
Illuminate\Database\Schema\Blueprint; use 
Illuminate\Database\Migrations\Migration; class Animais extends 
Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Animais', function (Blueprint $table) {
            $table->increments('codigo');
            $table->string('especie');
            $table->integer('quantidade');
            $table->integer('codBioterio');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
