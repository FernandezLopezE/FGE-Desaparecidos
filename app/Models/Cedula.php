<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cedula extends Model
{
	protected $table = 'desaparecidos_cedula_investigacion';
	protected $fillable = [		
		'primeraVez',
		'fecha',
	];    

    public function desaparecidos()
	{
		return $this->hasMany('App\Models\Desaparecido', 'idDesaparecido', 'id');
	}
}
