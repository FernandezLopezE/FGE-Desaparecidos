<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatCalzadoModelo extends Model
{
	protected $table = 'cat_calzado_marca';
	protected $fillable = [
		'nombre',	
	];
}
