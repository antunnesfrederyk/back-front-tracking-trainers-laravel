<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal_Model extends Model
{
    protected $table = 'personal_table';
    protected $fillable = [
        'cpf', 'cref', 'telefone', 'endereco', 'cidade', 'imagem', 'local_atuacao', 'id_user',

    ];
}
