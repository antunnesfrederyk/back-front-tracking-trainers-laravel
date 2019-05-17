<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nivel_Model extends Model
{
    protected $table = 'nivel_table';
    protected $fillable = [
        'descricao', 'valor',

    ];
}
