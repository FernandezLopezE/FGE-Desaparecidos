<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatColoresCuerpo extends Model
{
    //
    protected $table = 'cat_colores_cuerpo';
	protected $fillable = [
		'nombre',
		'imagen',
	];
}
