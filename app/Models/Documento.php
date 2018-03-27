<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
	protected $table = 'desaparecidos_documentos_identidad';
	protected $fillable = [
		'identificacion',
		'otraIdentificacion',
		'numIdentificacion',
		'idDesaparecido',
	];

	public function desaparecido()
	{
		return $this->belongsTo('App\Models\Desaparecido','id');
	}

}
