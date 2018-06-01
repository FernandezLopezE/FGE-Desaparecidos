<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AntecedentesMedicos extends Model
{
    //
    protected $table = 'antecedentes_medicos';
	protected $fillable = [
		'otraEnfermedad',
		'otraIQ',
		'otraAdiccion',
		'otroImplante',
		'observaciones',
		'medicamentosToma',
		'idCedula',	
	];
}
