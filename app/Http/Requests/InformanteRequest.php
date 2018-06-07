<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InformanteRequest extends FormRequest
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
			'nombres'					=> 'required',
			'primerAp'					=> 'required',
			'segundoAp '				=> '',
			'idParentesco'				=> 'required',
			'otroParentesco'			=> '',
			'idNacionalidad'			=> 'required',
			'idDocumentoIdentidad'		=> 'required',
			'otroDocIdentidad'			=> '',
			'numDocIdentidad'			=> 'required_unless:idDocumentoIdentidad,1|max:20',
			'tipoDireccion'				=> 'required',
			'calle'						=> 'required',
			'numExterno'				=> 'required',
			'numInterno'				=> '',
			'idEstado'					=> 'required',
			'idMunicipio'				=> 'required',
			'idLocalidad'				=> 'required',
			'idColonia'					=> 'required',
			'idCodigoPostal'			=> 'required',
			//'tipoTelefono'				=> 'required',
			//'lada'						=> 'required' ,            
			//'telefono'					=> 'required',          
			//'correoElectronico'			=> 'unique:desaparecidos_personas,correoElectronico,'.$this->segment(2).',id',
			'informante'				=> '',
			'notificaciones'			=> '',
		];

		return $rules;
	}

	public function messages()
    {
        return [
            'numDocIdentidad.required_unless' => 'El campo número de identificación es requerido.',
          
        ];
    }
}
