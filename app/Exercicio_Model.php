<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercicio_Model extends Model
{
    protected $table = 'exercicio_table';
    protected $fillable = [
        'nome', 'descricao', 'imagem', 'execucao', 'id_grupo_muscular',
    ];
}
