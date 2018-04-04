<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Persona extends Model
{
	protected $table = 'persona';

	protected $fillable = [				
				'nombres',
				'primerAp',
				'segundoAp',
				'fechaNacimiento',
				'rfc',
				'curp',
				'sexo',
				'idNacionalidad',
				'idEtnia',
				'idLengua',
				'idMunicipioOrigen',
				'esEmpresa',
	];

	public function nacionalidad(){
		return $this->belongsTo('App\Models\CatNacionalidad', 'idNacionalidad');
	}

	/*public function etnia(){
		return $this->belongsTo('App\Models\CatEtnia');
	}
	public function lengua(){
		return $this->belongsTo('App\Models\CatLengua');
	}

	public function municipio(){
		return $this->belongsTo('App\Models\CatMunicipio');
	}

	public function familiares(){
		return $this->hasMany('App\Models\Familiar');
	}*/

	public function desaparecidos(){
		return $this->hasMany('App\Models\Desaparecido', 'idDesaparecido', 'id');
	}

	public function setFechaNacimientoAttribute($value)
	{
		$this->attributes['fechaNacimiento'] = Carbon::createFromFormat('d/m/Y', $value)->format('Y-m-d');
	}

	public static function buscarCURP($curp){
	  $curps=Persona::where('curp','=',$curp)->get();
	  if($curps->isNotEmpty()){
		return ['res'=>true];
	  }else{
		return ['res'=>false];
	  }
	}
}
