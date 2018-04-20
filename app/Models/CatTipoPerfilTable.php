<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatTipoPerfilTable extends Model
{
    protected $table = 'cat_ubicacion_diente';
	protected $fillable = [
		'id',
		'nombrePerfil'	
	];
}
