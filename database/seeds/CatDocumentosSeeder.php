
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
            [ 'nombre' => 'TRÁNSITO Y SECRETARIA DE COMUNICACIONES Y TRANSPORTE'],  
            [ 'nombre' => 'SOLICITUD DE INFORME DE MOVIMIENTOS'], 
            [ 'nombre' => 'SOLICITUD DE ALERTA MIGRATORIA'],
            [ 'nombre' => 'SOLICITUD DE BÚSQUEDA EN ALBERGUES'],
            [ 'nombre' => 'SOLICITUD DE BÚSQUEDA EN CENTROS DE DETENCIÓN'],
            [ 'nombre' => 'SOLICITUD DE BÚSQUEDA EN ESTACIONES MIGRATORIAS'],
            [ 'nombre' => 'OFICIOS PARA BÚSQUEDA EN HOSPITALES '],
            [ 'nombre' => 'SOLICITUD DE BÚSQUEDA EN SEMEFOS'],
            [ 'nombre' => 'SOLICITUD DE CONSULTA EN PLATAFORMA MÉXICO'],
            [ 'nombre' => 'OFICIO AL CENTRO DE INFORMACIÓN'],
            [ 'nombre' => 'SOLICITUD DE VISTA DE EQUIPOS DE COMUNICACION'],
            [ 'nombre' => 'SOLICITUD DE GEOLOCALIZACIÓN DE EQUIPO TELEFONICO '],
            [ 'nombre' => 'OFICIO PARA GEOLOCALIZACIÓN DE VEHÍCULO'],
            [ 'nombre' => 'MEDIDAS DE PROTECCIÓN'],          
            [ 'nombre' => 'SOLICITUD DE INFORME SOBRE PLACAS VEHICULARES'],
            [ 'nombre' => 'SOLICITUD DE PRESENTACION DE UNIDADES Y UNIFORMES'],
            [ 'nombre' => 'SOLICITUD DE ENTRADAS Y SALIDAS DE VEHÍCULOS'],
            [ 'nombre' => 'SOLICITUD SOBRE PUNTOS DE REVISIÓN'],
            [ 'nombre' => 'SOLICITUD DE VIDEOS DE CASETAS'],
            [ 'nombre' => 'SOLICITUD DE EXPEDIENTE LABORAL'],
            [ 'nombre' => 'SOLICITUD DE INFORMACION A SSP, CUANDO SEAN SENALADOS COMO PARTICIPANTES'],
            [ 'nombre' => 'SOLICITUD DE VIDEOS C4'],
            // FORMATOS DE 24 A 72 HRS
            [ 'nombre' => 'SOLICITUD DE ATENCION VICTIMAL'],
            [ 'nombre' => 'SOLICITUD DE BUSQUEDA EN CORRALONES'],
            [ 'nombre' => 'SOLICITUD DE ENTREVISTA AM'],
            [ 'nombre' => 'SOLICITUD DE INFORMACION MEDICA'],          
            [ 'nombre' => 'SOLICITUD DE INSPECCION DEL ULTIMO LUGAR DE AVISTAMIENTO'],
            [ 'nombre' => 'INVESTIGACION DE REDES SOCIALES'],
            [ 'nombre' => 'SOLICITUD DE PERICIAL DE EQUIPOS TELEFONICOS'],
            [ 'nombre' => 'SOLICITUD DE ELABORACION DE RETRATO HABLADO'],
            [ 'nombre' => 'SOLICITUD DE CONFRONTA AFIS'],
            [ 'nombre' => 'OFICIO A LA COMISION NACIONAL BANCARIA'],
            [ 'nombre' => 'SOLICITUD DE ULTIMA UBICACION DE VEHICULO'],
            [ 'nombre' => 'INVESTIGACION DE LUGARES FRECUENTES Y ENTORNO SOCIAL'],
            [ 'nombre' => 'SOLICITUD DE HISTORIAL DE LLAMADAS'],
            // FORMATOS DE + 72 HRS
            [ 'nombre' => 'SOLICITUD DE MAPEO GEO DE VEHICULOS'],                                      
            [ 'nombre' => 'SOLICITUD DE ANALISIS DE LLAMADAS'],
            [ 'nombre' => 'BOLETINAR PERFIL GENETICO'],  
            [ 'nombre' => 'SOLICITUD DE IMEI'],
            [ 'nombre' => 'SOLICITUD DE INV DE OTRAS DESAPARICIONES'],
            [ 'nombre' => 'SOLICITUD DE PERFIL GENETICO'],      
           // [ 'nombre' => 'SOLICITUD DE INFORME DE INICIOS'],
      
        ]);
    }
}
