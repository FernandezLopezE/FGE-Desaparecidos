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
            ['id' => 1, 'nombre' => 'SEGURIDAD PÚBLICA',                                                                                                  'correo' => ''],
            ['id' => 2, 'nombre' => 'SECRETARÍA DE FINANZAS Y PLANEACIÓN',                                                                                'correo' => ''],
            ['id' => 3, 'nombre' => 'POLICÍA MINISTERIAL',                                                                                                'correo' => ''],
            ['id' => 4, 'nombre' => 'POLICÍA FEDERAL REGIÓN XXXL XALAPA, VERACRUZ',                                                                       'correo' => ''],
            ['id' => 5, 'nombre' => '26/a ZONA MILITAR',                                                                                                  'correo' => ''],
            ['id' => 6, 'nombre' => 'SECRETARIA DE COMUNICACIONES Y TRANSPORTE',                                                                          'correo' => ''],
            ['id' => 7, 'nombre' => 'CENTRO ESTATAL DE CONTROL, COMANDO, COMUNICACIONES Y TRANSPORTE',                                                    'correo' => ''],
            ['id' => 8, 'nombre' => 'DIRECCIÓN GENERAL DE TRÁNSITO DEL ESTADO',                                                                           'correo' => ''],
            ['id' => 9, 'nombre' => 'GERENTE Y/O APODERADO LEGAL DE',                                                                                     'correo' => ''],
            ['id' => 10, 'nombre' => 'FISCALÍA GENERAL DEL ESTADO',                                                                                       'correo' => ''],
            ['id' => 11, 'nombre' => 'DIF MUNICIPAL',                                                                                                     'correo' => ''],
            ['id' => 12, 'nombre' => 'DIRECCIÓN GENERAL DE PREVENCIÓN Y REINSERCIÓN SOCIAL',                                                              'correo' => ''],
            ['id' => 13, 'nombre' => 'PROCURADURÍA GENERAL DE LA REPUBLICA EN EL ESTADO DE VERACRUZ',                                                     'correo' => ''],
            ['id' => 14, 'nombre' => 'INSTITUTO NACIONAL DE MIGRACIÓN EN EL ESTADO DE VERACRUZ',                                                          'correo' => ''],
            ['id' => 15, 'nombre' => 'DIRECCIÓN GENERAL DE LA POLICÍA MINISTERIAL',                                                                       'correo' => ''],
            ['id' => 16, 'nombre' => 'SERVICIOS DE SALUD DE VERACRUZ',                                                                                    'correo' => ''],
            ['id' => 17, 'nombre' => 'INSTITUTO MEXICANO DEL SEGURO SOCIAL',                                                                              'correo' => ''],
            ['id' => 18, 'nombre' => 'SERVICIOS PERICIALES DEL ESTADO DE VERACRUZ',                                                                       'correo' => ''],
            ['id' => 19, 'nombre' => 'ÚNIDAD DE ANÁLISIS DE INFORMACIÓN EN LA FISCALÍA GENERAL DEL ESTADO DE VERACRUZ',                                   'correo' => ''],
            ['id' => 20, 'nombre' => 'CENTRO DE INFORMACIÓN E INFRAESTRUCTURA TECNOLÓGICA',                                                               'correo' => ''],
            ['id' => 21, 'nombre' => 'C. APODERADO LEGAL DE LA EMPRESA DE TELEFONÍA DENOMINADA',                                                          'correo' => ''],
            ['id' => 22, 'nombre' => 'APODERADO LEGAL DE LA PERSONA MORAL DENOMINADA (COMPAÑÍA AUTOMOTRIZ Y/O DE SEGUROS QUE PRESTE EL SERVICIO DE GPS)', 'correo' => ''],
            ['id' => 23, 'nombre' => 'POLICÍA FEDERAL DEL ESTADO DE VERACRUZ',                                                                            'correo' => ''],

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
