<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno_Model extends Model
{
    protected $table = 'aluno_table';
    protected $fillable = [
        'documento', 'telefone', 'endereco', 'cidade', 'imagem', 'sexo', 'peso_alvo', 'altura', 'contato_emergencia', 'data_nascimento', 'profissao', 'observacao', 'id_user',
    ];
}
