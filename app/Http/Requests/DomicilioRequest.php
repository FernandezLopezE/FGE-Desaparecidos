<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DomicilioRequest extends FormRequest
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
            'calle'             =>'required',
            'numExterno'        =>'required',
            'idMunicipio'       =>['required',
                                    function($attribute, $value, $fail){
                                        if($value === "null"){
                                            return $fail('El campo municipio es requerido');
                                        }
                                    }],
            'idLocalidad'       =>['required',
                                    function($attribute, $value, $fail){
                                        if($value === "null"){
                                            return $fail('El campo localidad es requerido');
                                        }
                                    }],
            'idColonia'         =>['required',
                                    function($attribute, $value, $fail){
                                        if($value === "null"){
                                            return $fail('El campo colonia es requerido');
                                        }
                                    }],
            'idCodigoPostal'    =>['required',
                                    function($attribute, $value, $fail){
                                        if($value === "null"){
                                            return $fail('El campo código postal es requerido');
                                        }
                                    }],
        ];
        return $rules;
    }

    public function messages()
    {
        return [
            'numExterno.required'  => 'El campo número exterior es requerido.',
            'idMunicipio.required'  => 'El campo municipio es requerido.',
            'idLocalidad.required'  => 'El campo localidad es requerido.',
            'idColonia.required'  => 'El campo colonia es requerido.',
            'idCodigoPostal.required'  => 'El campo código postal es requerido.',
        ];
    }

}
