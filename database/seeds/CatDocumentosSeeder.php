
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
            // FORMATOS DE MENOS DE 24 HRS
            [ 'id' => 1, 'nombre' => 'SOLICITUD SOBRE PUNTOS DE REVISIÓN'],
            [ 'id' => 2, 'nombre' => 'SOLICITUD DE INFORME SOBRE PLACAS VEHICULARES'],
            [ 'id' => 3, 'nombre' => 'SOLICITUD DE VIDEOS DE CASETAS'],
            [ 'id' => 4, 'nombre' => 'SOLICITUD DE VIDEOS C4'],
            [ 'id' => 5, 'nombre' => 'TRÁNSITO'],
            [ 'id' => 6, 'nombre' => 'SOLICITUD DE INFORME DE MOVIMIENTOS'],
            [ 'id' => 7, 'nombre' => 'SOLICITUD DE ALERTA MIGRATORIA'],
            [ 'id' => 8, 'nombre' => 'SOLICITUD DE BÚSQUEDA EN ALBERGUES'],
            [ 'id' => 9, 'nombre' => 'SOLICITUD DE ENTRADAS Y SALIDAS DE VEHÍCULOS'],
            [ 'id' => 10, 'nombre' => 'SOLICITUD DE PRESENTACION DE UNIDADES Y UNIFORMES'],
            [ 'id' => 11, 'nombre' => 'SOLICITUD DE INFORMACION A SSP, CUANDO SEAN SENALADOS COMO PARTICIPANTES'],
            [ 'id' => 12, 'nombre' => 'SOLICITUD DE EXPEDIENTE LABORAL'],
            [ 'id' => 13, 'nombre' => 'SOLICITUD DE BÚSQUEDA EN CENTROS DE DETENCIÓN'],
            [ 'id' => 14, 'nombre' => 'SOLICITUD DE BÚSQUEDA EN ESTACIONES MIGRATORIAS'],
            [ 'id' => 15, 'nombre' => 'OFICIOS PARA BÚSQUEDA EN HOSPITALES '],
            [ 'id' => 16, 'nombre' => 'SOLICITUD DE BÚSQUEDA EN SEMEFOS'],
            [ 'id' => 17, 'nombre' => 'SOLICITUD DE CONSULTA EN PLATAFORMA MÉXICO'],
            [ 'id' => 18, 'nombre' => 'OFICIO AL CENTRO DE INFORMACIÓN'],
            [ 'id' => 19, 'nombre' => 'SOLICITUD DE VISTA DE EQUIPOS DE COMUNICACION'],
            [ 'id' => 20, 'nombre' => 'SOLICITUD DE GEOLOCALIZACIÓN DE EQUIPO TELEFONICO '],
            [ 'id' => 21, 'nombre' => 'OFICIO PARA GEOLOCALIZACIÓN DE VEHÍCULO'],
            [ 'id' => 22, 'nombre' => 'MEDIDAS DE PROTECCIÓN'],

                        
            /*// FORMATOS DE 24 A 72 HRS
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
           // [ 'nombre' => 'SOLICITUD DE INFORME DE INICIOS'],*/
      
        ]);
    }
}
