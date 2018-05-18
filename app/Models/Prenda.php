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
}
