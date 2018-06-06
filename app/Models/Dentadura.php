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

	public function desaparecido()
	{
		return $this->hasOne('App\Models\Desaparecido', 'idDesaparecido', 'id');
	}

	public function cattamanodiente()
	{
		return $this->belongsTo('App\Models\CatTamanoDiente','idTamanoDiente');
	}

	public function cattipoperfil()
	{
		return $this->belongsTo('App\Models\CatTipoPerfil','idTipoPerfil');
	}

	public function cattipomordida()
	{
		return $this->belongsTo('App\Models\CatTipoMordida','idTipoMordida');
	}

	public function cattiposonrisa()
	{
		return $this->belongsTo('App\Models\CatTipoSonrisa','idTipoSonrisa');
	}

	public function cattratamientodiente()
	{
		return $this->belongsTo('App\Models\CatTratamientoDiente','tratamientos');
	}
}