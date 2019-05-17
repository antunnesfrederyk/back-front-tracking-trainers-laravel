<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAnamnase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anamnase_table', function (Blueprint $table) {
            $table->increments('id');
            $table->double('peso_atual');
            $table->boolean('p_sentado');
            $table->double('qnt_tempo_medio');
            $table->boolean('atividade');
            $table->string('qual_atividade');
            $table->string('comente_rotina');
            $table->double('tempo_parado');
            $table->string('motivo_parado');
            $table->string('qual_objetivo');
            $table->boolean('lesoes');
            $table->string('qual_lesao');
            $table->string('como_aconteceu');
            $table->string('sente_dores_comente');
            $table->boolean('cirurgia');
            $table->string('qual_cirurgia');
            $table->boolean('fumante');
            $table->double('fuma_tempo');
            $table->integer('qnt_cigarros_dia');
            $table->boolean('bebe');
            $table->string('alimentacao');
            $table->integer('refeicoes_dia');
            $table->string('frq_liquidos');
            $table->integer('frq_liquidos_dia');
            $table->string('qualidade_sono');
            $table->boolean('diabetico');
            $table->string('qual_tipo_diabetes');
            $table->boolean('diabetes_familia');
            $table->string('quem_diabete_familia');
            $table->boolean('hipertenso');
            $table->boolean('hipertenso_familia');
            $table->string('quem_hipertenso_familia');
            $table->boolean('problema_saude');
            $table->string('qual_problema');
            $table->boolean('medicamento');
            $table->string('qual_medicamento');
            $table->boolean('gestante');
            $table->boolean('ciclo_mestrual_normal');
            $table->boolean('anticoncepcional');
            $table->boolean('filhos');
            $table->integer('quantos_filhos');
            $table->boolean('parto_normal');
            $table->date('data_preenchimento');
            $table->integer('id_aluno')->unsigned();
            $table->foreign('id_aluno')->references('id')->on('aluno_table')->onDelete('cascade');
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
        Schema::dropIfExists('anamnase_table');
    }
}
