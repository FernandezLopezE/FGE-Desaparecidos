<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatUbicacionDiente extends Model
{
    protected $table = 'cat_ubicacion_diente';
	protected $fillable = [
		'id',
		'nombreUbicacion'	
	];
}
