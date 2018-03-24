<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nombre_desaparecidos extends Model
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
    		return $this->belongsTo('App\parentesco');
    	}

}
