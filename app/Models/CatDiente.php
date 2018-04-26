<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatDiente extends Model
{
    protected $table = 'cat_dientes';

    protected $fillable = [
        'id', 'numDiente', 'nombreDiente',
    ];
}
