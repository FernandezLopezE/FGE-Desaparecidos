<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DomicilioDesaparecido extends FormRequest
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
            
                'tipoDireccion' => 'required',
                'calle' => 'required',
                'numExterno' => 'required',
                'idMunicipio' => 'required',
                'idLocalidad' => 'required',
                'idColonia' => 'required',
                //codigoPostal =>required,



        ];
    }
}
