<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatEncargado extends Model
{
   protected $table = 'cat_encargado';
	protected $fillable = [	
	    					'nombres',
	    					'primerAp'
	    					'segundoAp'
	    					'cargo',
						];

// public function dependencia()
// 	{
// 		return $this->belongsTo('App\Models\CatDependencias','id_dependencia');
// 	}
	
}

