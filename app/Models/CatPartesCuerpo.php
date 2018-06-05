<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatPartesCuerpo extends Model
{
    //
    protected $table = 'cat_partes_cuerpo';
	protected $fillable = [
		'nombre',
		'partePadre',
		'reglas'
	];

	public function partescuerpo()
	{
		return $this->hasMany('App\Models\CedulaPartesCuerpo', 'id', 'idPartesCuerpo');
	}
}
