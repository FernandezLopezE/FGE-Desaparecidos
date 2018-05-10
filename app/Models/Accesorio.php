<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Accesorio extends Model
{
	protected $table = 'desaparecidos_accesorios';
	protected $fillable = [	
	    'tipo',
	    'material',
	    'color',
	    'otroColor',
	    'marcaOrigen',
	    'idCedula',
	];
}
