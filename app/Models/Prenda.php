<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prenda extends Model
{
	protected $table = 'persona';

	protected $fillable = [	
	    'tipo',
	    'material',
	    'color',
	    'dibujoBordadoFranja',
	    'marcaOrigen',
	    'talla',
	    'idCedula',
	]

}
