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
            //Datos Persona
            'nombres' => 'required',
            'primerAp' => 'required',
            'segundoAp' => 'required',
            'fechaNacimiento' => 'required|Y/m/d',
            'idNacionalidad' => 'required'
            'sexo' => 'required',

            //Datos familia
            'parentesco' => 'required',
            /*'nombres' => 'required',
            'primerAp' => 'required',
            'segundoAp' => 'required',*/
            'edad' => 'required',
            

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

            //Datos Domicilio
            'tipoDireccion' => 'required',
            'calle' => 'required',
            'numExterno' => 'required',
            'numInterno' => 'required',
            'telefono' => 'required|integer',
            'idMunicipio' => 'required',
            'idLocalidad' => 'required',
            'idColonia' => 'required',
            

            //Datos documentos de identificacion
            'identificacion' => 'required',
            'otraIdentificacion' => 'required',
            'numIdentificacion' => 'required',
            

            //Datos Antecedentes
            'mes' => 'required',
            'anio'=> 'required',
            'observaciones' => 'required',
            'idDesaparecido' => 'required',
            'idDelito' => 'required',
            'idCentroReclusion' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nombres.required' => 'Nombre es Requerido',
            'primerAp.required'  => 'Primer apellido es requerido',
            'segundoAp.required'  => 'Segundo apellido es requerido',
        ];
    }
}
