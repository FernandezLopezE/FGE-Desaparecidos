<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dentadura extends Model
{
    protected $table = 'desaparecido_dentadura';
    protected $fillable = [
			'idTamanoDiente',
			'dienteCompleto',
			'asistioDentista',
			'tieneInfoDentista',
			'nombres',
			'primerAp',
			'segundoAp',
			'empresa',
			'telefono',
			'direccion',
			'tratamientos',
			'perdiodiente',
			'higieneBucal',
			'describeHigBucal',
			'caries',
			'describeCaries',
			'abcesos',
			'describeAbcesos',
			'enfermedades',
			'maloshabitos',
			'arraymaloshabitos',
			'describeHabito',
			'idTipoPerfil',
			'idTipoMordida',
			'idTipoSonrisa',
		];
}