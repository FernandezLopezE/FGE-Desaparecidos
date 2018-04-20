<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PivotEnfermedadesMedicas extends Model
{
    //
    protected $table = 'pivot_enfermedades_medicas';
	protected $fillable = [
		'idEnfermedades',
		'idAntecedentesMedicos',	
	];
}
