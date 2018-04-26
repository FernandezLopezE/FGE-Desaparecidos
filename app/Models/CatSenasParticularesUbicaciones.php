<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatSenasParticularesUbicaciones extends Model
{
    public $table = 'cat_senas_particulares_ubicaciones';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	
	public $fillable = [
		'id',
		'nombre'
	];

	public function cedula()
	{
		return $this->belongsToMany('App\Models\cedula_cat_cenas')
		->withPivot('idCatsenasParticulares');
	}
	public function senaparticular()
	{
		return $this->belongsToMany('App\Models\cedula_cat_cenas')
		->withPivot('idCedula');
	}
}
