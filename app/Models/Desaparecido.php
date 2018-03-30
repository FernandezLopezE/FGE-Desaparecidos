<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Desaparecido extends Model
{
	protected $table = 'desaparecidos_personas';
	protected $fillable = [		
		'apodo',
		'edadAparente',		
		'embarazo',
		'gestacionSemanas',
		'gestacionMeses',
		'rumoresBebe',
		'pormenores',
		'antecedentesJudiciales',
		'idEdocivil',				
		'idOcupacion',		
		'idEscolaridad',
		'idPersona'	
	];

	public function familiares()
	{
		return $this->hasMany('App\Models\Familiar', 'idFamiliar', 'id');
	}

	public function documentos()
	{
		return $this->hasMany('App\Models\Documento', 'idDocumento', 'id');
	}

	public function domicilios()
	{
		return $this->hasMany('App\Models\Domicilio', 'idDomicilio', 'id');
	}

	public function antecedentes()
	{
		return $this->hasMany('App\Models\Antecedente', 'idAntecedente', 'id');
	}

	public function edocivil()
	{
		return $this->belongsTo('App\Models\CatEstadoCivil','id');
	}

	/*public function nacionalidad()
	{
		return $this->belongsTo('App\Models\CatNacionalidad','id');
	}*/

	public function ocupacion()
	{
		return $this->belongsTo('App\Models\CatOcupacion','id');
	}

	public function escolaridad()
	{
		return $this->belongsTo('App\Models\CatEscolaridad','id');
	}

	public function persona()
	{
		return $this->belongsTo('App\Models\Persona','id');
	}	

}
