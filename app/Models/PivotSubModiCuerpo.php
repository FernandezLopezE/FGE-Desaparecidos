<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PivotSubModiCuerpo extends Model
{
    //
    protected $table = 'pivot_submodi_cuerpo';
	protected $fillable = [
		'idCedulaPartesCuerpo',
		'idSubModificaciones',
	];
}
