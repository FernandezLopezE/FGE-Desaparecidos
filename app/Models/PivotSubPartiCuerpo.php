<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PivotSubPartiCuerpo extends Model
{
    //
    protected $table = 'pivot_subparti_cuerpo';
	protected $fillable = [
		'idCedulaPartesCuerpo',
		'idParticularidades',
	];
}
