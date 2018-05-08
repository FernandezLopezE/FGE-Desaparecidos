<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExtraviadoRequest extends FormRequest
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
			'sexo'					=> 'required|in:H,M',
			'idDocumentoIdentidad'	=> 'required',
			'nombres'				=> 'required_unless:idDocumentoIdentidad,1',
			'segundoAp' 			=> 'required_unless:idDocumentoIdentidad,1',
			'primerAp' 				=> 'required_unless:idDocumentoIdentidad,1',
			'apodo'					=> 'required_without:nombres,segundoAp,primerAp',
			'idNacionalidad'		=> 'required_unless:idDocumentoIdentidad,1',
			'idEstadoOrigen'		=> 'required_unless:idDocumentoIdentidad,1',
			'fechaNacimiento'		=> 'required_unless:idDocumentoIdentidad,1|date_format:d/m/Y|before_or_equal:'.date('Y-m-d'),
			'edadExtravio'			=> 'required_unless:idDocumentoIdentidad,1',
			'edadAparente'			=> 'required',
			'curp'					=> 'required_unless:idDocumentoIdentidad,1|unique:persona,curp,'.$this->request->get('idPersona').',id',
			'otroDocIdentidad' 		=> 'required_if:idDocumentoIdentidad,9',
			'numDocIdentidad' 		=> 'required_unless:idDocumentoIdentidad,1',
			
		];

		if ($this->request->get('sexo') == 'M' and $this->request->get('embarazo') == 'SI')
        {			
			$rules['numGestacion'] 		= 'required_if:embarazo,SI|int|min:1|max:40';
			$rules['tipoGestacion'] 	= 'required_if:embarazo,SI';
			if($this->request->get('embarazo') == 'SI')
			{
				$rules['pormenores'] = 'required_if:rumoresBebe,SI';	
			}
			
        }

		return $rules;
	}

	public function attributes()
	{
		return [
			'sexo'						=> 'Sexo',
			'idDocumentoIdentidad'		=> 'Documento de identidad',
			'primerAp'					=> 'Primer apellido',
			'segundoAp'					=> 'Segundo apellido',
			'apodo'						=> 'Apodo',
			'idNacionalidad'			=> 'Nacionalidad',
			'idEstadoOrigen'			=> 'Estado de origen',
			'fechaNacimiento'			=> 'Fecha de nacimiento',
			'edadExtravio'				=> 'Edad de extravio',
			'edadAparente'				=> 'Edad aparente',
			'curp'						=> 'CURP',
			'otroDocIdentidad'			=> 'Otro documento de identidad',
			'numDocIdentidad'			=> 'Número del documento de identidad',
			'numGestacion'				=> 'Número de gestación',
			'embarazo'					=> 'Esta embarazada',

		];
	}

}