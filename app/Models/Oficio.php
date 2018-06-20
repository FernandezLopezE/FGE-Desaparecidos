<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Oficio extends Model
{
    protected $table = 'oficios_hechos';
    protected $fillable = [
        'id',
        'html',
        'token',
        'fiscal',
        'idOficio'
    ];
}
