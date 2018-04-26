<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
	protected $table = 'desaparecidos_contacto';
	protected $fillable = [

			'correoElectronico',
			'telefono',
			'redesSociales',
			'idDesaparecido'
		
		
			

	];
	public function desaparecido()
	{
		return $this->belongsTo('App\Models\Desaparecido','idDesaparecido');
	}


}
			