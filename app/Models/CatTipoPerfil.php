<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatTipoPerfil extends Model
{
    protected $table = 'cat_tipo_perfil';
	protected $fillable = [
		'id',
		'nombrePerfil'	
	];
}
