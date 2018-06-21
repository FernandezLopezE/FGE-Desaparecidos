<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PivotOficioDependenciaEncargado extends Model
{
    protected $table = 'pivot_oficio_dependencia';
	protected $fillable = [
		'idOficio',
		'idDependencia',
		'idEncargado',
	];
}
