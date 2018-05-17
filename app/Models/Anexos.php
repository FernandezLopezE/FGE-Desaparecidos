<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anexos extends Model
{	

	protected $table = 'desaparecidos_anexos';
	protected $fillable = [
			'tipoAnexo',
			'ruta',
			'idDesaparecido'



						];

	public function desaparecido()
		{
			return $this->belongsTo('App\Models\Desaparecido','idDesaparecido');
		}


}