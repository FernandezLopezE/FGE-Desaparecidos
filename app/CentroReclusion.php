<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CentroReclusion extends Model
{
    //
    protected $table = 'cat_centro_reclusion';

    protected $fillabel = ['centroReclusion'];

    public function antecedentes(){
    	return $this->hasMany('App\Antecendente','idCentroReclusion','id');
    }

}
