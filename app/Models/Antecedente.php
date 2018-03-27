<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Antecedente extends Model
{
    //
    protected $table = 'antecedentes';

    protected $fillabel = ['antecedentes','mes','anio','observaciones','idPersonaDesaparecidos','idDelito','idCentroReclusion'];

	/*public function nombreDesaparecidos(){
		return $this->hasMany('App\Models\Desaparecido','idDesaparecido','id');
	}

	public function delitos(){
		return $this->belongsTo('App\Delito','idDelito','id');
	}

	public function centroReclusion(){
		return $this->belongsTo('App\CentroReclusion','idCentroReclusion','id');
	}*/


}
