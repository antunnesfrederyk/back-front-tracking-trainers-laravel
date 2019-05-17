<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAvaliacao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avaliacao_table', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_aluno')->unsigned();
            $table->foreign('id_aluno')->references('id')->on('aluno_table')->onDelete('cascade');
            $table->integer('id_personal')->unsigned();
            $table->foreign('id_personal')->references('id')->on('personal_table')->onDelete('cascade');
            $table->date('data_avaliacao');
            $table->string('objetivo');
            $table->string('atividades_atuais');
            $table->string('saude');
            $table->string('qualidade_sono');
            $table->boolean('problemas_articulares');
            $table->string('uso_de_medicamentos');
            $table->string('obs_gerais');
            $table->integer('frequencia_cardiaca_repouso');
            $table->integer('frequencia_cardiaca_maxima');
            $table->integer('pa_sistolica');
            $table->integer('pa_diastolica');
            $table->double('estatura');
            $table->double('peso_atual');
            $table->double('cintura_cm');
            $table->double('quadril_cm');
            $table->double('torax_cm');
            $table->double('braco_dcm');
            $table->double('antebraco_dcm');
            $table->double('braco_ecm');
            $table->double('antebraco_ecm');
            $table->double('coxa_dcm');
            $table->double('panturrilha_dcm');
            $table->double('coxa_ecm');
            $table->double('panturrilha_ecm');
            $table->double('flexibilidade_wells23');
            $table->double('imc_calculado');
            $table->integer('perc_gordura');
            $table->double('rcq_calculado');
            $table->double('dist_em_12min');
            $table->integer('vo2max_calculado');
            $table->integer('flexao_braco_min');
            $table->integer('abdominal_min');
            $table->integer('agachamento_com_salto');
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
        Schema::dropIfExists('avaliacao_table');
    }
}
