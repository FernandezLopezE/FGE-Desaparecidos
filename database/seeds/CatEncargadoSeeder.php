<?php

use Illuminate\Database\Seeder;

class CatEncargadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cat_encargado')->insert([
            ['id' => 1, 'nombres' => 'ALEJANDRO', 'primerAp' => 'MURILLO', 'segundoAp' => 'CORTES', 'cargo' => 'SECRETARIO DE SEGURIDAD PÚBLICA DEL ESTADO DE VERACRUZ'],
            ['id' => 2, 'nombres' => 'CARMEN', 'primerAp' => 'MONTES', 'segundoAp' => 'LÓPEZ', 'cargo' => 'SUBDIRECTORA DE REGISTRO Y CONTROL DE OBLIGACIONES'],
            ['id' => 3, 'nombres' => 'FERNANDO', 'primerAp' => 'MEDINA', 'segundoAp' => 'FLORES', 'cargo' => 'DIRECTOR GENERAL DE LA POLICIA MINISTERIAL'],
            ['id' => 4, 'nombres' => 'ALEJANDRO', 'primerAp' => 'MURILLO', 'segundoAp' => 'CORTES', 'cargo' => 'ENCARGADO DE LA COMANDANCIA DE LA POLICIA FEDERAL REGIÓN XXXL XALAPA VER'],
            ['id' => 5, 'nombres' => 'LUIS', 'primerAp' => 'MEDINA', 'segundoAp' => 'FLORES', 'cargo' => 'ENCARGADO DE LA 26/ZONA MILITAR'],
            ['id' => 6, 'nombres' => 'MARCO', 'primerAp' => 'POLO', 'segundoAp' => 'POLO', 'cargo' => 'SECRETARIO DE COMUNICACIONES Y TRANSPORTE DEL ESTADO'],
            ['id' => 7, 'nombres' => 'ARMANDO', 'primerAp' => 'MURILLO', 'segundoAp' => 'CORTES', 'cargo' => 'ENCARGADO DEL CENTRO ESTATAL DE CONTROL, COMANDO, COMUNICACIONES Y CÓMPUTO, C4, XALAPA, VER.'],
            ['id' => 8, 'nombres' => 'ALEJANDRO', 'primerAp' => 'FERNÁNDEZ', 'segundoAp' => 'TOLEDO', 'cargo' => 'DIRECCIÓN GENERAL DE TRÁNSITO DEL ESTADO'],
            ['id' => 9, 'nombres' => 'JUAN', 'primerAp' => 'PÉREZ', 'segundoAp' => 'ESCAMILLA', 'cargo' => 'GERENTE Y/O APODERADO LEGAL'],
            ['id' => 10, 'nombres' => 'JESÚS', 'primerAp' => 'DORANTES', 'segundoAp' => 'CORTINA', 'cargo' => 'FISCAL GENERAL DEL ESTADO'],
            ['id' => 11, 'nombres' => 'MIRIAM', 'primerAp' => 'FLORES', 'segundoAp' => 'MONTALVO', 'cargo' => 'DIRECTORA DEL DIF MUNICIPAL'],
            ['id' => 12, 'nombres' => 'OSCAR', 'primerAp' => 'MEDINA', 'segundoAp' => 'FLORES', 'cargo' => 'DIRECTOR GENERAL DE PREVENCIÓN Y REINSERCIÓN SOCIAL'],
            ['id' => 13, 'nombres' => 'GUILLERMO', 'primerAp' => 'MURILLO', 'segundoAp' => 'CORTES', 'cargo' => 'COORDINADOR ESTATAL DE LA POLICÍA FEDERAL DEL ESTADO DE VERACRUZ'],
            ['id' => 14, 'nombres' => 'HUGO', 'primerAp' => 'JUAREZ', 'segundoAp' => 'MURILLO', 'cargo' => 'DELEGADO DE LA PROCURADURÍA GENERAL DE LA REPÚBLICA EN EL ESTADO DE VERACRUZ'],
            ['id' => 15, 'nombres' => 'JOSÉ', 'primerAp' => 'AYALA', 'segundoAp' => 'GONZALES', 'cargo' => 'DELEGADO FEDERAL DEL INSTITUTO NACIONAL DE MIGRACIÓN'],
            ['id' => 16, 'nombres' => 'JONATHAN', 'primerAp' => 'CORTÉS', 'segundoAp' => 'ALVARADO', 'cargo' => 'DELEGADO REGIONAL DE LA POLICÍA MINISTERIAL'],
            ['id' => 17, 'nombres' => 'MANUEL',  'primerAp' => 'FARÍAS', 'segundoAp' => 'FUENTES', 'cargo' => 'SECRETARIO DE SALUD DEL ESTADO'],
            ['id' => 18, 'nombres' => 'JORGE', 'primerAp' => 'MUNGÍA', 'segundoAp' => 'VALLES', 'cargo' => 'DR. DELEGADO DEL INSTITUTO MEXICANO DEL SEGURO SOCIAL'],
            ['id' => 19, 'nombres' => 'FERNANDO', 'primerAp' => 'MURILLO', 'segundoAp' => 'CORTES', 'cargo' => 'DIRECTOR GENERAL DE SERVICIOS PERICIALES'],
            ['id' => 20, 'nombres' => 'JOSE', 'primerAp' => 'CARAM', 'segundoAp' => 'AMERICAS', 'cargo' => 'DIRECTOR DE LA UNIDAD DE ANÁLISIS DE INFORMACIÓN EN LA FISCALÍA GENERAL DEL ESTADO DE VERACRUZ'],
            ['id' => 21, 'nombres' => 'FERNANDO',  'primerAp' => 'CRUZ', 'segundoAp' => 'CRUZ', 'cargo' => 'DIRECTOR DEL CENTRO DE INFORMACIÓN E INFRAESTRUCTURA TECNOLÓGICA'],
            ['id' => 22, 'nombres' => 'EDGAR', 'primerAp' => 'MURILLO', 'segundoAp' => 'CORTES', 'cargo' => 'C. APODERADO LEGAL DE LA EMPRESA DE TELEFONÍA DENOMINADA'],
            ['id' => 23, 'nombres' => 'ALEJANDRO', 'primerAp' => 'MENDÉZ', 'segundoAp' => 'CORDERO',  'cargo' => 'APODERADO LEGAL DE LA PERSONA MORAL DENOMINADA (COMPAÑÍA AUTOMOTRIZ Y/O DE SEGUROS QUE PRESTE EL SERVICIO DE GPS)'],
        ]);
    }
}
