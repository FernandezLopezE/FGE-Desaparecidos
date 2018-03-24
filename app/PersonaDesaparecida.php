<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonaDesaparecida extends Model
{

    protected $table = 'persona_desaparecida';
    protected $fillable = [
    	'nombre',
    	'apellidoPaterno',
    	'apellidoMaterno',
    	'apodo',
    	'edadAparente',
    	'nacionalidad',
    	'fechaNacimiento',
    	'estadoCivil',
    	'genero',
    	'embarazo',
    	'periodoGestacion',
    	'rumores',
    	'pormenores',
    	'escolaridad',
    	'ocupacion'
    ];

	public function parentesco(){
		return $this->belongsTo('App\parentesco', 'idParentesco', 'id');
	}

	public function domiciliosDesaparecidos(){
		return $this->hasMany('App\nombre_desaparecidos','idPersona','id');

	}

}