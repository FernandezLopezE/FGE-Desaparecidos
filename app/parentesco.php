<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parentesco extends Model
{
    public function PersonaDesaparecida()
    {
    	return $this->hasMany('App\nombre_desaparecidos', 'id_parentesco', 'id');
    }
}
