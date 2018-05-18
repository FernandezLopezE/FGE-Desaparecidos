<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
            'material'          => 'required',
            'diseno'            => 'required',
            'talla'             => '',
            'idMarca'           => 'required',
            'idColor'           => '',
            'idVestimenta'      => 'required',
            'idPrenda'          => 'required',
            'idDesaparecido'    => '',
            //'archivo'           => 'required|mimes:png'
        ];

        return $rules;
    }
}
