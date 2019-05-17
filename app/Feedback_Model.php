<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback_Model extends Model
{
    protected $table = 'feedback_table';
    protected $fillable = [
        'mensagem', 'id_ficha_de_treino',
    ];
}
