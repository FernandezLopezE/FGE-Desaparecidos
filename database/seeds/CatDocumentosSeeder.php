<?php

use Illuminate\Database\Seeder;

class CatDocumentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cat_documentos')->insert([
            [ 'nombre' => 'BOLETINAR PERFIL GENETICO'],
            [ 'nombre' => 'INVESTIGACION DE LUGARES FRECUENTES Y ENTORNO SOCIAL'],
            [ 'nombre' => 'INVESTIGACION DE REDES SOCIALES'],
            [ 'nombre' => 'MEDIDA DE PROTECCION'],
            [ 'nombre' => 'OFICIO A LA COMISION NACIONAL BANCARIA'],
            [ 'nombre' => 'OFICIO AL CENTRO DE INFORMACION'],
            [ 'nombre' => 'OFICIO PARA GEOLOCALIZACION DE VEHICULO'],
            [ 'nombre' => 'OFICIOS PARA BUSQUEDA EN HOSPITALES '],
            [ 'nombre' => 'SOLICITUD DE ALERTA MIGRATORIA'],
            [ 'nombre' => 'SOLICITUD DE ANALISIS DE LLAMADAS'],
            [ 'nombre' => 'SOLICITUD DE ATENCION VICTIMAL'],
            [ 'nombre' => 'SOLICITUD DE BUSQUEDA EN ALBERGUES'],
            [ 'nombre' => 'SOLICITUD DE BUSQUEDA EN CENTROS DE DETENCION'],
            [ 'nombre' => 'SOLICITUD DE BUSQUEDA EN CORRALONES'],
            [ 'nombre' => 'SOLICITUD DE BUSQUEDA EN ESTACIONES MIGRATORIAS'],
            [ 'nombre' => 'SOLICITUD DE BUSQUEDA EN SEMEFOSX'],
            [ 'nombre' => 'SOLICITUD DE CONFRONTA AFIS'],
            [ 'nombre' => 'SOLICITUD DE CONSULTA EN PLATAFORMA MEXICO'],
            [ 'nombre' => 'SOLICITUD DE ELABORACION DE RETRATO HABLADO'],
            [ 'nombre' => 'SOLICITUD DE ENTRADAS Y SALIDAS DE VEHICULO'],
            [ 'nombre' => 'SOLICITUD DE ENTREVISTA AM'],
            [ 'nombre' => 'SOLICITUD DE EXPEDIENTE LABORAL'],
            [ 'nombre' => 'SOLICITUD DE GEOLOCALIZACION DE EQUIPO TELEFONICO '],
            [ 'nombre' => 'SOLICITUD DE HISTORIAL DE LLAMADAS'],
            [ 'nombre' => 'SOLICITUD DE IMEI'],
            [ 'nombre' => 'SOLICITUD DE INFORMACION MEDICA'],
            [ 'nombre' => 'SOLICITUD DE INFORMACION A SSP, CUANDO SEAN SENALADOS COMO PARTICIPANTES'],
            [ 'nombre' => 'SOLICITUD DE INFORME DE INICIOS'],
            [ 'nombre' => 'SOLICITUD DE INFORME DE MOVIMIENTOS'],
            [ 'nombre' => 'SOLICITUD DE INFORME SOBRE PLACAS VEHICULARES'],
            [ 'nombre' => 'SOLICITUD DE INSPECCION DEL ULTIMO LUGAR DE AVISTAMIENTO'],
            [ 'nombre' => 'SOLICITUD DE INV DE OTRAS DESAPARICIONES'],
            [ 'nombre' => 'SOLICITUD DE MAPEO GEO DE VEHICULOS'],
            [ 'nombre' => 'SOLICITUD DE PERFIL GENETICO'],
            [ 'nombre' => 'SOLICITUD DE PERICIAL DE EQUIPOS TELEFONICOS'],
            [ 'nombre' => 'SOLICITUD DE PRESENTACION DE UNIDADES Y UNIFORMES'],
            [ 'nombre' => 'SOLICITUD DE ULTIMA UBICACION DE VEHICULO'],
            [ 'nombre' => 'SOLICITUD DE VIDEOS C4'],
            [ 'nombre' => 'SOLICITUD DE VIDEOS DE CASETAS'],
            [ 'nombre' => 'SOLICITUD DE VISTA DE EQUIPOS DE COMUNICACION'],
            [ 'nombre' => 'SOLICITUD SOBRE PUNTOS DE REVISION'],
            [ 'nombre' => 'TRANSITO Y SECRETARIA DE COMUNICACIONES Y TRANSPORTE'],
            [ 'nombre' => 'TRANSITO Y SECRETARIA DE COMUNICACIONES Y TRANSPORTE-DIRECCION GENERAL DE TRANSITO DEL ESTADO'],

        ]);
    }
}
