<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFichaExercicio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ficha_exercicio_table', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_ficha_de_treino')->unsigned();
            $table->foreign('id_ficha_de_treino')->references('id')->on('ficha_de_treino_table')->onDelete('cascade');
            $table->integer('id_exercicio')->unsigned();
            $table->foreign('id_exercicio')->references('id')->on('exercicio_table')->onDelete('cascade');
            $table->integer('repeticoes');
            $table->integer('series');
            $table->integer('carga');
            $table->double('intervalo');
            $table->string('dias_de_treino');
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
        Schema::dropIfExists('ficha_exercicio_table');
    }
}
