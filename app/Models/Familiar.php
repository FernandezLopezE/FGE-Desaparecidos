<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Familiar extends Model
{
	protected $table = 'desaparecidos_familiares';
	protected $fillable = [
			'parentesco',
			'nombres',
			'primerAp',
			'segundoAp',
			'edad',
			'idDesaparecido',
	];

	public function desaparecido()
	{
		return $this->belongsTo('App\Models\Desaparecido','idDesaparecido');
	}

}
  