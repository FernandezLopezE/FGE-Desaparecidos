<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class domicilios_desaparecidos extends Model
{
    
	protected $table = 'domicilios_desaparecidos';
    protected $fillable = [
    	'tipoDireccion',
    	'idMunicipio',
    	'idLocalidad',
    	'idColonia',
    	'idCalle',
    	'numExterno',
    	'numInterno',
    	'telefono',
    	'idPersona'
    ];

    public function nombre_desaparecidos(){

    	return $this->belongsTo('App\nombre_desaparecidos');
    }

}
