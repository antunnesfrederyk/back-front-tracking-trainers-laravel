<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlunoGrupo_Model extends Model
{
    protected $table = 'aluno_grupo_table';
    protected $fillable = [
        'id_grupo', 'id_aluno',
    ];
}
