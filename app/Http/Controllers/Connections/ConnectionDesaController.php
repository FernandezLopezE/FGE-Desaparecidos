<?php

namespace App\Http\Controllers\Connections;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ExtraDenunciante;
use App\Models\VariablesPersona;

class ConnectionDesaController extends Controller
{
    
    public function getOfendidos($numCarpeta = null)
    {
		// Consultando los datos del denunciante o persona informante.       

        $ofendidos = \DB::table('extra_denunciante')
            ->leftJoin('variables_persona', 'extra_denunciante.idVariablesPersona', '=', 'variables_persona.id')
            ->leftJoin('carpeta', 'variables_persona.idCarpeta', '=', 'carpeta.id')
            ->leftJoin('persona', 'variables_persona.idPersona', '=', 'persona.id')
            ->leftJoin('cat_nacionalidad', 'persona.idNacionalidad', '=', 'cat_nacionalidad.id')
            ->leftJoin('cat_etnia', 'persona.idEtnia', '=', 'cat_etnia.id')
            ->leftJoin('cat_lengua', 'persona.idLengua', '=', 'cat_lengua.id')
            ->leftJoin('cat_municipio as cat_municipio_origen', 'persona.idMunicipioOrigen', '=', 'cat_municipio_origen.id')
            ->leftJoin('cat_estado as cat_estado_origen', 'cat_municipio_origen.idEstado', '=', 'cat_estado_origen.id')
            ->leftJoin('cat_ocupacion', 'variables_persona.idOcupacion', '=', 'cat_ocupacion.id')
            ->leftJoin('cat_estado_civil', 'variables_persona.idEstadoCivil', '=', 'cat_estado_civil.id')
            ->leftJoin('cat_escolaridad', 'variables_persona.idEscolaridad', '=', 'cat_escolaridad.id')
            ->leftJoin('cat_religion', 'variables_persona.idReligion', '=', 'cat_religion.id')
            ->leftJoin('domicilio', 'variables_persona.idDomicilio', '=', 'domicilio.id')
            ->leftJoin('cat_municipio as cat_municipio_personal', 'domicilio.idMunicipio', '=', 'cat_municipio_personal.id')
            ->leftJoin('cat_estado as cat_estado_personal', 'cat_municipio_personal.idEstado', '=', 'cat_estado_personal.id')
            ->leftJoin('cat_localidad as cat_localidad_personal', 'domicilio.idLocalidad', '=', 'cat_localidad_personal.id')
            ->leftJoin('cat_colonia as cat_colonia_personal', 'domicilio.idColonia', '=', 'cat_colonia_personal.id')
            ->leftJoin('interprete', 'variables_persona.idInterprete', '=', 'interprete.id')
            ->leftJoin('cat_lengua as cat_lengua_interprete', 'interprete.idLengua', '=', 'cat_lengua_interprete.id')
            ->leftJoin('domicilio as domicilio_trabajo', 'variables_persona.idDomicilioTrabajo', '=', 'domicilio_trabajo.id')
            ->leftJoin('cat_municipio as cat_municipio_trabajo', 'domicilio_trabajo.idMunicipio', '=', 'cat_municipio_trabajo.id')
            ->leftJoin('cat_estado as cat_estado_trabajo', 'cat_municipio_trabajo.idEstado', '=', 'cat_estado_trabajo.id')
            ->leftJoin('cat_localidad as cat_localidad_trabajo', 'domicilio_trabajo.idLocalidad', '=', 'cat_localidad_trabajo.id')
            ->leftJoin('cat_colonia as cat_colonia_trabajo', 'domicilio_trabajo.idColonia', '=', 'cat_colonia_trabajo.id')
            ->leftJoin('notificacion', 'extra_denunciante.idNotificacion', '=', 'notificacion.id')
            ->leftJoin('domicilio as domicilio_notificacion', 'notificacion.idDomicilio', '=', 'domicilio_notificacion.id')
            ->leftJoin('cat_municipio as cat_municipio_notificacion', 'domicilio_notificacion.idMunicipio', '=', 'cat_municipio_notificacion.id')
            ->leftJoin('cat_estado as cat_estado_notificacion', 'cat_municipio_notificacion.idEstado', '=', 'cat_estado_notificacion.id')
            ->leftJoin('cat_localidad as cat_localidad_notificacion', 'domicilio_notificacion.idLocalidad', '=', 'cat_localidad_notificacion.id')
            ->leftJoin('cat_colonia as cat_colonia_notificacion', 'domicilio_notificacion.idColonia', '=', 'cat_colonia_notificacion.id')
            ->select('persona.nombres', 'persona.primerAp', 'persona.segundoAp', 'persona.fechaNacimiento', 'persona.sexo')
            ->addSelect('persona.curp', 'persona.rfc', 'cat_etnia.nombre as etnia', 'cat_lengua.nombre as lengua')
            ->addSelect('variables_persona.edad', 'cat_nacionalidad.nombre as nacionalidad', 'cat_estado_origen.nombre as estado_origen')
            ->addSelect('cat_municipio_origen.nombre as municipio_origen', 'variables_persona.telefono', 'variables_persona.motivoEstancia')
            ->addSelect('interprete.nombre as interpreteNombre', 'interprete.organizacion as interpreteOrganizacion')
            ->addSelect('cat_ocupacion.nombre as ocupacion', 'cat_estado_civil.nombre as estado_civil', 'cat_religion.nombre as religion')
            ->addSelect('cat_escolaridad.nombre as escolaridad', 'variables_persona.docIdentificacion', 'variables_persona.numDocIdentificacion')
            ->addSelect('extra_denunciante.conoceAlDenunciado')
            ->addSelect('cat_estado_personal.nombre as domicilio_personal_estado', 'cat_municipio_personal.nombre as domicilio_personal_municipio')
            ->addSelect('cat_localidad_personal.nombre as domicilio_personal_localidad', 'cat_colonia_personal.nombre as domicilio_personal_colonia')
            ->addSelect('cat_colonia_personal.codigoPostal as domicilio_personal_cp', 'domicilio.calle as domicilio_personal_calle')
            ->addSelect('domicilio.numExterno as domicilio_personal_numExterno', 'domicilio.numExterno as domicilio_personal_numInterno')
            ->addSelect('variables_persona.lugarTrabajo as domicilio_trabajo_lugar', 'variables_persona.telefonoTrabajo as domicilio_trabajo_telefono')
            ->addSelect('cat_estado_trabajo.nombre as domicilio_trabajo_estado', 'cat_municipio_trabajo.nombre as domicilio_trabajo_municipio')
            ->addSelect('cat_localidad_trabajo.nombre as domicilio_trabajo_localidad', 'cat_colonia_trabajo.nombre as domicilio_trabajo_colonia')
            ->addSelect('cat_colonia_trabajo.codigoPostal as domicilio_trabajo_cp', 'domicilio.calle as domicilio_trabajo_calle')
            ->addSelect('domicilio.numExterno as domicilio_trabajo_numExterno', 'domicilio.numExterno as domicilio_trabajo_numInterno')
            ->addSelect('cat_estado_notificacion.nombre as domicilio_notificacion_estado', 'cat_municipio_notificacion.nombre as domicilio_notificacion_municipio')
            ->addSelect('cat_localidad_notificacion.nombre as domicilio_notificacion_localidad', 'cat_colonia_notificacion.nombre as domicilio_notificacion_colonia')
            ->addSelect('cat_colonia_notificacion.codigoPostal as domicilio_notificacion_cp', 'domicilio.calle as domicilio_notificacion_calle')
            ->addSelect('notificacion.correo as domicilio_notificacion_correo', 'notificacion.telefono as domicilio_notificacion_telefono')
            ->addSelect('notificacion.fax as domicilio_notificacion_fax')
            //->where('carpeta.numCarpeta', $numCarpeta)
            ->get();

        return response()->json($ofendidos);
    }

