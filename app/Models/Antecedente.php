<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Antecedente extends Model
{
	protected $table = 'desaparecidos_antecedentes';
	protected $fillable = [
			'mes',
			'anio',
			'observaciones',
			'idDesaparecido',
			'idDelito',
			'idCentroReclusion'
	];

	public function desaparecido()
	{
		return $this->belongsTo('App\Models\Desaparecido','id');
	}

	public function delito()
	{
		return $this->belongsTo('App\Models\CatDelito','id');
	}

	public function centroreclusion()
	{
		return $this->belongsTo('App\Models\CatCentroReclusion','id');
	}
}