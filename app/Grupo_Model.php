<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo_Model extends Model
{
    protected $table = 'grupo_table';
    protected $fillable = [
        'nome', 'local', 'descricao', 'id_nivel',

    ];
}
