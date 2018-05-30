<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cedula;

class ConexionUipjController extends Controller
{
    public function resolviendo_peticion($carpeta = 2)
    {
        $carpeta = \DB::connection('mysql2')
                            ->select('select u.nombres, u.apellidos, n.nombre as unidad, c.numCarpeta
                                        from carpeta c
                                        left outer join users u on c.idFiscal = u.id
                                        left outer join unidad n on c.idUnidad = n.id
                                        where c.id ='.$carpeta);
        

        $carpeta = $carpeta[0];       

		$cedula = Cedula::create([
			'entrevistadorNombres' 			=> $carpeta->nombres,
			'entrevistadorPrimerAp' 		=> $carpeta->apellidos,
			'entrevistadorSegundoAp'		=> '.',
            'entrevistadorCargo'			=> $carpeta->unidad,
            'carpeta'                       => $carpeta->numCarpeta,
			'entrevistadorPrimeraVez'		=> 'SI',			
			'idDialecto' 					=> '1'
		]);
        dd($cedula);



       /* $persona = \App\Models\Persona::create([
            'nombres'           => $carpeta->nombres,
            'primerAp'          => $carpeta->apellidos,
            'segundoAp'         => '.',
            'fechaNacimiento'   => \Carbon\Carbon::parse($value)->format('d/m/Y');,
            'sexo'              => $request->input('sexo'),
            'idNacionalidad'    => $request->input('idNacionalidad'),
            'curp'              => $request->input('curp'),
            'idEstadoOrigen'    => $request->input('idEstadoOrigen'),
        ]);

        $desaparecido = \App\Models\Desaparecido::create([
            'idCedula'                  => $request->input('idCedula'),
            'idPersona'                 => $persona->id,
            'apodo'                     => $request->input('apodo'),
            'edadAparente'              => $request->input('edadAparente'),
            'edadExtravio'              => $request->input('edadExtravio'),
            'embarazo'                  => $embarazo,
            'numGestacion'              => $numGestacion,
            'tipoGestacion'             => $tipoGestacion,
            'rumoresBebe'               => $rumoresBebe,
            'pormenores'                => $pormenores,
            'antecedentesJudiciales'    => $request->input('antecedentesJudiciales'),
            'otroDocIdentidad'          => $otroDocumento,
            'numDocIdentidad'           => $request->input('numDocIdentidad'),
            'idEdocivil'                => $request->input('idEdocivil'),
            'idOcupacion'               => $request->input('idOcupacion'),
            'idEscolaridad'             => $request->input('idEscolaridad'),
            'idDocumentoIdentidad'      => $request->input('idDocumentoIdentidad'),
            'tipoPersona'               => 'DESAPARECIDA',
        ]);        
        
        $cedula = array(
            'entrevistadorNombres' => $carpeta->nombres,
            'entrevistadorPrimerAp' => $carpeta->apellidos,
            'entrevistadorSegundoAp' => '',
            'entrevistadorCargo' => $carpeta->unidad,
            'carpeta' => $carpeta->numCarpeta,
            'idDialecto' => 1,
            'entrevistadorPrimeraVez' => 'SI',
        );
        dd($cedula);*/

        /*$persona = array(
            'nombres' => ,
            'primerAp' => ,
            'segundoAp' => ,
            'fechaNacimiento' => ,
            'rfc' => ,
            'curp' => ,
            'sexo' => ,
            'idEstadoOrigen' => ,
            'idNacionalidad' => ,
            'idMunicipioOrigen'
        );

        $interprete = array(
            'apodo',
            'edadAparente',
            'edadExtravio',
            'embarazo',
            'tipoGestacion',
            'numGestacion',
            'rumoresBebe',
            'pormenores',
            'antecedentesJudiciales',
            'organizacion',
            'tipoPersona',
            'otroDocIdentidad',
            'numDocIdentidad',
            'correoElectronico',
            'telefonos',
            'notificaciones',
            'tieneHijos',
            'notificaciones',
            'informante',
            'idPersona',
            'idEdocivil',
            'idOcupacion',
            'idEscolaridad',
            'idDialecto',
            'idCargo',
            'idParentesco',
            'idDocumentoIdentidad',
        );*/
    }
}
