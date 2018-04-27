<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dentista extends Model
{
    protected $table = 'desaparecido_dentista';

	protected $fillable = [
				'nombres',
				'primerAp',
				'segundoAp',
				'empresa',
				'telefono',
				'direccion',
	];
}