    public function getDelitos(){
        $delitos = \DB::table('tipif_delito')
            ->leftJoin('cat_delito', 'tipif_delito.idDelito', '=', 'cat_delito.id')
            ->leftJoin('cat_agrupacion1', 'tipif_delito.idAgrupacion1', '=', 'cat_agrupacion1.id')
            ->leftJoin('cat_agrupacion2', 'tipif_delito.idAgrupacion2', '=', 'cat_agrupacion2.id')
            ->leftJoin('cat_tipo_arma', 'tipif_delito.idArma', '=', 'cat_tipo_arma.id')
            ->leftJoin('cat_posible_causa', 'tipif_delito.idPosibleCausa', '=', 'cat_posible_causa.id')
            ->leftJoin('cat_modalidad', 'tipif_delito.idModalidad', '=', 'cat_modalidad.id')
            ->leftJoin('cat_zona', 'tipif_delito.idZona', '=', 'cat_zona.id')
            ->leftJoin('cat_lugar', 'tipif_delito.idLugar', '=', 'cat_lugar.id')
            ->leftJoin('domicilio', 'tipif_delito.idDomicilio', '=', 'domicilio.id')
            ->leftJoin('cat_municipio', 'domicilio.idMunicipio', '=', 'cat_municipio.id')
            ->leftJoin('cat_estado', 'cat_municipio.idEstado', '=', 'cat_estado.id')
            ->leftJoin('cat_localidad', 'domicilio.idLocalidad', '=', 'cat_localidad.id')
            ->leftJoin('cat_colonia', 'domicilio.idColonia', '=', 'cat_colonia.id')
            ->select('cat_delito.nombre as delito', 'cat_agrupacion1.nombre as primera_desagregacion')
            ->addSelect('cat_agrupacion2.nombre as segunda_desagregacion', 'tipif_delito.fecha', 'tipif_delito.hora')
            ->addSelect('tipif_delito.conViolencia', 'cat_modalidad.nombre as modalidad')
            ->addSelect('tipif_delito.formaComision', 'tipif_delito.consumacion')
            ->addSelect('cat_zona.nombre as zona_ubocacion', 'cat_lugar.nombre as lugar')
            ->addSelect('cat_estado.nombre as estado', 'cat_municipio.nombre as municipio', 'cat_localidad.nombre as localidad')
            ->addSelect('cat_colonia.nombre as colonia', 'domicilio.calle', 'domicilio.numExterno', 'domicilio.numInterno')
            ->addSelect('tipif_delito.entreCalle', 'tipif_delito.yCalle', 'tipif_delito.calleTrasera', 'tipif_delito.puntoReferencia')
            ->get();

            return response()->json($delitos);
    }

