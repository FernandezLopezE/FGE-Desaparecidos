<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CedulaPartesCuerpo extends Model
{
    //
    protected $table = 'cedula_partes_cuerpo';
	protected $fillable = [
		'tenia',
		'observaciones',
		'otraParticularidad',
		'otraModificacion',
		'otroTipoCuerpo',
		'otroColor',
		'posicion',
		'idPartesCuerpo',
		'idTamanoCuerpo',
		'idTipoCuerpo',
		'idColoresCuerpo',
		'idPersonaDesaparecida',
	];

	public function catpartescuerpo()
	{
		return $this->belongsTo('App\Models\CatPartesCuerpo','idPartesCuerpo', 'id');
	}
}
