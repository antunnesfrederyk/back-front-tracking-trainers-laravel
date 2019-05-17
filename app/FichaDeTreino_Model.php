<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FichaDeTreino_Model extends Model
{
    protected $table = 'ficha_de_treino_table';
    protected $fillable = [
        'nome', 'horario', 'data_inicio', 'data_fim', 'id_aluno', 'id_personal',
    ];
}
