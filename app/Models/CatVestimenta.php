<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatVestimenta extends Model
{
    ////cat_vestimenta
    protected $table = 'cat_vestimenta';
	protected $fillable = [
		'id',
		'nombre'	
	];
}
