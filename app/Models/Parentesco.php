<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parentesco extends Model
{

	protected $table ='cat_parentesco';

	protected $fillable = [
            'nombre',
            'apellidoPaterno',
            'apellidoMaterno',
            'parentesco',
            'edad',
	];

    /*public function PersonaDesaparecida()
    {
    	return $this->hasMany('App\nombre_desaparecidos', 'id_parentesco', 'id');
    }*/
}
