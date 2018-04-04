<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Domicilio extends Model
{
	protected $table = 'desaparecidos_domicilios';
	protected $fillable = [
			'tipoDireccion',
			'calle',
			'numExterno',
			'numInterno',
			'telefono',
			'idEstado',
			'idMunicipio',
			'idLocalidad',
			'idColonia',
			'idDesaparecido'
	];

	public function desaparecido()
	{
		return $this->belongsTo('App\Models\Desaparecido','idDesaparecido');
	}

	public function estado()
	{
		return $this->belongsTo('App\Models\CatEstado','idEstado');
	}

	public function municipio()
	{
		return $this->belongsTo('App\Models\CatMunicipio','idMunicipio');
	}

	public function localidad()
	{
		return $this->belongsTo('App\Models\CatLocalidad','idLocalidad');
	}

	public function colonia()
	{
		return $this->belongsTo('App\Models\CatColonia','idColonia');
	}

}
			