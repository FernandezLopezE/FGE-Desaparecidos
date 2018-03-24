<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Antecedente extends Model
{
    //
    protected $table = 'antecedentes';

    protected $fillabel = ['antecedentes','mes','anio','observaciones','idNombreDesaparecidos','idDelito','idCentroReclusion'];

	public function nombreDesaparecidos(){
		return $this->hasMany('App\PersonaDesaparecida','idPersonaDesaparecida','id');
	}

	public function delitos(){
		return $this->belongsTo('App\Delito','idDelito','id');
	}

	public function centroReclusion(){
		return $this->belongsTo('App\CentroReclusion','idCentroReclusion','id');
	}


}
