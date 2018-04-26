<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatTipoPerdidaDiente extends Model
{
    protected $table = 'cat_tipos_perdida_diente';
	protected $fillable = [
		'id',
		'nombreTipoPerdida'	
	];
}
