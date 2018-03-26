<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Domicilio extends Model
{
    
	protected $table = 'domicilios_desaparecidos';
    protected $fillable = [
    	'tipoDireccion',
    	'idMunicipio',
    	'idLocalidad',
    	'idColonia',
    	'calle',
    	'numExterno',
    	'numInterno',
    	'telefono',
    	'idPersona'
    ];

    /*public function PersonaDesaparecida(){

    	return $this->belongsTo('App\nombre_desaparecidos');
    }*/

}
