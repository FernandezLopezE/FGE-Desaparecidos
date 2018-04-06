<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatCargo extends Model
{
	protected $table = 'cat_cargo';
	protected $fillable = [
		'nombre',	
	];
}
