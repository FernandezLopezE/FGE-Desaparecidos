<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DatosDentista extends FormRequest
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
            'nombres'       =>'',
            'primerAp'      =>'',
            'segundoAp'     =>'',
            'empresa'       =>'',
            'telefono'      =>'',
            'direccion'     =>'',
        ];
        return $rules;
    }
    public function messages()
    {
        return [
            'nombres.required'  => 'El campo nombres es requerido.',
            'primerAp.required' => 'El campo primer apellido es requerido.',
            'empresa.required'  => 'El campo empresa es requerido.',
            'telefono.required' => 'El campo teléfono es requerido.',
            'direccion'         => 'El campo dirección es requerido.'
        ];
    }
}
