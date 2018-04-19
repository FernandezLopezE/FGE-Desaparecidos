<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatPartesCuerpo extends Model
{
    //
    protected $table = 'cat_partes_cuerpo';
	protected $fillable = [
		'nombre',
		'imagen',
	];

	/*public function coloresCuerpo(){
		return $this->belongsTo('App\Models\CatColoresCuerpo','idColoresCuerpo','id');
	}*/
}
