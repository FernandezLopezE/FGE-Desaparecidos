<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatEnfermedadDental extends Model
{
    protected $table = 'cat_enfermedad_dental';
	protected $fillable = [
		'id',
		'nombreEnfermedad',	
	];
}
