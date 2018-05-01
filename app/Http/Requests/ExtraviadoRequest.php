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
			'fechaNacimiento'		=> 'required_unless:idDocumentoIdentidad,1',
			'edadExtravio'			=> 'required_unless:idDocumentoIdentidad,1',
			'edadAparente'			=> 'required',
			'curp'					=> 'required_unless:idDocumentoIdentidad,1',
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
}