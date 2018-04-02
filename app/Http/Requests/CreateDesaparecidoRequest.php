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
		$rules = [
			'sexo'						=> 'required',
			'idEdocivil' 				=> 'required',
			'nombres' 					=> 'required|alpha',
			'primerAp' 					=> 'alpha',
			'segundoAp' 				=> 'required_if:idEdocivil,1,2,3',
			'apodo' 					=> 'required|max:30',
			'edadExtravio' 				=> 'required|max:150|integer',
			'edadAparente' 				=> 'required|max:150|integer',
			'fechaNacimiento'			=> 'required|date_format:d/m/Y',
			'idNacionalidad' 			=> 'required',			
			'parentesco' 				=> 'required',			
			'embarazo' 					=> 'required',
			'antecedentesJudiciales' 	=> 'required',			
			'idOcupacion' 				=> 'required',
			'idEscolaridad' 			=> 'required',
			'tipoDireccion' 			=> 'required',
			'calle' 					=> 'required',
			'numExterno' 				=> 'required',
			'numInterno' 				=> 'required',
			'telefono' 					=> 'required',
			/*'idMunicipio' 			=> 'required',
			'idLocalidad' 			=> 'required',
			'idColonia' 			=> 'required',*/
			'identificacion' 			=> 'required',
			//'otraIdentificacion' 		=> 'required',
			'numIdentificacion' 		=> 'required',
			'mes' 				=> 'required',
			'anio'				=> 'required',
			'observaciones' 			=> 'required',
			'idDelito' 				=> 'required',
			'idCentroReclusion' 		=> 'required',                        
		];

		/*foreach($this->request->get('familiaresNombres') as $key => $val)
		{
			$rules['familiaresNombres.'.$key] = 'required';
		}

		foreach($this->request->get('familiaresPrimerAp') as $key => $val)
		{
			$rules['familiaresPrimerAp.'.$key] = 'required';
		}

		foreach($this->request->get('familiaresSegundoAp') as $key => $val)
		{
			$rules['familiaresSegundoAp.'.$key] = 'required';
		}
		
		foreach($this->request->get('calle') as $key => $val)
		{
			$rules['calle.'.$key] = 'required';
		}

		foreach($this->request->get('mes') as $key => $val)
		{
			$rules['mes.'.$key] = 'required';
		}

		foreach($this->request->get('anio') as $key => $val)
		{
			$rules['anio.'.$key] = 'required';
		}

		foreach($this->request->get('idDelito') as $key => $val)
		{
			$rules['idDelito.'.$key] = 'required';
		}

		foreach($this->request->get('idCentroReclusion') as $key => $val)
		{
			$rules['idCentroReclusion.'.$key] = 'required';
		}

		foreach($this->request->get('observaciones') as $key => $val)
		{
			$rules['observaciones.'.$key] = 'required';
		}*/

		return $rules;
	}
}
