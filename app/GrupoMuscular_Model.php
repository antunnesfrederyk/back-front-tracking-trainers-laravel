<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GrupoMuscular_Model extends Model
{
    protected $table = 'grupo_muscular_table';
    protected $fillable = [
        'nome', 'descricao', 'imagem',
    ];
}
