<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class VestimentaRequest extends FormRequest
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
            'material'          => '',
            'diseno'            => '',
            'talla'             => '',
            'idMarca'           => 'required',
            'idColor'           => '',
            'idVestimenta'      => ['required',
                                    function($attribute, $value, $fail){
                                        if($value === "1"){
                                            return $fail('Seleccione una vestimenta.');
                                        }
                                    }],
            'idPrenda'          => ['required',
                                    function($attribute, $value, $fail){
                                        if($value === "null"){
                                            return $fail('La Prenda es requerida.');
                                        }
                                    }],


            //'idDesaparecido'    => 'unique:desaparecidos_prendas,idDesaparecido,'.$this->request->get('idPrenda').',id,idPrenda,3',
            //'archivo'           => 'required|mimes:png'
            /*'idDesaparecido'    => ['required',
                                    function($attribute, $value, $fail){
                                        if ($value === '32'){
                                            return $fail($attribute.' es invalido.');
                                        }
                                    }
                                    ],*/
        ];
        return $rules;
    }

    public function messages()
    {
        return [
            'diseno.required'  => 'El campo observaciones es requerido.',
            'idMarca.required'  => 'El campo marca es requerido.',
            'idVestimenta.required'  => 'El campo vestimenta es requerido.',
            'idPrenda.required'  => 'El campo prenda es requerido.',
        ];
    }

}
