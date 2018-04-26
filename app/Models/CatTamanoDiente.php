<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatTamanoDiente extends Model
{
    public $table = 'cat_tamano_diente';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	
	public $fillable = [
		'id',
		'nombreTamano'
	];
}
