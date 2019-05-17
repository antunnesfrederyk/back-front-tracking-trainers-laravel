<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssessoriaPersonal_Model extends Model
{
    protected $table = 'assessoria_personal_table';
    protected $fillable = [
        'id_assessoria', 'id_personal',
    ];
}
