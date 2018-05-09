<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatDestinatarios extends Model
{
   protected $table = 'cat_destinatarios';
	protected $fillable = [	
	    'nombre',
	    'cargo',
        'id_dependencia',
	];

public function dependencia()
	{
		return $this->belongsTo('App\Models\CatDependencias','id_dependencia');
	}
	
}

