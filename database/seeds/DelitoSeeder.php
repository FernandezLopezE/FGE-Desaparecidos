<?php

use Illuminate\Database\Seeder;

class DelitoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    ////BASADO EN EL SISTEMA NACIONAL
    public function run()
    {
        DB::table('cat_delito')->insert([    

            ['nombre' => 'LESIONES'],
            ['nombre' => 'ASALTO'],
            ['nombre' => 'VIOLENCIA'],
            ['nombre' => 'DESPOJO'],
            ['nombre' => 'DELITOS'],
            ['nombre' => 'INMERSION'],
            ['nombre' => 'ACOSO SEXUAL'],
            ['nombre' => 'ROBO'],
            ['nombre' => 'ABANDONO'],
            ['nombre' => 'ABIGEATO'],
            ['nombre' => 'ABORTO'],
            ['nombre' => 'ABUSO'], 
            ['nombre' => 'ADMINISTRACION'],
            ['nombre' => 'ALLANAMIENTO'],
            ['nombre' => 'AMENAZAS'],
            ['nombre' => 'ATAQUES'],
            ['nombre' => 'BIGAMIA'],
            ['nombre' => 'CALUMNIAS'],
            ['nombre' => 'COACCION Y AMENAZAS'],
            ['nombre' => 'COALICION'],
            ['nombre' => 'COHECHO'],         
            ['nombre' => 'CONGESTION ETILICA'],
            ['nombre' => 'CONSPIRACION'],
            ['nombre' => 'CORRUPCION'],
            ['nombre' => 'DAÑOS'],    
            ['nombre' => 'DESAPARICION'],
            ['nombre' => 'DESOBEDIENCIA Y RESISTENCIA DE PARTICULARES'],
            ['nombre' => 'EJERCICIO INDEBIDO O ABANDONO DE FUNCIONES PUBLICAS'],
            ['nombre' => 'ENCUBRIMIENTO'],
            ['nombre' => 'ENRIQUECIMIENTO ILICITO'],
            ['nombre' => 'ESTRAGOS'],
            ['nombre' => 'ESTUPRO'],
            ['nombre' => 'EVASION DE PRESOS'],
            ['nombre' => 'EXACCION ILEGAL'],
            ['nombre' => 'EXTORSION'],
            ['nombre' => 'FALSAS DENUNCIAS Y SIMULACION DE PRUEBAS'],
            ['nombre' => 'FALSEDAD ANTE LA AUTORIDAD'],
            ['nombre' => 'FALSIFICACION'],        
            ['nombre' => 'FRACCIONAMIENTO INDEBIDO'],
            ['nombre' => 'FRAUDE'],    
            ['nombre' => 'HOMICIDIO'],
            ['nombre' => 'INCUMPLIMIENTO'],
            ['nombre' => 'INCESTO'],
            ['nombre' => 'INDUCCION'],
            ['nombre' => 'INTIMIDACION'],
            ['nombre' => 'LENOCINIO Y TRATA DE PERSONAS'],
            ['nombre' => 'MALTRATO'],
            ['nombre' => 'MATRIMONIOS ILEGALES'],
            ['nombre' => 'MOTIN'],
            ['nombre' => 'OMISION'],
            ['nombre' => 'OTRAS MUERTES NO DELICTIVAS'],
            ['nombre' => 'OTROS ASALTOS'],
            ['nombre' => 'PECULADO'],
            ['nombre' => 'PELIGRO DE CONTAGIO'],
            ['nombre' => 'PRIVACION'],
            ['nombre' => 'INCITACION'],
            ['nombre' => 'QUEBRANTAMIENTO'],
            ['nombre' => 'REBELION'],
            ['nombre' => 'REVELACION'],
            ['nombre' => 'SABOTAJE'],
            ['nombre' => 'SECUESTRO'],
            ['nombre' => 'SEDICION'],
            ['nombre' => 'SUICIDIO EN GRADO DE TENTATIVA'],
            ['nombre' => 'SUMERSION'],
            ['nombre' => 'SUSTRACCION '],
            ['nombre' => 'TERRORISMO'],
            ['nombre' => 'TRAFICO'],
            ['nombre' => 'ULTRAJES'],
            ['nombre' => 'USO DE DOCUMENTO FALSO'],
            ['nombre' => 'USURA'],
            ['nombre' => 'USURPACION'],
            ['nombre' => 'VARIACION DE NOMBRE O DOMICILIO'],
            ['nombre' => 'VEHICULO PUESTO A DISPOSICION DEL MINISTERIO PUBLICO'],
            ['nombre' => 'VENTA O PROMESA DE VENTA INDEBIDA'],
            ['nombre' => 'VIOLACION'],   
            ['nombre' => 'EXPOSICION DE MENORES E INCAPACES'],
            ['nombre' => 'MANIPULACION GENETICA'],
            ['nombre' => 'DISCRIMINACION DE PERSONAS'],
            ['nombre' => 'RETENCION'],
            ['nombre' => 'INSOLVENCIA FRAUDULENTA EN PERJUICIO DE ACREEDORES'],
            ['nombre' => 'OPERACIONES CON RECURSOS DE PROCEDENCIA ILICITA'],
            ['nombre' => 'PORNOGRAFIA'],
            ['nombre' => 'PEDERASTIA'],
            ['nombre' => 'ESPIONAJE CONTRA LAS INSTITUCIONES DE SEGURIDAD PUBLICA'],
            ['nombre' => 'FEMINICIDIO'],
            ['nombre' => 'EQUIPARACION AL SECUESTRO'],
            ['nombre' => 'SIMULACION AL SECUESTRO'],
            ['nombre' => 'TRATA DE PERSONAS'],
            ['nombre' => 'NARCOMENUDEO'],
            ['nombre' => 'GRAFITI ILEGAL'],
            ['nombre' => 'ESTERILIDAD FORZADA'],
            ['nombre' => 'MOVILIZACION DE SERVICIOS DE EMERGENCIA'],
            ['nombre' => 'PERTURBACION DEL ORDEN PUBLICO'],
            ['nombre' => 'ACOSO Y HOSTIGAMIENTO SEXUAL'],
            ['nombre' => 'TORTURA']


        ]);
    }
}
