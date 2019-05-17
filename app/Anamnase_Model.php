<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anamnase_Model extends Model
{
    protected $table = 'anamnase_table';
    protected $fillable = [
        'peso_atual', 'p_sentado', 'qnt_tempo_medio', 'atividade', 'qual_atividade', 'comente_rotina', 'tempo_parado', 'motivo_parado', 'qual_objetivo', 'lesoes', 'qual_lesao', 'como_aconteceu', 'sente_dores_comente', 'cirurgia', 'qual_cirurgia', 'fumante', 'fuma_tempo', 'qnt_cigarros_dia', 'bebe', 'alimentacao', 'refeicoes_dia', 'frq_liquidos', 'frq_liquidos_dia', 'qualidade_sono', 'diabetico', 'qual_tipo_diabetes', 'diabetes_familia', 'quem_diabete_familia', 'hipertenso', 'hipertenso_familia', 'quem_hipertenso_familia', 'problema_saude', 'qual_problema', 'medicamento', 'qual_medicamento', 'gestante', 'ciclo_mestrual_normal', 'anticoncepcional', 'filhos', 'quantos_filhos', 'parto_normal', 'data_preenchimento', 'id_aluno',
    ];
}
