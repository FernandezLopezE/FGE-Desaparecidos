<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PivotOficioDependenciaEncargado extends Model
{
    protected $table = 'oficio_dependencia';
	protected $fillable = [
		'idOficio',
		'idDependencia',
		'idEncargado',
	];
}
