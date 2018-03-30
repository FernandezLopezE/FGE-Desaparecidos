<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateDesaparecidoRequest extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'sexo'				=> 'required',
			'nombres' 				=> 'required',
			'primerAp' 				=> 'required',
			'segundoAp' 			=> 'required',
			'apodo' 				=> 'required',
			'edadExtravio' 			=> 'required',
			'edadAparente' 			=> 'required',
			'fechaNacimiento'			=> 'required',
			'idNacionalidad' 			=> 'required',			
			'parentesco' 			=> 'required',


			
			
			'embarazo' 				=> 'required',
			//'periodo' 				=> 'required',
			'pormenores' 			=> 'required',
			'antecedentesJudiciales' 	=> 'required',
			'idEdocivil' 			=> 'required',
			'idOcupacion' 			=> 'required',
			'idEscolaridad' 			=> 'required',
			'tipoDireccion' 			=> 'required',
			'calle' 				=> 'required',
			'numExterno' 			=> 'required',
			'numInterno' 			=> 'required',
			'telefono' 				=> 'required',
			/*'idMunicipio' 			=> 'required',
			'idLocalidad' 			=> 'required',
			'idColonia' 			=> 'required',*/
			'identificacion' 			=> 'required',
			'otraIdentificacion' 		=> 'required',
			'numIdentificacion' 		=> 'required',
			'mes' 				=> 'required',
			'anio'				=> 'required',
			'observaciones' 			=> 'required',
			'idDelito' 				=> 'required',
			'idCentroReclusion' 		=> 'required',                        
		];
	}
}
