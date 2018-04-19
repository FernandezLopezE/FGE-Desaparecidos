<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatModificacionesCuerpo extends Model
{
    //
    protected $table = 'cat_modificaciones_cuerpo';
	protected $fillable = [
		'nombre',
		'idPartesCuerpo',
	];
}
