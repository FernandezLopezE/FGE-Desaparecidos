<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desaparecido extends Model
{

    protected $table = 'persona_desaparecidos';
    protected $fillable = [
    	'nombre',
    	'apellidoPaterno',
    	'apellidoMaterno',
    	'apodo',
    	'edadAparente',
    	'id_nacionalidad',
    	'fechaNacimiento',
    	'id_edocivil',
    	'genero',
    	'embarazo',
    	'periodoGestacion',
    	'rumores',
    	'pormenores',
    	'escolaridad',
    	'ocupacion'
    ];

	/*public function parentesco(){
		return $this->belongsTo('App\parentesco', 'idParentesco', 'id');
	}

	public function domiciliosDesaparecidos(){
		return $this->hasMany('App\nombre_desaparecidos','idPersona','id');

	}*/

}