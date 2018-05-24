<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DesaparicionRequest extends FormRequest
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
            'desaparicionFecha'       => 'required|date_format:d/m/Y H:i:s|before_or_equal:'.date('Y-m-d H:i:s'),
           /* 'horas'                  => 'required',
            'minutos'               => 'required',*/
           
            'nombres'               => 'required',
            'segundoAp'             => '',
            'primerAp'              => 'required',
            'calle'                 => 'required',
            'referencia'            => 'required',
            'idEstado'              => 'required',
            'idMunicipio'           => 'required',
            'idLocalidad'           => 'required',
            'idColonia'             => 'required',
            'idCodigoPostal'        => 'required',
            'idParentesco'          => 'required',
            'descripcion'           => 'required',
        ];

        

        return $rules;
    }
}
