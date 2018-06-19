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
            ['id' => 1, 'nombre' => 'SEGURIDAD PÚBLICA',                                                          'correo' => '', 'oficios' => '[1,9,10,11,12,19,22]', 'idEncargado' => '1'],
            ['id' => 2, 'nombre' => 'SECRETARÍA DE FINANZAS Y PLANEACIÓN',                                        'correo' => '', 'oficios' => '[2]', 'idEncargado' => '2'],
            ['id' => 3, 'nombre' => 'POLICÍA MINISTERIAL',                                                        'correo' => '', 'oficios' => '[1,9,10,11,12,13,19,22]', 'idEncargado' => '3'],
            ['id' => 4, 'nombre' => 'POLICÍA FEDERAL REGIÓN XXXL XALAPA, VERACRUZ',                               'correo' => '', 'oficios' => '[1,9,10,11,12,13,19,22]', 'idEncargado' => '4'],
            ['id' => 5, 'nombre' => '26/a ZONA MILITAR',                                                          'correo' => '', 'oficios' => '[1,9,10,11,12,13,19,22]', 'idEncargado' => '5'],
            ['id' => 6, 'nombre' => 'SECRETARIA DE COMUNICACIONES Y TRANSPORTE',                                        'correo' => '', 'oficios' => '[3,23]', 'idEncargado' => '6'],
            ['id' => 7, 'nombre' => 'CENTRO ESTATAL DE CONTROL, COMANDO, COMUNICACIONES Y TRANSPORTE',                  'correo' => '', 'oficios' => '[4]', 'idEncargado' => '7'],
            ['id' => 8, 'nombre' => 'DIRECCIÓN GENERAL DE TRÁNSITO DEL ESTADO',                                         'correo' => '', 'oficios' => '[5]', 'idEncargado' => '8'],
            ['id' => 9, 'nombre' => 'GERENTE Y/O APODERADO LEGAL DE',                                                   'correo' => '', 'oficios' => '[6]', 'idEncargado' => '9'],
            ['id' => 10, 'nombre' => 'FISCALÍA GENERAL DEL ESTADO',                                                     'correo' => '', 'oficios' => '[7]', 'idEncargado' => '10'],
            ['id' => 11, 'nombre' => 'DIF MUNICIPAL',                                                                   'correo' => '', 'oficios' => '[8]', 'idEncargado' => '11'],
            ['id' => 12, 'nombre' => 'DIRECCIÓN GENERAL DE PREVENCIÓN Y REINSERCIÓN SOCIAL',                            'correo' => '', 'oficios' => '[13]', 'idEncargado' => '12'],
            ['id' => 13, 'nombre' => 'PROCURADURÍA GENERAL DE LA REPUBLICA EN EL ESTADO DE VERACRUZ',                   'correo' => '', 'oficios' => '[13]', 'idEncargado' => '14'],
            ['id' => 14, 'nombre' => 'INSTITUTO NACIONAL DE MIGRACIÓN EN EL ESTADO DE VERACRUZ',                        'correo' => '', 'oficios' => '[14]', 'idEncargado' => '15'],
            ['id' => 15, 'nombre' => 'DIRECCIÓN GENERAL DE LA POLICÍA MINISTERIAL',                                     'correo' => '', 'oficios' => '[15]', 'idEncargado' => '16'],
            ['id' => 16, 'nombre' => 'SERVICIOS DE SALUD DE VERACRUZ',                                                  'correo' => '', 'oficios' => '[15]', 'idEncargado' => '17'],
            ['id' => 17, 'nombre' => 'INSTITUTO MEXICANO DEL SEGURO SOCIAL',                                            'correo' => '', 'oficios' => '[15]', 'idEncargado' => '18'],
            ['id' => 18, 'nombre' => 'SERVICIOS PERICIALES DEL ESTADO DE VERACRUZ',                                     'correo' => '', 'oficios' => '[16]', 'idEncargado' => '19'],
            ['id' => 19, 'nombre' => 'ÚNIDAD DE ANÁLISIS DE INFORMACIÓN EN LA FISCALÍA GENERAL DEL ESTADO DE VERACRUZ', 'correo' => '', 'oficios' => '[17]', 'idEncargado' => '20'],
            ['id' => 20, 'nombre' => 'CENTRO DE INFORMACIÓN E INFRAESTRUCTURA TECNOLÓGICA',                             'correo' => '', 'oficios' => '[18]', 'idEncargado' => '21'],
            ['id' => 21, 'nombre' => 'C. APODERADO LEGAL DE LA EMPRESA DE TELEFONÍA DENOMINADA',                        'correo' => '', 'oficios' => '[20]', 'idEncargado' => '22'],
            ['id' => 22, 'nombre' => 'APODERADO LEGAL DE LA PERSONA MORAL DENOMINADA (COMPAÑÍA AUTOMOTRIZ Y/O DE SEGUROS QUE PRESTE EL SERVICIO DE GPS)', 'correo' => '', 'oficios' => '[21]', 'idEncargado' => '23'],
            ['id' => 23, 'nombre' => 'POLICÍA FEDERAL DEL ESTADO DE VERACRUZ', 'correo' => '', 'oficios' => '[9]', 'idEncargado' => '13'],

            // FORMATOS DE 24 A 72 HRS
            /*[ 'nombre' => 'CENTRO ESTATAL DE FG (ATENCIÓN VICTIMAL)', 			 'correo' => 'xbox.07@hotmail.com',                       'documento' => '23'],
            [ 'nombre' => 'POLICIA MINISTERIAL (BUSQUEDA CORRALONES)', 		     'correo' => 'cavila@fiscaliaveracruz.gob.mx',            'documento' => '24'],
            [ 'nombre' => 'SERVICIOS PERICIALES (ENTREVISTA AM)',                 'correo' => 'esjimenez@fiscaliaveracruz.gob.mx',         'documento' => '25'],
            [ 'nombre' => 'IMMS,ISSSTE,ISSFAM o SEGURO POPULAR (INFORMACIÓN MEDICA)', 'correo' => 'dlanda@fiscaliaveracruz.gob.mx',         'documento' => '26'],
            [ 'nombre' => 'SERVICIOS PERICIALES Y POLICIA MINISTERIAL (LUGAR AVISTAMIENTO)', 'correo' => 'ochoa.rrub@gmail.com',            'documento' => '27'],
            [ 'nombre' => 'UNIDAD DE ANÁLISIS DE INFORMACIÓN FG (REDES SOCIALES)',  'correo' => 'alejandro.f.toledo@gmail.com',             'documento' => '28'],
            [ 'nombre' => 'SERVICIOS PERICIALES (EQUIPOS TELEFONICOS)',                    'correo' => 'bnice@gmail.com',                          'documento' => '29'],
            [ 'nombre' => 'SERVICIOS PERICIALES(RETRATO HABLADO)',                           'correo' => 'ochoa.rrub@gmail.com',                        'documento' => '30'],
            [ 'nombre' => 'SERVICIOS PERICIALES (CONFRONTA AFIS)',                         'correo' => 'ochoa.rrub@gmail.com',                        'documento' => '31'],
            [ 'nombre' => 'COMISIÓN NACIONAL BANCARIA Y DE VALORES (NACIONAL BANCARIA)',      'correo' => 'ochoa.rrub@gmail.com',                        'documento' => '32'],
            [ 'nombre' => 'APODERADO LEGAL (UBICACION VEHÍCULO)',                                                   'correo' => 'ochoa.rrub@gmail.com',                        'documento' => '33'],
            [ 'nombre' => 'POLICIA MINISTERIAL (LUGARES FRECUENTES)',                                  'correo' => 'ochoa.rrub@gmail.com',                        'documento' => '34'],
            [ 'nombre' => 'FISCALÍA GENERAL (HISTORIAL DE LLAMADAS)',          'correo' => 'ochoa.rrub@gmail.com',                        'documento' => '35'],

            //FORMATOS DE + 72 HRS
            [ 'nombre' => 'UNIDAD DE ANÁLISIS DE INFORMACIÓN FG (GEOVEHICULOS)',         'correo' => 'ochoa.rrub@gmail.com',      'documento' => '36'],
            [ 'nombre' => 'UNIDAD DE ANÁLISIS DE INFORMACIÓN FG (LLAMADAS)',         'correo' => 'alejandrof.toledo@gmail.com',      'documento' => '37'],
            [ 'nombre' => 'FISCALÍA GENERAL (BOLETÍN GENÉTICO)',         'correo' => 'alejandrof.toledo@gmail.com',      'documento' => '38'],
            [ 'nombre' => 'FISCALÍA DE INVESTIGACIONES MINISTERIALES (IMEI)',         'correo' => 'alejandrof.toledo@gmail.com',      'documento' => '39'],
            [ 'nombre' => 'POLICIA MINISTERIAL (OTRAS DESAPARICIONES)',         'correo' => 'alejandrof.toledo@gmail.com',      'documento' => '40'],
            [ 'nombre' => 'SERVICIOS PERICIALES (PERFIL GENETICO)',         'correo' => 'alejandrof.toledo@gmail.com',      'documento' => '41'],*/
           // [ 'nombre' => '',         'correo' => 'zrv101893@gmail.com',      'documento' => '42'],

        ]);
    }
}
