<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Prenda extends Model
{
	protected $table = 'desaparecidos_prendas';
	protected $fillable = [	    
	    'material',
	    'diseno',	    
	    'talla',
	    'path',
	    'idMarca',
	    'idColor',
	    'idVestimenta',
	    'idPrenda',
	    'idDesaparecido',
	];

	// Prenda pertenece a una vestimenta, Parametros:
	public function vestimenta()
	{		
		return $this->belongsTo('App\Models\CatVestimenta','idVestimenta','id');
	}

	public function prenda()
	{
		return $this->belongsTo('App\Models\CatPrenda', 'idPrenda');
	}

	public function marca()
	{
		return $this->belongsTo('App\Models\CatMarca', 'idMarca');
	}

	public function color()
	{
		return $this->belongsTo('App\Models\CatColores', 'idColor');
	}
}
