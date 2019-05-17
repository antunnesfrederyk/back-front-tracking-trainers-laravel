<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avaliacao_Model extends Model
{
    protected $table = 'avaliacao_table';
    protected $fillable = [
        'id_aluno', 'id_personal', 'data_avaliacao', 'objetivo', 'atividades_atuais', 'saude', 'qualidade_sono', 'problemas_articulares', 'uso_de_medicamentos', 'obs_gerais', 'frequencia_cardiaca_repouso', 'frequencia_cardiaca_maxima', 'pa_sistolica', 'pa_diastolica', 'estatura', 'peso_atual', 'cintura_cm', 'quadril_cm', 'torax_cm', 'braco_dcm', 'antebraco_dcm', 'braco_ecm', 'antebraco_ecm', 'coxa_dcm', 'panturrilha_dcm', 'coxa_ecm', 'panturrilha_ecm', 'flexibilidade_wells23', 'imc_calculado', 'perc_gordura', 'rcq_calculado', 'dist_em_12min', 'vo2max_calculado', 'flexao_braco_min', 'abdominal_min', 'agachamento_com_salto',
    ];
}
