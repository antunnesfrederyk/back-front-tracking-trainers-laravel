<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePersonal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_table', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cpf');
            $table->string('cref');
            $table->string('telefone');
            $table->string('endereco');
            $table->string('cidade');
            $table->string('imagem');
            $table->string('local_atuacao');
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
        Schema::dropIfExists('personal_table');
    }
}
