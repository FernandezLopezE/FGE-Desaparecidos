<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatSenasParticulares extends Model
{
    public $table = 'cat_senas_particulares';

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
	public function cenaparticularubicacion()
	{
		return $this->belongsToMany('App\Models\cedula_cat_cenas')
		->withPivot('idCedula');
	}
}
