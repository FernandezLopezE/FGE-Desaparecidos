<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nombre_desaparecidos extends Model
{
    //





public function domiciliosDesaparecidos()

	{
		return $this->hasMany('App\nombre_desaparecidos','idPersona','id');
	}
	
}