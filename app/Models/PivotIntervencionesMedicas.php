<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PivotIntervencionesMedicas extends Model
{
    //
    protected $table = 'pivot_intervenciones_medicas';
	protected $fillable = [
		'idIntervencionesQuirurgicas',
		'idAntecedentesMedicos',	
	];
}
