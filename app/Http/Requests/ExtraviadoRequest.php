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
			'nombres'				=> 'required_unless:idDocumentoIdentidad,NO ESPECIFICADO',
			'segundoAp' 			=> 'required_unless:idDocumentoIdentidad,NO ESPECIFICADO',
			'primerAp' 				=> 'required_unless:idDocumentoIdentidad,NO ESPECIFICADO',
			'apodo'					=> 'required_without:nombres,segundoAp,primerAp',
			'idNacionalidad'		=> 'required_unless:idDocumentoIdentidad,NO ESPECIFICADO',
			'idEstadoOrigen'		=> 'required_unless:idDocumentoIdentidad,NO ESPECIFICADO',
			'fechaNacimiento'		=> 'required_unless:idDocumentoIdentidad,NO ESPECIFICADO|date_format:d/m/Y|before_or_equal:'.date('Y-m-d'),
			'edadExtravio'			=> 'required_unless:idDocumentoIdentidad,NO ESPECIFICADO',
			'edadAparente'			=> 'required|Integer|Min:1|Max:150',
			'curp'					=> 'required_unless:idDocumentoIdentidad,NO ESPECIFICADO|unique:persona,curp,'.$this->request->get('idPersona').',id',
			'otroDocIdentidad' 		=> 'required_if:idDocumentoIdentidad,OTRO',
			'numDocIdentidad' 		=> 'required_unless:idDocumentoIdentidad,NO ESPECIFICADO',
			
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

	public function messages()
    {
        return [
            'numDocIdentidad.required_unless' => 'El campo es requerido.',
            'fechaNacimiento.date_format' => 'El campo no corresponde al formato dd/mm/aaaa.',
        ];
    }

}