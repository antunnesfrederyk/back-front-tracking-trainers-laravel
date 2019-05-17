<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FichaExercicio_Model extends Model
{
    protected $table = 'ficha_exercicio_table';
    protected $fillable = [
        'id_ficha_de_treino', 'id_exercicio', 'repeticoes', 'series', 'carga', 'intervalo', 'dias_de_treino',
    ];
}
