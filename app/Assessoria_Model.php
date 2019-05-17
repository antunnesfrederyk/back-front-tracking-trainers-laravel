<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assessoria_Model extends Model
{
    protected $table = 'assessoria_table';
    protected $fillable = [
        'nome_fantasia', 'razao_social', 'cnpj', 'endereco', 'cidade', 'logo', 'id_user', 'descricao', 'status_assessoria',
    ];
}
