<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatSubParticularidades extends Model
{
    //
    protected $table = 'cat_sub_particularidades';
	protected $fillable = [
		'nombre',
		'idParticularidadesCuerpo',
	];
}
