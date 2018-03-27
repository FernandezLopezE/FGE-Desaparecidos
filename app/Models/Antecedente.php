<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Antecedente extends Model
{
	protected $table = 'desaparecidos_antecedentes';
	protected $fillable = [
			'mes',
			'anio',
			'observaciones',
			'idDesaparecido',
			'idDelito',
			'idCentroReclusion'
	];
}