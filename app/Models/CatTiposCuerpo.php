<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatTiposCuerpo extends Model
{
    //
    public $table = 'cat_tipos_cuerpo';

    public $fillable = [
        
        'nombre',
        'idPartesCuerpo'
       
    ];
}
