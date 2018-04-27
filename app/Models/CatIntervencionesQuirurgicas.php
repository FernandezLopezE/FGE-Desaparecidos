<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatIntervencionesQuirurgicas extends Model
{
    //
    protected $table = 'cat_intervenciones_quirurgicas';
	protected $fillable = [
		'nombre',	
	];
}
