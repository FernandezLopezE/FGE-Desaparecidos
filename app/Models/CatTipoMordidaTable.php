<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatTipoMordidaTable extends Model
{
    protected $table = 'cat_tipo_mordida';
	protected $fillable = [
		'id',
		'nombreTipoMordida'	
	];
}
