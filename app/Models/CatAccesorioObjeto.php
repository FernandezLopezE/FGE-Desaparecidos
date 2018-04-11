<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatAccesorioObjeto extends Model
{
    ////cat_accesorios_objetos
    protected $table = 'cat_accesorios_objetos';
	protected $fillable = [
		'id',
		'nombre'	
	];
}
