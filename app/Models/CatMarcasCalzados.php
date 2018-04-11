<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatMarcasCalzados extends Model
{
    public $table = 'cat_calzado_marca';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    public $fillable = [
        
        'nombre',
        'image'
        //'snVeh' se quito la columna, le corresponde al sist. de vehiculos
    ];
}
