<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatNacionalidad extends Model
{
	public $table = 'cat_nacionalidad';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	
	public $fillable = [
		'id',
		'nombre'
	];

	public function desaparecidos()
	{
		return $this->hasMany('App\Models\Desaparecido', 'idDesaparecido', 'id');
	}
}