<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatSubModificaciones extends Model
{
    //
    protected $table = 'cat_sub_modificaciones';
	protected $fillable = [
		'nombre',
		'idModificacionesCuerpo',
	];
}
