<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cedula extends Model
{
	protected $table = 'desaparecidos_cedula_investigacion';
	protected $fillable = [		
		'primeraVez',
		'fecha',
		'calzadoTalla',
		'observacionesDesaparicion',
		'estatura',
		'peso',
		'idCalzadotipo',
		'idCalzadomodelo',
		'idCalzadocolor',
		'idCalzadomarca',
		'idComplexion',
		'idColorPiel',
		'idCeja',
	];    

	public function desaparecidos()
	{
		return $this->hasMany('App\Models\Desaparecido', 'idDesaparecido', 'id');
	}

	public function complexion()
	{
		return $this->belongsTo('App\Models\CatComplexion','idComplexion');
	}

	public function colorpiel()
	{
		return $this->belongsTo('App\Models\CatColorPiel','idColorPiel');
	}

	public function ceja()
	{
		return $this->belongsTo('App\Models\CatCeja','idCeja');
	}

	public function calzadotipo()
	{
		return $this->belongsTo('App\Models\CatCalzadoTipo','idCalzadotipo');
	}

	public function calzadomodelo()
	{
		return $this->belongsTo('App\Models\CatCalzadoModelo', 'idCalzadomodelo');
	}

	public function calzadomarca()
	{
		return $this->belongsTo('App\Models\CatCalzadoMarca', 'idCalzadomarca');
	}

	public function calzadocolor()
	{
		return $this->belongsTo('App\Models\CatCalzadoColor', 'idCalzadocolor');
	}


}
