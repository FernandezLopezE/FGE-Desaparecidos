<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DesaparecidoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //Datos Persona
            'nombres' => 'required',
            'primerAp' => 'required',
            'segundoAp' => 'required',
            'fechaNacimiento' => 'required',
            'idNacionalidad' => 'required'
            'sexo' => 'required',

            //Datos familia
            'parentesco' => 'required',
            'nombres' => 'required',
            'primerAp' => 'required',
            'segundoAp' => 'required',
            'edad' => 'required',
            'idDesaparecido' => 'required',

            //Datos Domicilio
            'tipoDireccion' => 'required',
            'calle' => 'required',
            'numExterno' => 'required',
            'numInterno' => 'required',
            'telefono' => 'required',
            'idMunicipio' => 'required',

            //Datos desaparecido
            'apodo' => 'required',
            'edadAparente' => 'required',
            'embarazo' => 'required',
            'periodo' => 'required',
            'pormenores' => 'required',
            'antecedentesJudiciales' => 'required',
            'idEdoCivil' => 'required',
            'idOcupacion' => 'requied',
            'idEscolaridad' => 'required',
            'idPersona' => 'required',

            'identificacion' => 'required',
            'otroId' => 'required',
            'noId' => 'required',
            'idPersona' => 'required',
        ];
    }
}
