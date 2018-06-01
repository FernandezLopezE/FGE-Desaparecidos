<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cedula;

class ConexionUipjController extends Controller
{
    public function resolviendo_peticion($idCarpeta = null)
    {
        $existe = \App\Models\Cedula::where('idCarpeta', $idCarpeta)->get();

        if(count($existe)){
            $existe = $existe[0];
            return redirect()->action(
                'CedulaController@show', ['id' => $existe->id]
            );
        }

        \DB::beginTransaction();
        try {
        
            $carpeta = \DB::connection('mysql2')
                                ->select('select c.id, u.nombres, u.apellidos, n.nombre as unidad, c.numCarpeta
                                            from carpeta c
                                            left outer join users u on c.idFiscal = u.id
                                            left outer join unidad n on c.idUnidad = n.id
                                            where c.id ='.$idCarpeta);
            
            
            //dd($carpeta[0]->id);
            $cedula = \App\Models\Cedula::create([
                'entrevistadorNombres' 			=> $carpeta[0]->nombres,
                'entrevistadorPrimerAp' 		=> $carpeta[0]->apellidos,
                'entrevistadorSegundoAp'		=> '.',
                'entrevistadorCargo'			=> $carpeta[0]->unidad,
                'carpeta'                       => $carpeta[0]->numCarpeta,
                'idCarpeta'                     => $carpeta[0]->id,
                'entrevistadorPrimeraVez'		=> 'SI',			
                'idDialecto' 					=> '1'
            ]);       

            $informante = \DB::connection('mysql2')
                        ->select('select s.nombres, s.primerAp, s.segundoAp, s.fechaNacimiento, s.rfc,
                        s.curp, s.idNacionalidad, s.sexo,
                        v.docIdentificacion, v.numDocIdentificacion, v.edad, v.idEstadoCivil,
                        d.calle, d.numExterno, d.numInterno, d.idMunicipio, d.idLocalidad, d.idColonia, d.idColonia as idCp,
                        v.telefono                    
                        from variables_persona v
                        left outer join extra_denunciante x on v.id = x.idVariablesPersona
                        left outer join persona s on v.idPersona = s.id
                        left outer join domicilio d on v.idDomicilio = d.id
                        where v.idCarpeta='.$idCarpeta);
            
            $informante = $informante[0];
            //dd($informante->segundoAp);
            $persona = \App\Models\Persona::create([
                'nombres'           => $informante->nombres,
                'primerAp'          => $informante->primerAp,
                'segundoAp'         => $informante->segundoAp,
                'fechaNacimiento'   => \Carbon\Carbon::parse($informante->fechaNacimiento)->format('d/m/Y'),
                'sexo'              => $informante->sexo,
                'idNacionalidad'    => $informante->idNacionalidad,
                'curp'              => $informante->curp
            ]);

            $idDocumentoIdentidad = \App\Models\CatDocumento::where('nombre',$informante->docIdentificacion)->get();
            $idDocumentoIdentidad = (count($idDocumentoIdentidad)) ? $idDocumentoIdentidad[0]->id : 1 ;       
  
            $telefonos[] = array('tipoTelefono' => 'CELULAR',
                                    'lada' => '(+52)-',
                                    'telefono' => $informante->telefono,
                                    'ext' => null);

            $desaparecido = \App\Models\Desaparecido::create([
                'idPersona'             => $persona->id,
                'idCedula'              => $cedula->id,
                'idParentesco'          => '1',
                'idDocumentoIdentidad'  => $idDocumentoIdentidad, 
                'otroDocIdentidad'      => null,
                'numDocIdentidad'       => $informante->numDocIdentificacion,
                'correoElectronico'     => null,
                'telefonos'          	=> json_encode($telefonos),
                'informante'            => 1,
                'notificaciones'        => 1,
                'tipoPersona'           => 'INFORMANTE',
            ]);
            
            $domicilio = \App\Models\Domicilio::create([
                'idDesaparecido'    => $desaparecido->id,
                'tipoDireccion'     => 'PERSONAL',
                'calle'             => $informante->calle,
                'numExterno'        => $informante->numExterno,
                'numInterno'        => $informante->numInterno,
                'idestado'          => 30,
                'idMunicipio'       => $informante->idMunicipio,
                'idLocalidad'       => $informante->idLocalidad,
                'idColonia'         => $informante->idColonia,
                'idCodigoPostal'    => $informante->idColonia,
            ]);
        
        	\DB::commit();
	        $data['success'] = true;
        } catch (\Exception $e) {
            $data['success'] = false;
            $data['error'] = $e->getMessage();
            \DB::rollback();
            dd($data);
        }
        //dd($data);
        return redirect()->action(
            'CedulaController@show', ['id' => $cedula->id]
        );


    }
}
