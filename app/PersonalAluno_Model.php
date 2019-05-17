<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalAluno_Model extends Model
{
    protected $table = 'personal_aluno_table';
    protected $fillable = [
        'id_aluno', 'id_personal',
    ];
}
