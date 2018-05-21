<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DescripcionFisicaRequest extends FormRequest
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
            //

            'estatura' => 'int|max:250|min:40',
            'peso' => 'numeric|min:2.400|max:635.000',
            
        ];
    }

    public function messages()
    {
        return [
            'estatura.min' => 'La estatura minima debe ser de al menos 40 cm.',
            'estatura.max' => 'La estatura maxima no debe ser mayor a 250 cm.',
            'peso.min' => 'El peso minimo debe debe ser 2.400 kg.',
            'peso.max' => 'El peso máximo no debe ser mayor a 635 kg.'
        ];
    }
}
