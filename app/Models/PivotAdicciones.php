<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PivotAdicciones extends Model
{
    //
    protected $table = 'pivot_adicciones';
	protected $fillable = [
		'idAdicciones',
		'idAntecedentesMedicos',	
	];
}
