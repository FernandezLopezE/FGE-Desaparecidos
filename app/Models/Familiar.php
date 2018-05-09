<?php

namespace App\Models;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Familiar extends Model
{
	protected $table = 'desaparecidos_familiares';
	protected $fillable = [
			'parentesco',
			'nombres',
			'primerAp',
			'segundoAp',
			'fechaNacimiento',
			'edad',
			'idDesaparecido',
			'idParentesco'
	];

	public function desaparecido()
	{
		return $this->belongsTo('App\Models\Desaparecido','idDesaparecido');
	}

	public function parentesco()
	{
		return $this->belongsTo('App\Models\CatParentesco','idParentesco');
	}

	public function setFechaNacimientoAttribute($value)
	{
		if(empty($value)){
			$this->attributes['fechaNacimiento'] = null;	
		} else {
			$this->attributes['fechaNacimiento'] = Carbon::createFromFormat('d/m/Y', $value)->format('Y-m-d');			
		}
		
	}


}
  