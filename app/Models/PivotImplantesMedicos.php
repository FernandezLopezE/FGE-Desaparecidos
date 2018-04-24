<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PivotImplantesMedicos extends Model
{
    //
    protected $table = 'pivot_implantes_medicos';
	protected $fillable = [
		'idImplantes',
		'idAntecedentesMedicos',	
	];
}
