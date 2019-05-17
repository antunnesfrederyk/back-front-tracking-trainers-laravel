<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssessoriaAluno_Model extends Model
{
    protected $table = 'assessoria_aluno_table';
    protected $fillable = [
        'id_assessoria', 'id_aluno',
    ];
}