    public function getVehiculos()
    {
        $vehiculos = \DB::table('vehiculo')
            ->leftJoin('cat_estado', 'vehiculo.idEstado', '=', 'cat_estado.id')
            ->leftJoin('cat_submarca', 'vehiculo.idSubmarca', '=', 'cat_submarca.id')
            ->leftJoin('cat_marca', 'cat_submarca.idMarca', '=', 'cat_marca.id')
            ->leftJoin('cat_color', 'vehiculo.idColor', '=', 'cat_color.id')
            ->leftJoin('cat_tipo_vehiculo', 'vehiculo.idTipoVehiculo', '=', 'cat_tipo_vehiculo.id')
            ->leftJoin('cat_tipo_uso', 'vehiculo.idTipoUso', '=', 'cat_tipo_uso.id')
            ->leftJoin('cat_procedencia', 'vehiculo.idProcedencia', '=', 'cat_procedencia.id')
            ->leftJoin('cat_aseguradora', 'vehiculo.idAseguradora', '=', 'cat_aseguradora.id')
            ->select('vehiculo.placas', 'cat_estado.nombre as estado', 'cat_marca.nombre as marca', 'cat_submarca.nombre as submarca')
            ->addSelect('vehiculo.modelo', 'vehiculo.nrpv', 'cat_color.nombre as color', 'vehiculo.permiso')
            ->addSelect('vehiculo.numSerie', 'vehiculo.numMotor', 'cat_tipo_vehiculo.nombre as tipo_vehiculo')
            ->addSelect('cat_tipo_uso.nombre as tipo_uso', 'vehiculo.senasPartic', 'cat_procedencia.nombre as procedencia')
            ->addSelect('cat_aseguradora.nombre as aseguradora')
            ->get();

            return response()->json($vehiculos);
    }
    
}
