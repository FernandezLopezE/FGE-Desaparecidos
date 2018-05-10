<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatRedesSociales extends Model
{
	    public $table = 'cat_redes_sociales';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	
	public $fillable = [
		'id',
		'nombre'
	];


}
