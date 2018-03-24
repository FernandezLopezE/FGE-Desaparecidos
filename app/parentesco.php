<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class parentesco extends Model
{
    public function nombre_desaparecidos()
    {
    	return $this->hasMany('App\nombre_desaparecidos', 'id_parentesco', 'id');
    }
}
