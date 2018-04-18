<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatCorreosExternos extends Model
{
   protected $table = 'cat_correos_externos';
	protected $fillable = [	
	    'nombre',
	    'correo',
	];
}
