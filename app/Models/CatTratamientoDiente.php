<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatTratamientoDiente extends Model
{
    protected $table = 'cat_tratamiento_diente';
	protected $fillable = [
		'id',
		'nombreTratamiento'	
	];
}
