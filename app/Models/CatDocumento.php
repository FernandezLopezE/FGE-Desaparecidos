<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatDocumento extends Model
{
    //
    protected $table= 'cat_documento_identidad';
    protected $fillable = ['nombre'];

	public function desaparecidos()
	{
		return $this->hasMany('App\Models\Desaparecido', 'idDesaparecido', 'id');
	}

	    
}
