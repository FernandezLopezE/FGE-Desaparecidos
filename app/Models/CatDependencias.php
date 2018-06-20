<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatDependencias extends Model
{
   protected $table = 'cat_dependencias';
   protected $fillable = [
   							'nombre',
	    					'correo',
	    				 ];
    
 //   public function destinatarios()
	// {
	// 	return $this->hasMany('App\Models\CatDestinatarios', 'id_dependencia', 'id');
	// } 
}