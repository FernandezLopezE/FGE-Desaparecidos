  <?php

use Illuminate\Database\Seeder;

class CatDependenciasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_dependencias')->insert([
            // FORMATOS DE - 24 HRS
            [ 'nombre' => 'TRÁNSITO DEL ESTADO Y SCT (TRÁNSITO Y COMUNICACIONES)',      'correo' => 'zrv101893@gmail.com',    'documento' => '1'],
            [ 'nombre' => 'APODERADO LEGAL (INFORME MOVIMIENTOS)',                      'correo' => 'zrv101893@gmail.com',    'documento' => '2'],
            [ 'nombre' => 'FISCALÍA GENERAL (ALERTA MIGRATORIA)',                       'correo' => 'zrv101893@gmail.com',     'documento' => '3'],
            [ 'nombre' => 'DIF MUNICIPAL (ALBERGUES)',                                  'correo' => 'zrv101893@gmail.com',     'documento' => '4'],
            [ 'nombre' => 'PREVENCIÓN Y REINSERCIÓN SOCIAL (CENTROS DETENCIÓN)',     'correo' => 'zrv101893@gmail.com',        'documento' => '5'],

            [ 'nombre' => 'INSTITUTO NACIONAL DE MIGRACIÓN (ESTACIONES MIGRATORIAS)', 'correo' => 'zrv101893@gmail.com',    'documento' => '6'],
            [ 'nombre' => 'POLICIA MINISTERIAL, SEGURO SOCIAL (HOSPITALES)',          'correo' => 'zrv101893@gmail.com',    'documento' => '7'],
            [ 'nombre' => 'SERVICIOS PERICIALES (SEMEFOS)',                        'correo' => 'zrv101893@gmail.com',     'documento' => '8'],
            [ 'nombre' => 'UNIDAD DE ANÁLISIS DE INFORMACIÓN FG (PLATAFORMA MÉXICO)',  'correo' => 'zrv101893@gmail.com',     'documento' => '9'],
            [ 'nombre' => 'CENTRO DE INFORMACIÓN FG (OFICIO)',         'correo' => 'zrv101893@gmail.com',        'documento' => '10'],

            [ 'nombre' => 'SEGURIDAD PÚBLICA, POLICIA MINISTERIAL, POLICIA FEDERAL (EQUIPOS DE COMUNICACIÓN)', 'correo' => 'zrv101893@gmail.com',    'documento' => '11'],
            [ 'nombre' => 'EMPRESA TELEFÓNICA (EQUIPO TELEFÓNICO)',             'correo' => 'zrv101893@gmail.com',    'documento' => '12'],
            [ 'nombre' => 'COMPAÑIA AUTOMOTRIZ (GEOLOCALIZACIÓN)',                        'correo' => 'zrv101893@gmail.com',     'documento' => '13'],
            [ 'nombre' => 'SEGURIDAD PÚBLICA, POLICIA MINISTERIAL, POLICIA FEDERAL (MEDIDAS DE PROTECCIÓN)',          'correo' => 'zrv101893@gmail.com',     'documento' => '14'],
            [ 'nombre' => 'SECRETARÍA DE FINANZAS Y PLANEACIÓN (PLACAS VEHICULARES)',         'correo' => 'zrv101893@gmail.com',        'documento' => '15'],

            [ 'nombre' => 'SEGURIDAD PÚBLICA, POLICIA MINISTERIAL, POLICIA FEDERAL (UNIDADES Y UNIFORMES)',         'correo' => 'bnicecd@gmail.com',      'documento' => '16'],
            [ 'nombre' => 'SEGURIDAD PÚBLICA, POLICIA MINISTERIAL, POLICIA FEDERAL (E/S VEHICULO)',         'correo' => 'bnicecd@gmail.com',      'documento' => '17'],
            [ 'nombre' => 'SEGURIDAD PÚBLICA, POLICIA MINISTERIAL, POLICIA FEDERAL (PUNTOS REVISIÓN)',         'correo' => 'bnicecd@gmail.com',      'documento' => '18'],
            [ 'nombre' => 'SCT (VIDEOS CASETAS)',         'correo' => 'bnicecd@gmail.com',      'documento' => '19'],
            [ 'nombre' => 'SEGURIDAD PÚBLICA, POLICIA MINISTERIAL, POLICIA FEDERAL (EXPEDIENTE LABORAL)',         'correo' => 'bnicecd@gmail.com',      'documento' => '20'],
            [ 'nombre' => 'SEGURIDAD PÚBLICA, POLICIA MINISTERIAL, POLICIA FEDERAL (INFORMACIÓN SSP)',         'correo' => 'bnicecd@gmail.com',      'documento' => '21'],
            [ 'nombre' => 'C4 (VIDEOS C4)',         'correo' => 'bnicecd@gmail.com',      'documento' => '22'],

            // FORMATOS DE 24 A 72 HRS
            [ 'nombre' => 'CENTRO ESTATAL DE FG (ATENCIÓN VICTIMAL)', 			 'correo' => 'xbox.07@hotmail.com',                       'documento' => '23'],
            [ 'nombre' => 'POLICIA MINISTERIAL (BUSQUEDA CORRALONES)', 		     'correo' => 'cavila@fiscaliaveracruz.gob.mx',            'documento' => '24'],
            [ 'nombre' => 'SERVICIOS PERICIALES (ENTREVISTA AM)',                 'correo' => 'esjimenez@fiscaliaveracruz.gob.mx',         'documento' => '25'],
            [ 'nombre' => 'IMMS,ISSSTE,ISSFAM o SEGURO POPULAR (INFORMACIÓN MEDICA)', 'correo' => 'dlanda@fiscaliaveracruz.gob.mx',         'documento' => '26'],
            [ 'nombre' => 'SERVICIOS PERICIALES Y POLICIA MINISTERIAL (LUGAR AVISTAMIENTO)', 'correo' => 'ochoa.rrub@gmail.com',            'documento' => '27'],
            [ 'nombre' => 'UNIDAD DE ANÁLISIS DE INFORMACIÓN FG (REDES SOCIALES)',  'correo' => 'alejandro.f.toledo@gmail.com',             'documento' => '28'],
            [ 'nombre' => 'SERVICIOS PERICIALES (EQUIPOS TELEFONICOS)',                    'correo' => 'bnice@gmail.com',                          'documento' => '29'],
            [ 'nombre' => 'SERVICIOS PERICIALES(RETRATO HABLADO)',                           'correo' => 'zrv101893@gmail.com',                        'documento' => '30'],
            [ 'nombre' => 'SERVICIOS PERICIALES (CONFRONTA AFIS)',                         'correo' => 'zrv101893@gmail.com',                        'documento' => '31'],
            [ 'nombre' => 'COMISIÓN NACIONAL BANCARIA Y DE VALORES (NACIONAL BANCARIA)',      'correo' => 'zrv101893@gmail.com',                        'documento' => '32'],
            [ 'nombre' => 'APODERADO LEGAL (UBICACION VEHÍCULO)',                                                   'correo' => 'zrv101893@gmail.com',                        'documento' => '33'],
            [ 'nombre' => 'POLICIA MINISTERIAL (LUGARES FRECUENTES)',                                  'correo' => 'zrv101893@gmail.com',                        'documento' => '34'],
            [ 'nombre' => 'FISCALÍA GENERAL (HISTORIAL DE LLAMADAS)',          'correo' => 'zrv101893@gmail.com',                        'documento' => '35'],

            //FORMATOS DE + 72 HRS
            [ 'nombre' => 'UNIDAD DE ANÁLISIS DE INFORMACIÓN FG (GEOVEHICULOS)',         'correo' => 'zrv101893@gmail.com',      'documento' => '36'],
            [ 'nombre' => 'UNIDAD DE ANÁLISIS DE INFORMACIÓN FG (LLAMADAS)',         'correo' => 'zrv101893@gmail.com',      'documento' => '37'],
            [ 'nombre' => 'FISCALÍA GENERAL (BOLETÍN GENÉTICO)',         'correo' => 'zrv101893@gmail.com',      'documento' => '38'],
            [ 'nombre' => 'FISCALÍA DE INVESTIGACIONES MINISTERIALES (IMEI)',         'correo' => 'zrv101893@gmail.com',      'documento' => '39'],
            [ 'nombre' => 'POLICIA MINISTERIAL (OTRAS DESAPARICIONES)',         'correo' => 'zrv101893@gmail.com',      'documento' => '40'],
            [ 'nombre' => 'SERVICIOS PERICIALES (PERFIL GENETICO)',         'correo' => 'zrv101893@gmail.com',      'documento' => '41'],
           // [ 'nombre' => '',         'correo' => 'zrv101893@gmail.com',      'documento' => '42'],

        ]);
    }
}
