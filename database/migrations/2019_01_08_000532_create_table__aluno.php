<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAluno extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aluno_table', function (Blueprint $table) {
            $table->increments('id');
            $table->string('documento');
            $table->string('telefone');
            $table->string('endereco');
            $table->string('cidade');
            $table->string('imagem');
            $table->string('sexo');
            $table->double('peso_alvo');
            $table->double('altura');
            $table->string('contato_emergencia');
            $table->date('data_nascimento');
            $table->string('profissao');
            $table->string('observacao');
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('aluno_table');
    }
}
