<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatTamanoCuerpo extends Model
{
    //
    public $table = 'cat_tamano_cuerpo';

    public $fillable = [
        
        'nombre',
        'idPartesCuerpo'
       
    ];
}
