<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Cedula extends Model
{
	protected $table = 'desaparecidos_cedula_investigacion';
	protected $fillable = [		
		'entrevistadorNombres',
		'entrevistadorPrimerAp',
		'entrevistadorSegundoAp',
		'entrevistadorCargo',
		'carpeta',
		'idCarpeta',
		'interpreteNombres' ,			
		'interpretePrimerAp', 			
		'interpreteSegundoAp',			
		'interpreteOrganizacion',		
		'otroDialecto',
		'entrevistadorPrimeraVez',		
		'fechaVisita',
		'idDialecto',
		'calzadoTalla',
		'desaparicionObservaciones',
		'desaparicionRef',
		'desaparicionFecha',
		'desaparicionHora',
        /*'idEstadoDesaparicion',         
        'idMunicipioDesa',
        'idLocalidadDesapa',*/
        'idPersonaAvisto',
        //'domicilioDesaparicion',
        'vehiculoDescripcion',
        'vehiculoPlacas',
        'idParentescoAvisto',
        'otroParentescoAvisto',
        'nombresAvisto',
        'primerApAvisto',
        'segundoApAvisto',
		//'estatura',
		//'peso',
		'objetos',
		'modeloCalzado',
		'otroColorCalzado',
		'otroCalzado',
		'otraMarca',
		'idCalzadotipo',
		'idCalzadomodelo',
		'idCalzadocolor',
		'idCalzadomarca',
		//'idComplexion',
		//'idColorPiel',
	];    
	public function desaparecidos()
	{
		return $this->hasMany('App\Models\Desaparecido', 'id', 'id');
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
	public function dialecto()
	{
		return $this->belongsTo('App\Models\CatDialecto', 'idDialecto');
	}
	public function setFechaVisitaAttribute($value)
	{
		if (empty($value)) {
			$this->attributes['fechaVisita'] = null;
		} else {
			$this->attributes['fechaVisita'] = Carbon::createFromFormat('d/m/Y', $value)->format('Y-m-d');
		}
		
	}
	public function senaparticular()
	{
		return $this->belongsToMany('App\Models\cedula_cat_cenas')
		->withPivot('idCatsenasParticulares');
	}
	public function senaparticularubicacion()
	{
		return $this->belongsToMany('App\Models\cedula_cat_cenas')
		->withPivot('idCatsenas');
	}
	public function ultimaPersonaAvisto()
	{
		return $this->belongsTo('App\Models\Persona', 'id');
	}
	public function domicilioDesaparicion()
	{
		return $this->belongsTo('App\Models\Domicilio', 'id');
	}
	public function setDesaparicionFechaAttribute($value)
	{
		if(empty($value)){
			$this->attributes['desaparicionFecha'] = null;	
		} else {
			$this->attributes['desaparicionFecha'] = Carbon::createFromFormat('d/m/Y H:i:s', $value)->format('Y-m-d H:i:s');			
		}
		
	}
	/*public function getDesaparicionFechaAttribute($value)
	{
		
			return  Carbon::createFromFormat('Y/m/d H:i:s', $value)->format('d-m-Y H:i:s');			
		
		
	}*/

}