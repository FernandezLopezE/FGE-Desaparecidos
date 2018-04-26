<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AntecedentesMedicos extends Model
{
    //
    protected $table = 'antecedentes_medicos';
	protected $fillable = [
		'observaciones',
		'medicamentosToma',
		'idCedula',	
	];
}
