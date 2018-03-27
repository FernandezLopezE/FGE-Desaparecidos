<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    //
    protected $table ='documentos_identidad';

    protected $fillabel = ['identificacion','otraIdentificacion','noIdentificacion','idPersonaDesaparecidos'];

    /*public function persona(){
    	return $this->belongsTo('App\PersonaDesaparecida','idPersonaDesaparecida','id');
    }*/
}
