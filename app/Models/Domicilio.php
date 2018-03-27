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
			'idMunicipio',
			'idLocalidad',
			'idColonia',
			'idDesaparecido'
	];

	public function desaparecido()
	{
		return $this->belongsTo('App\Models\Desaparecido','id');
	}

	public function municipio()
	{
		return $this->belongsTo('App\Models\Municipio','id');
	}

	public function localidad()
	{
		return $this->belongsTo('App\Models\Localidad','id');
	}

	public function colonia()
	{
		return $this->belongsTo('App\Models\Colonia','id');
	}

}
			