<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFichaDeTreino extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ficha_de_treino_table', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('horario');
            $table->date('data_inicio');
            $table->date('data_fim');
            $table->integer('id_aluno')->unsigned();
            $table->foreign('id_aluno')->references('id')->on('aluno_table')->onDelete('cascade');
            $table->integer('id_personal')->unsigned();
            $table->foreign('id_personal')->references('id')->on('personal_table')->onDelete('cascade');
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
        Schema::dropIfExists('ficha_de_treino_table');
    }
}
