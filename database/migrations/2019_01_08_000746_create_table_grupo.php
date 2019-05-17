<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableGrupo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupo_table', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('local');
            $table->string('descricao');
            $table->integer('id_nivel')->unsigned();
            $table->foreign('id_nivel')->references('id')->on('nivel_table')->onDelete('cascade');
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
        Schema::dropIfExists('grupo_table');
    }
}
