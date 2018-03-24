<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    //
    protected $table ='documentos_identificacion';

    protected $fillabel = ['identificacion','otraIdentificacion','noIdentificacion','idPersonaDesaparecida'];

    public function persona(){
    	return $this->belongsTo('App\PersonaDesaparecida','idPersonaDesaparecida','id');
    }
}
