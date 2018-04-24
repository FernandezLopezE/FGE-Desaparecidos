<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatEnfermedades extends Model
{
    //
    protected $table = 'cat_enfermedades';
	protected $fillable = [
		'nombre',	
	];
}
