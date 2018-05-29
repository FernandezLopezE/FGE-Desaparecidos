<?php

use Illuminate\Database\Seeder;

class CatDestinariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cat_destinatarios')->insert([
        	['nombre' => 'ALEJANDRO FERNÁNDEZ TOLEDO', 'cargo' => 'DIRECCIÓN GENERAL DE TRÁNSITO DEL ESTADO',  'id_dependencia' => '1'],
        	['nombre' => 'MARCO POLO', 'cargo' => 'SECRETARIO DE COMUNICACIONE SY TRANSPORTE DEL ESTADO',  'id_dependencia' => '1'],
        	['nombre' => 'JUAN PÉREZ ESCAMILLA', 'cargo' => 'GERENTE Y/O APODERADO LEGAL',  'id_dependencia' => '2'],
        	['nombre' => 'JESÚS DORANTES CORTINA', 'cargo' => 'FISCAL GENERAL DEL ESTADO',  'id_dependencia' => '3'],
        	['nombre' => 'MIRIAM FLORES MONTALVO', 'cargo' => 'DIRECTORA DEL DIF MUNICIPAL',  'id_dependencia' => '4'],
        	['nombre' => 'OSCAR MEDINA FLORES', 'cargo' => 'DIRECTOR GENERAL DE PREVENCIÓN Y REINSERCIÓN SOCIAL',  'id_dependencia' => '5'],
        	['nombre' => 'FERNANDO MEDINA FLORES', 'cargo' => 'DIRECTOR GENERAL DE LA POLICIA MINISTERIAL',  'id_dependencia' => '5'],
        	['nombre' => 'EDUARDO MEDINA FLORES', 'cargo' => 'COMISARIO',  'id_dependencia' => '5'],
        	['nombre' => 'DANIEL MEDINA FLORES', 'cargo' => 'DELEGADO DE LA PGR',  'id_dependencia' => '5'],
        	['nombre' => 'LUIS MEDINA FLORES', 'cargo' => 'ENCARGADO DE LA 26/ZONA MILITAR',  'id_dependencia' => '5'],
        	['nombre' => 'LUIS MEDINA FLORES', 'cargo' => 'ENCARGADO DE LA 26/ZONA MILITAR',  'id_dependencia' => '5'],
        	['nombre' => 'HUGO JUAREZ MURILLO', 'cargo' => 'DELEGADO FEDERAL DEL INSTITUTO NACIONAL DE MIGRACIÓN',  'id_dependencia' => '6'],
        	['nombre' => 'HUGO MURILLO CORTES', 'cargo' => 'DELEGADO REGIONAL DE LA POLICÍA MINISTERIAL',  'id_dependencia' => '7'],
        	['nombre' => 'MARCO MURILLO CORTES', 'cargo' => 'SECRETARIO DE SALUD DEL ESTADO',  'id_dependencia' => '7'],
        	['nombre' => 'JORGE MURILLO CORTES', 'cargo' => 'DR. DELEGADO DEL IMSS',  'id_dependencia' => '7'],
        	['nombre' => 'FERNANDO MURILLO CORTES', 'cargo' => 'DIRECTOR GENERAL DE SERVICIOS PERICIALES',  'id_dependencia' => '8'],
        	['nombre' => 'JOSE MURILLO CORTES', 'cargo' => 'DIRECTOR DE LA UNIDAD DE ANÁLISIS DE INFORMACIÓN EN LA FISCALÍA GENERAL DEL ESTADO',  'id_dependencia' => '9'],
        	['nombre' => 'FERNANDO MURILLO CORTES', 'cargo' => 'DIRECTOR DEL CENTRO DE INFORMACIÓN E INFRAESTRUCTURA TECNOLÓGICA',  'id_dependencia' => '10'],
        	['nombre' => 'MANUEL MURILLO CORTES', 'cargo' => 'SECRETARIO DE SEGURIDAD PÚBLICA DEL ESTADO DE VERACRUZ',  'id_dependencia' => '11'],
        	['nombre' => 'ZENÓN MURILLO CORTES', 'cargo' => 'DIRECTOR DE LA POLICÍA MINISTERIAL',  'id_dependencia' => '11'],
        	['nombre' => 'ORLANDO MURILLO CORTES', 'cargo' => 'ENCARGADO DE LA REGIÓN XXXI XALAPA',  'id_dependencia' => '11'],
        	['nombre' => 'EDGAR MURILLO CORTES', 'cargo' => 'POLICÍA FEDERAL',  'id_dependencia' => '11'],
        	['nombre' => 'GUILLERMO MURILLO CORTES', 'cargo' => 'ZONA MILITAR',  'id_dependencia' => '11'],
        	['nombre' => 'EDGAR MURILLO CORTES', 'cargo' => 'C. APODERADO LEGAL DE LA EMPRESA DE TELEFONÍA DENOMINADA',  'id_dependencia' => '12'],
        	['nombre' => 'ALEJANDRO MURILLO CORTES', 'cargo' => 'APODERADO LEGAL DE LA PERSONA MORAL DENOMINADA (COMPAÑÍA AUTOMOTRIZ Y/O DE SEGUROS QUE PRESTE EL SERVICIO DE GPS)',  'id_dependencia' => '13'],
        	['nombre' => 'ALEJANDRO MURILLO CORTES', 'cargo' => 'SECRETARIO DE SEGURIDAD PÚBLICA DEL ESTADO DE VERACRUZ',  'id_dependencia' => '14'],
        	['nombre' => 'ALEJANDRO MURILLO CORTES', 'cargo' => 'DIRECTOR DE LA POLICÍA MINISTERIAL',  'id_dependencia' => '14'],
        	['nombre' => 'ALEJANDRO MURILLO CORTES', 'cargo' => 'ENCARGADO DE LA REGIÓN XXXI XALAPA, DE LA POLICÍA FEDERAL',  'id_dependencia' => '14'],
        	['nombre' => 'ALEJANDRO MURILLO CORTES', 'cargo' => 'ENCARGADO DE LA 26/A ZONA MILITAR',  'id_dependencia' => '14'],
        	['nombre' => 'CARMEN MONTES LÓPEZ', 'cargo' => 'SUBDIRECTORA DE REGISTRO Y CONTROL DE OBLIGACIONES EN LA SECRETARIA DE FINANZAS Y PLANEACIÓN',  'id_dependencia' => '15'],
        	['nombre' => 'ALEJANDRO MURILLO CORTES', 'cargo' => 'SECRETARIO DE SEGURIDAD PÚBLICA DEL ESTADO DE VERACRUZ',  'id_dependencia' => '16'],
        	['nombre' => 'TORIBIO MURILLO CORTES', 'cargo' => 'DIRECTOR DE LA POLICÍA MINISTERIAL',  'id_dependencia' => '16'],
        	['nombre' => 'GIL MURILLO CORTES', 'cargo' => 'ENCARGADO DE LA REGIÓN XXXI XALAPA, DE LA POLICÍA FEDERAL',  'id_dependencia' => '16'],
        	['nombre' => 'ARMANDO MURILLO CORTES', 'cargo' => 'ENCARGADO DE LA 26/A ZONA MILITAR',  'id_dependencia' => '16'],
        	['nombre' => 'ROLANDO MURILLO CORTES', 'cargo' => 'SECRETARIO DE SEGURIDAD PÚBLICA DEL ESTADO DE VERACRUZ',  'id_dependencia' => '17'],
        	['nombre' => 'AMAURY MURILLO CORTES', 'cargo' => 'DIRECTOR DE LA POLICÍA MINISTERIAL',  'id_dependencia' => '17'],
        	['nombre' => 'GABRIEL MURILLO CORTES', 'cargo' => 'ENCARGADO DE LA REGIÓN XXXI XALAPA, DE LA POLICÍA FEDERAL',  'id_dependencia' => '17'],
        	['nombre' => 'LUIS MURILLO CORTES', 'cargo' => 'ENCARGADO DE LA 26/A ZONA MILITAR',  'id_dependencia' => '17'],
        	['nombre' => 'FRANCISCO MURILLO CORTES', 'cargo' => 'SECRETARIO DE SEGURIDAD PÚBLICA DEL ESTADO DE VERACRUZ',  'id_dependencia' => '18'],
        	['nombre' => 'PABLO MURILLO CORTES', 'cargo' => 'DIRECTOR GENERAL DE LA POLICIA MINISTERIAL',  'id_dependencia' => '18'],
        	['nombre' => 'JUAN MURILLO CORTES', 'cargo' => 'COMISARIO',  'id_dependencia' => '18'],
        	['nombre' => 'SAUL MURILLO CORTES', 'cargo' => 'ENCARGADO DE LA 26/A ZONA MILITAR',  'id_dependencia' => '18'],
        	['nombre' => 'JAVIER MURILLO CORTES', 'cargo' => 'SECRETARIO DE COMUNICACIONES Y TRANSPORTE',  'id_dependencia' => '19'],   	
        	['nombre' => 'CARLOS CASTILLO ORTIZ', 'cargo' => 'SECRETARIO DE SEGURIDAD PÚBLICA DEL ESTADO DE VERACRUZ',  'id_dependencia' => '20'],
        	['nombre' => 'TORIBIO CASTILLO ORTIZ', 'cargo' => 'DIRECTOR DE LA POLICÍA MINISTERIAL',  'id_dependencia' => '20'],
        	['nombre' => 'JORGE CASTILLO FLORES', 'cargo' => 'ENCARGADO DE LA REGIÓN XXXI XALAPA, DE LA POLICÍA FEDERAL',  'id_dependencia' => '20'],
        	['nombre' => 'ARMANDO CASTILLO FLORES', 'cargo' => 'ENCARGADO DE LA 26/A ZONA MILITAR',  'id_dependencia' => '20'],
        	['nombre' => 'ALEJANDRO MURILLO CORTES', 'cargo' => 'SECRETARIO DE SEGURIDAD PÚBLICA DEL ESTADO DE VERACRUZ',  'id_dependencia' => '21'],
        	['nombre' => 'TORIBIO MURILLO CORTES', 'cargo' => 'DIRECTOR DE LA POLICÍA MINISTERIAL',  'id_dependencia' => '21'],
        	['nombre' => 'GIL MURILLO CORTES', 'cargo' => 'ENCARGADO DE LA REGIÓN XXXI XALAPA, DE LA POLICÍA FEDERAL',  'id_dependencia' => '21'],
        	['nombre' => 'ARMANDO MURILLO CORTES', 'cargo' => 'ENCARGADO DE LA 26/A ZONA MILITAR',  'id_dependencia' => '21'],
        	['nombre' => 'ARMANDO MURILLO CORTES', 'cargo' => 'ENCARGADO DEL CENTRO ESTATAL DE CONTROL, COMANDO, COMUNICACIONES Y CÓMPUTO, C4',  'id_dependencia' => '22'],
        	// FORMATOS DE 24 A 72 HORAS
        	['nombre' => 'CAROLINA MONTES SALAS', 'cargo' => 'DIRECTOR(A) DEL CENTRO ESTATAL DE ATENCIÓN A VICTIMAS EN LA FISCALIA GENERAL DEL ESTADO',  'id_dependencia' => '23'],
        	['nombre' => 'CAROLINA MONTES SALAS', 'cargo' => 'DIRECTOR(A) DEL CENTRO ESTATAL DE ATENCIÓN A VICTIMAS EN LA FISCALIA GENERAL DEL ESTADO',  'id_dependencia' => '24'],
        	['nombre' => 'CAROLINA MONTES SALAS', 'cargo' => 'INSTITUTO DE SALUD',  'id_dependencia' => '25'],
        	['nombre' => 'RUBEN SALAS FLORES', 'cargo' => 'DIRECTOR GENERAL DE SERVICIOS PERICIALES Y/O DELEGADO REGIONAL DE SERVICIOS PERICIALES',  'id_dependencia' => '26'],
        	['nombre' => 'RUBEN SALAS FLORES', 'cargo' => 'DIRECTOR GENERAL DE SERVICIOS PERICIALES Y/O DELEGADO REGIONAL DE SERVICIOS PERICIALES',  'id_dependencia' => '27'],
        	['nombre' => 'RUBEN SALAS FLORES', 'cargo' => 'DIRECTOR GENERAL DE LA POLICÍA MINISTERIAL',  'id_dependencia' => '27'],
        	['nombre' => 'RUBEN SALAS FLORES', 'cargo' => 'DELEGADO REGIONAL DE LA POLICÍA MINISTERIAL',  'id_dependencia' => '27'],
        	['nombre' => 'RUBEN SALAS FLORES', 'cargo' => 'COMANDANTE DE LA POLICÍA MINISTERIAL',  'id_dependencia' => '27'],
        	['nombre' => 'RUBEN SALAS FLORES', 'cargo' => 'DIRECTOR DE LA UNIDAD DE ANÁLISIS DE INFORMACIÓN EN LA FISCALÍA GENERAL DEL ESTADO',  'id_dependencia' => '28'],
        	['nombre' => 'RUBEN SALAS FLORES', 'cargo' => 'DIRECTOR GENERAL DE SERVICIOS PERICIALES Y/O DELEGADO REGIONAL DE SERVICIOS PERICIALES',  'id_dependencia' => '29'],
        	['nombre' => 'RUBEN SALAS FLORES', 'cargo' => 'DIRECTOR GENERAL DE SERVICIOS PERICIALES Y/O DELEGADO REGIONAL DE SERVICIOS PERICIALES',  'id_dependencia' => '30'],
        	['nombre' => 'RUBEN SALAS FLORES', 'cargo' => 'DIRECTOR GENERAL DE SERVICIOS PERICIALES Y/O DELEGADO REGIONAL DE SERVICIOS PERICIALES',  'id_dependencia' => '31'],
        	['nombre' => 'URIEL GOMEZ SOLIS', 'cargo' => 'AGREGAR CARGO',  'id_dependencia' => '32'],
        	['nombre' => 'UZZIEL MUJICA POMARES', 'cargo' => 'COMISIÓN NACIONAL BANCARIA Y DE VALORES',  'id_dependencia' => '33'],
        	['nombre' => 'RUBEN SALAS FLORES', 'cargo' => 'APODERADO LEGAL DE LA PERSONA MORAL DENOMINADA',  'id_dependencia' => '34'],

        	['nombre' => 'URIEL GOMEZ SOLIS', 'cargo' => 'DIRECTOR GENERAL DE LA POLICÍA MINISTERIAL',  'id_dependencia' => '35'],
        	['nombre' => 'UZZIEL MUJICA POMARES', 'cargo' => 'DELEGADO REGIONAL DE LA POLICÍA MINISTERIAL',  'id_dependencia' => '35'],
        	['nombre' => 'RUBEN SALAS FLORES', 'cargo' => 'COMANDANTE DE LA POLICÍA MINISTERIAL',  'id_dependencia' => '35'],
        	['nombre' => 'MARIO PUGA SALAS', 'cargo' => 'DIRECTOR DE LA UNIDAD DE ANÁLISIS DE INFORMACIÓN EN LA FISCALÍA GENERAL DEL ESTADO',  'id_dependencia' => '36'],
        	['nombre' => 'URIEL GOMEZ SOLIS', 'cargo' => 'DIRECTOR GENERAL DE LA POLICÍA MINISTERIAL',  'id_dependencia' => '37'],
        	['nombre' => 'UZZIEL MUJICA POMARES', 'cargo' => 'DELEGADO REGIONAL DE LA POLICÍA MINISTERIAL',  'id_dependencia' => '37'],
        	['nombre' => 'RUBEN SALAS FLORES', 'cargo' => 'COMANDANTE DE LA POLICÍA MINISTERIAL',  'id_dependencia' => '37'],
        	['nombre' => 'RUBEN SALAS FLORES', 'cargo' => 'DIRECTOR DE LA UNIDAD DE ANÁLISIS DE INFORMACIÓN EN LA FG',  'id_dependencia' => '38'],
        	['nombre' => 'FERNANDO GARCIA MONTALVO', 'cargo' => 'AGREGAR CARGO',  'id_dependencia' => '39'],
        	['nombre' => 'ALDO SOLIS CORDERO', 'cargo' => 'TITULAR DE LA DIVISIÓN CIENTÍFICA DE LA POLICÍA FEDERAL',  'id_dependencia' => '39'],
        	['nombre' => 'BRUNO ORTEGA POMARES', 'cargo' => 'PROCURADOR(A) GENERAL DE JUSTICIA DE LA REPÚBLICA',  'id_dependencia' => '39'],
        	['nombre' => 'SAUL QUIROGA CASTILLO', 'cargo' => 'AGREGAR CARGO',  'id_dependencia' => '40'],
        	['nombre' => 'EDUARDO SALAS CORTES', 'cargo' => 'DIRECTOR GENERAL DE SERVICIOS PERICIALES Y/O DELEGADO REGIONAL DE SERVICIOS PERICIALES',  'id_dependencia' => '41'],      	       	
        	  ]);
    }
}
