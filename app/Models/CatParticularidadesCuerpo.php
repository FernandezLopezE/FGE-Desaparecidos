<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatParticularidadesCuerpo extends Model
{
    //
    protected $table = 'cat_particularidades_cuerpo';
	protected $fillable = [
		'nombre',
		'idPartesCuerpo',
	];
}
