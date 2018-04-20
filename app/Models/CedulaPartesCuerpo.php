<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CedulaPartesCuerpo extends Model
{
    //
    protected $table = 'cedula_partes_cuerpo';
	protected $fillable = [
		'lado',
		'observaciones',
		'idPartesCuerpo',
		'idColoresCuerpo',
		'idPersonaDesaparecida',
	];
}
