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
		'imagen',
		'posicion',
		'idPartesCuerpo',
		'idTamanoCuerpo',
		'idTipoCuerpo',
		'idColoresCuerpo',
		'idPersonaDesaparecida',
	];

	public function catTamanoCuerpo()
	{
		return $this->belongsTo('App\Models\CatTamanoCuerpo','idTamanoCuerpo');
	}

	public function catTipoCuerpo()
	{
		return $this->belongsTo('App\Models\CatTiposCuerpo','idTipoCuerpo');
	}

	public function catColoresCuerpo()
	{
		return $this->belongsTo('App\Models\CatColoresCuerpo','idColoresCuerpo');
	}

	public function catpartescuerpo()
	{
		return $this->belongsTo('App\Models\CatPartesCuerpo','idPartesCuerpo');
	}
}
