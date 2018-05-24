<?php

use Illuminate\Database\Seeder;

class CatSubModificacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
          DB::table('cat_sub_modificaciones')->insert([

            //CABELLO

            ['idModificacionesCuerpo'=>1, 'nombre' => 'SIN INFORMACIÓN'],
         	['idModificacionesCuerpo'=>1, 'nombre' => 'BASE/PERMANENTE'],
            ['idModificacionesCuerpo'=>1, 'nombre' => 'ALACIADO'],
            ['idModificacionesCuerpo'=>1, 'nombre' => 'MECHAS'],
            ['idModificacionesCuerpo'=>1, 'nombre' => 'EXTENSIONES'],
            ['idModificacionesCuerpo'=>1, 'nombre' => 'TRENZADO'],
            ['idModificacionesCuerpo'=>1, 'nombre' => 'RASTAS'],
            ['idModificacionesCuerpo'=>1, 'nombre' => 'PELUCA'],
            ['idModificacionesCuerpo'=>1, 'nombre' => 'BISOÑE'],
            ['idModificacionesCuerpo'=>1, 'nombre' => 'OTRO'],

            //FRENTE
            ['idModificacionesCuerpo'=>2, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>2, 'nombre' => 'TATUADA'],
            ['idModificacionesCuerpo'=>2, 'nombre' => 'PEARCING'],
            ['idModificacionesCuerpo'=>2, 'nombre' => 'OTRO'],

            //CEJA IZQUIERDA
            ['idModificacionesCuerpo'=>3, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>3, 'nombre' => 'TATUADA'],
            ['idModificacionesCuerpo'=>3, 'nombre' => 'PEARCING'],
            ['idModificacionesCuerpo'=>3, 'nombre' => 'TEÑIDA'],
            ['idModificacionesCuerpo'=>3, 'nombre' => 'RASURADA/DEPILADA'],
            ['idModificacionesCuerpo'=>3, 'nombre' => 'OTRO'],

            //CEJA DERECHA
            ['idModificacionesCuerpo'=>4, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>4, 'nombre' => 'TATUADA'],
            ['idModificacionesCuerpo'=>4, 'nombre' => 'PEARCING'],
            ['idModificacionesCuerpo'=>4, 'nombre' => 'TEÑIDA'],
            ['idModificacionesCuerpo'=>4, 'nombre' => 'RASURADA/DEPILADA'],
            ['idModificacionesCuerpo'=>4, 'nombre' => 'OTRO'],

            //AMBAS CEJAS
            ['idModificacionesCuerpo'=>68, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>68, 'nombre' => 'TATUADA'],
            ['idModificacionesCuerpo'=>68, 'nombre' => 'PEARCING'],
            ['idModificacionesCuerpo'=>68, 'nombre' => 'TEÑIDA'],
            ['idModificacionesCuerpo'=>68, 'nombre' => 'RASURADA/DEPILADA'],
            ['idModificacionesCuerpo'=>68, 'nombre' => 'OTRO'],

            //OJO IZQUIERDO
            ['idModificacionesCuerpo'=>5, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>5, 'nombre' => 'LENTES DE CONTACTO/PUPILENTES'],
            ['idModificacionesCuerpo'=>5, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>5, 'nombre' => 'OTRO'],

            //OJO DERECHO
            ['idModificacionesCuerpo'=>6, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>6, 'nombre' => 'LENTES DE CONTACTO/PUPILENTES'],
            ['idModificacionesCuerpo'=>6, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>6, 'nombre' => 'OTRO'],

            //AMBOS OJOS
            ['idModificacionesCuerpo'=>69, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>69, 'nombre' => 'LENTES DE CONTACTO/PUPILENTES'],
            ['idModificacionesCuerpo'=>69, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>69, 'nombre' => 'OTRO'],

            //OREJA IZQUIERDA
            ['idModificacionesCuerpo'=>7, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>7, 'nombre' => 'TATUADA'],
            ['idModificacionesCuerpo'=>7, 'nombre' => 'PERFORADA'],
            ['idModificacionesCuerpo'=>7, 'nombre' => 'ARETES'],
            ['idModificacionesCuerpo'=>7, 'nombre' => 'PERCING'],
            ['idModificacionesCuerpo'=>7, 'nombre' => 'PROTESIS AUDITIVA'],
            ['idModificacionesCuerpo'=>7, 'nombre' => 'EXPANSIONES'],
            ['idModificacionesCuerpo'=>7, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>7, 'nombre' => 'OTRO'],

            //OREJA DERECHA
            ['idModificacionesCuerpo'=>8, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>8, 'nombre' => 'TATUADA'],
            ['idModificacionesCuerpo'=>8, 'nombre' => 'PERFORADA'],
            ['idModificacionesCuerpo'=>8, 'nombre' => 'ARETES'],
            ['idModificacionesCuerpo'=>8, 'nombre' => 'PERCING'],
            ['idModificacionesCuerpo'=>8, 'nombre' => 'PROTESIS AUDITIVA'],
            ['idModificacionesCuerpo'=>8, 'nombre' => 'EXPANSIONES'],
            ['idModificacionesCuerpo'=>8, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>8, 'nombre' => 'OTRO'],

            //AMBAS OREJAS
            ['idModificacionesCuerpo'=>72, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>72, 'nombre' => 'TATUADA'],
            ['idModificacionesCuerpo'=>72, 'nombre' => 'PERFORADA'],
            ['idModificacionesCuerpo'=>72, 'nombre' => 'ARETES'],
            ['idModificacionesCuerpo'=>72, 'nombre' => 'PERCING'],
            ['idModificacionesCuerpo'=>72, 'nombre' => 'PROTESIS AUDITIVA'],
            ['idModificacionesCuerpo'=>72, 'nombre' => 'EXPANSIONES'],
            ['idModificacionesCuerpo'=>72, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>72, 'nombre' => 'OTRO'],


            //PATILLAS
            ['idModificacionesCuerpo'=>9, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>9, 'nombre' => 'LARGA'],
            ['idModificacionesCuerpo'=>9, 'nombre' => 'RASURADA'],
            ['idModificacionesCuerpo'=>9, 'nombre' => 'CERRADA'],
            ['idModificacionesCuerpo'=>9, 'nombre' => 'DEPILADA'],
            ['idModificacionesCuerpo'=>9, 'nombre' => 'OTRO'],

            //BIGOTE
            ['idModificacionesCuerpo'=>12, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>12, 'nombre' => 'LARGA'],
            ['idModificacionesCuerpo'=>12, 'nombre' => 'RASURADA'],
            ['idModificacionesCuerpo'=>12, 'nombre' => 'CERRADA'],
            ['idModificacionesCuerpo'=>12, 'nombre' => 'DEPILADA'],
            ['idModificacionesCuerpo'=>12, 'nombre' => 'OTRO'],

            //BARBA
            ['idModificacionesCuerpo'=>16, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>16, 'nombre' => 'LARGA'],
            ['idModificacionesCuerpo'=>16, 'nombre' => 'RASURADA'],
            ['idModificacionesCuerpo'=>16, 'nombre' => 'CERRADA'],
            ['idModificacionesCuerpo'=>16, 'nombre' => 'DEPILADA'],
            ['idModificacionesCuerpo'=>16, 'nombre' => 'OTRO'],
            
            //MEJILLAS
            ['idModificacionesCuerpo'=>10, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>10, 'nombre' => 'TATUADA'],
            ['idModificacionesCuerpo'=>10, 'nombre' => 'PERFORADA'],
            ['idModificacionesCuerpo'=>10, 'nombre' => 'PEARCING'],
            ['idModificacionesCuerpo'=>10, 'nombre' => 'EXPANSIONES'],
            ['idModificacionesCuerpo'=>10, 'nombre' => 'OTRO'],

            //MEJILLA IZQUIERDA
            ['idModificacionesCuerpo'=>70, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>70, 'nombre' => 'TATUADA'],
            ['idModificacionesCuerpo'=>70, 'nombre' => 'PERFORADA'],
            ['idModificacionesCuerpo'=>70, 'nombre' => 'PEARCING'],
            ['idModificacionesCuerpo'=>70, 'nombre' => 'EXPANSIONES'],
            ['idModificacionesCuerpo'=>70, 'nombre' => 'OTRO'],

            //MEJILLA DERECHA
            ['idModificacionesCuerpo'=>71, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>71, 'nombre' => 'TATUADA'],
            ['idModificacionesCuerpo'=>71, 'nombre' => 'PERFORADA'],
            ['idModificacionesCuerpo'=>71, 'nombre' => 'PEARCING'],
            ['idModificacionesCuerpo'=>71, 'nombre' => 'EXPANSIONES'],
            ['idModificacionesCuerpo'=>71, 'nombre' => 'OTRO'],

            //NARIZ
            ['idModificacionesCuerpo'=>11, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>11, 'nombre' => 'TATUADA'],
            ['idModificacionesCuerpo'=>11, 'nombre' => 'PERFORADA'],
            ['idModificacionesCuerpo'=>11, 'nombre' => 'PEARCING'],
            ['idModificacionesCuerpo'=>11, 'nombre' => 'EXPANSIONES'],
            ['idModificacionesCuerpo'=>11, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>11, 'nombre' => 'OTRO'],

            //AMBOS LABIOS
            ['idModificacionesCuerpo'=>73, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>73, 'nombre' => 'TATUADO'],
            ['idModificacionesCuerpo'=>73, 'nombre' => 'PERFORADA'],
            ['idModificacionesCuerpo'=>73, 'nombre' => 'PEARCING'],
            ['idModificacionesCuerpo'=>73, 'nombre' => 'EXPANSIONES'],
            ['idModificacionesCuerpo'=>73, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>73, 'nombre' => 'OTRO'],
            
            //LABIO INFERIOR
            ['idModificacionesCuerpo'=>13, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>13, 'nombre' => 'TATUADO'],
            ['idModificacionesCuerpo'=>13, 'nombre' => 'PERFORADA'],
            ['idModificacionesCuerpo'=>13, 'nombre' => 'PEARCING'],
            ['idModificacionesCuerpo'=>13, 'nombre' => 'EXPANSIONES'],
            ['idModificacionesCuerpo'=>13, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>13, 'nombre' => 'OTRO'],

            //LABIO SUPERIOR
            ['idModificacionesCuerpo'=>14, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>14, 'nombre' => 'TATUADO'],
            ['idModificacionesCuerpo'=>14, 'nombre' => 'PERFORADA'],
            ['idModificacionesCuerpo'=>14, 'nombre' => 'PEARCING'],
            ['idModificacionesCuerpo'=>14, 'nombre' => 'EXPANSIONES'],
            ['idModificacionesCuerpo'=>14, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>14, 'nombre' => 'OTRO'],


            //MENTÓN
            ['idModificacionesCuerpo'=>15, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>15, 'nombre' => 'TATUADO'],
            ['idModificacionesCuerpo'=>15, 'nombre' => 'PERFORADA'],
            ['idModificacionesCuerpo'=>15, 'nombre' => 'PEARCING'],
            ['idModificacionesCuerpo'=>15, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>15, 'nombre' => 'OTRO'],

            //CUELLO
            ['idModificacionesCuerpo'=>17, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>17, 'nombre' => 'TATUADO'],
            ['idModificacionesCuerpo'=>17, 'nombre' => 'PERFORADA'],
            ['idModificacionesCuerpo'=>17, 'nombre' => 'PEARCING'],
            ['idModificacionesCuerpo'=>17, 'nombre' => 'OTRO'],

            //NUCA
            ['idModificacionesCuerpo'=>18, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>18, 'nombre' => 'TATUADO'],
            ['idModificacionesCuerpo'=>18, 'nombre' => 'PERFORADA'],
            ['idModificacionesCuerpo'=>18, 'nombre' => 'PEARCING'],
            ['idModificacionesCuerpo'=>18, 'nombre' => 'OTRO'],

            //HOMBRO IZQUIERDO
            ['idModificacionesCuerpo'=>19, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>19, 'nombre' => 'TATUADO'],
            ['idModificacionesCuerpo'=>19, 'nombre' => 'PERFORADA'],
            ['idModificacionesCuerpo'=>19, 'nombre' => 'PEARCING'],
            ['idModificacionesCuerpo'=>19, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>19, 'nombre' => 'OTRO'],

            //HOMBRO DERECHO
            ['idModificacionesCuerpo'=>20, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>20, 'nombre' => 'TATUADO'],
            ['idModificacionesCuerpo'=>20, 'nombre' => 'PERFORADA'],
            ['idModificacionesCuerpo'=>20, 'nombre' => 'PEARCING'],
            ['idModificacionesCuerpo'=>20, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>20, 'nombre' => 'OTRO'],


            //BRAZO IZQUIERDO
            ['idModificacionesCuerpo'=>21, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>21, 'nombre' => 'TATUADO'],
            ['idModificacionesCuerpo'=>21, 'nombre' => 'PERFORADA'],
            ['idModificacionesCuerpo'=>21, 'nombre' => 'PEARCING'],
            ['idModificacionesCuerpo'=>21, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>21, 'nombre' => 'PROTESIS'],
            ['idModificacionesCuerpo'=>21, 'nombre' => 'OTRO'],

            //BRAZO DERECHO
            ['idModificacionesCuerpo'=>22, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>22, 'nombre' => 'TATUADO'],
            ['idModificacionesCuerpo'=>22, 'nombre' => 'PERFORADA'],
            ['idModificacionesCuerpo'=>22, 'nombre' => 'PEARCING'],
            ['idModificacionesCuerpo'=>22, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>22, 'nombre' => 'PROTESIS'],
            ['idModificacionesCuerpo'=>22, 'nombre' => 'OTRO'],


            //ANTEBRAZO IZQUIERDO
            ['idModificacionesCuerpo'=>23, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>23, 'nombre' => 'TATUADO'],
            ['idModificacionesCuerpo'=>23, 'nombre' => 'PERFORADA'],
            ['idModificacionesCuerpo'=>23, 'nombre' => 'PEARCING'],
            ['idModificacionesCuerpo'=>23, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>23, 'nombre' => 'OTRO'],

            //ANTEBRAZO DERECHO
            ['idModificacionesCuerpo'=>24, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>24, 'nombre' => 'TATUADO'],
            ['idModificacionesCuerpo'=>24, 'nombre' => 'PERFORADA'],
            ['idModificacionesCuerpo'=>24, 'nombre' => 'PEARCING'],
            ['idModificacionesCuerpo'=>24, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>24, 'nombre' => 'OTRO'],

            //CODO IZQUIERDO
            ['idModificacionesCuerpo'=>25, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>25, 'nombre' => 'TATUADO'],
            ['idModificacionesCuerpo'=>25, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>25, 'nombre' => 'OTRO'],

            //CODO DERECHO
            ['idModificacionesCuerpo'=>26, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>26, 'nombre' => 'TATUADO'],
            ['idModificacionesCuerpo'=>26, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>26, 'nombre' => 'OTRO'],


            //MUÑECA IZQUIERDO
            ['idModificacionesCuerpo'=>27, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>27, 'nombre' => 'TATUADA'],
            ['idModificacionesCuerpo'=>27, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>27, 'nombre' => 'OTRO'],

            //MUÑECA DERECHO
            ['idModificacionesCuerpo'=>28, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>28, 'nombre' => 'TATUADA'],
            ['idModificacionesCuerpo'=>28, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>28, 'nombre' => 'OTRO'],


            //PALMA IZQUIERDO
            ['idModificacionesCuerpo'=>29, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>29, 'nombre' => 'TATUADA'],
            ['idModificacionesCuerpo'=>29, 'nombre' => 'PERFORADA'],
            ['idModificacionesCuerpo'=>29, 'nombre' => 'PEARCING'],
            ['idModificacionesCuerpo'=>29, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>29, 'nombre' => 'OTRO'],

            //PALMA DERECHO
            ['idModificacionesCuerpo'=>30, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>30, 'nombre' => 'TATUADO'],
            ['idModificacionesCuerpo'=>30, 'nombre' => 'PERFORADA'],
            ['idModificacionesCuerpo'=>30, 'nombre' => 'PEARCING'],
            ['idModificacionesCuerpo'=>30, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>30, 'nombre' => 'OTRO'],

            //MANO IZQUIERDA
            ['idModificacionesCuerpo'=>31, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>31, 'nombre' => 'TATUADO'],
            ['idModificacionesCuerpo'=>31, 'nombre' => 'PERFORADA'],
            ['idModificacionesCuerpo'=>31, 'nombre' => 'PEARCING'],
            ['idModificacionesCuerpo'=>31, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>31, 'nombre' => 'PROTESIS'],
            ['idModificacionesCuerpo'=>31, 'nombre' => 'OTRO'],

            //MANO DERECHO
            ['idModificacionesCuerpo'=>32, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>32, 'nombre' => 'TATUADO'],
            ['idModificacionesCuerpo'=>32, 'nombre' => 'PERFORADA'],
            ['idModificacionesCuerpo'=>32, 'nombre' => 'PEARCING'],
            ['idModificacionesCuerpo'=>32, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>32, 'nombre' => 'PROTESIS'],
            ['idModificacionesCuerpo'=>32, 'nombre' => 'OTRO'],

            //DEDO ANULAR DERECHO
            ['idModificacionesCuerpo'=>34, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>34, 'nombre' => 'TATUADO'],
            ['idModificacionesCuerpo'=>34, 'nombre' => 'PERFORADA'],
            ['idModificacionesCuerpo'=>34, 'nombre' => 'PEARCING'],
            ['idModificacionesCuerpo'=>34, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>34, 'nombre' => 'PROTESIS'],
            ['idModificacionesCuerpo'=>34, 'nombre' => 'OTRO'],
            //DEDO ANULAR IZQUIERDO
            ['idModificacionesCuerpo'=>33, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>33, 'nombre' => 'TATUADO'],
            ['idModificacionesCuerpo'=>33, 'nombre' => 'PERFORADA'],
            ['idModificacionesCuerpo'=>33, 'nombre' => 'PEARCING'],
            ['idModificacionesCuerpo'=>33, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>33, 'nombre' => 'PROTESIS'],
            ['idModificacionesCuerpo'=>33, 'nombre' => 'OTRO'],

            //DEDO INDICE DERECHO
            ['idModificacionesCuerpo'=>36, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>36, 'nombre' => 'TATUADO'],
            ['idModificacionesCuerpo'=>36, 'nombre' => 'PERFORADA'],
            ['idModificacionesCuerpo'=>36, 'nombre' => 'PEARCING'],
            ['idModificacionesCuerpo'=>36, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>36, 'nombre' => 'PROTESIS'],
            ['idModificacionesCuerpo'=>36, 'nombre' => 'OTRO'],
            //DEDO INDICE IZQUIERDO
            ['idModificacionesCuerpo'=>35, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>35, 'nombre' => 'TATUADO'],
            ['idModificacionesCuerpo'=>35, 'nombre' => 'PERFORADA'],
            ['idModificacionesCuerpo'=>35, 'nombre' => 'PEARCING'],
            ['idModificacionesCuerpo'=>35, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>35, 'nombre' => 'PROTESIS'],
            ['idModificacionesCuerpo'=>35, 'nombre' => 'OTRO'],

            //DEDO MEDIO DERECHO
            ['idModificacionesCuerpo'=>38, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>38, 'nombre' => 'TATUADO'],
            ['idModificacionesCuerpo'=>38, 'nombre' => 'PERFORADA'],
            ['idModificacionesCuerpo'=>38, 'nombre' => 'PEARCING'],
            ['idModificacionesCuerpo'=>38, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>38, 'nombre' => 'PROTESIS'],
            ['idModificacionesCuerpo'=>38, 'nombre' => 'OTRO'],
            //DEDO MEDIO IZQUIERDO
            ['idModificacionesCuerpo'=>37, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>37, 'nombre' => 'TATUADO'],
            ['idModificacionesCuerpo'=>37, 'nombre' => 'PERFORADA'],
            ['idModificacionesCuerpo'=>37, 'nombre' => 'PEARCING'],
            ['idModificacionesCuerpo'=>37, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>37, 'nombre' => 'PROTESIS'],
            ['idModificacionesCuerpo'=>37, 'nombre' => 'OTRO'],

            //DEDO MENIQUE DERECHO
            ['idModificacionesCuerpo'=>40, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>40, 'nombre' => 'TATUADO'],
            ['idModificacionesCuerpo'=>40, 'nombre' => 'PERFORADA'],
            ['idModificacionesCuerpo'=>40, 'nombre' => 'PEARCING'],
            ['idModificacionesCuerpo'=>40, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>40, 'nombre' => 'PROTESIS'],
            ['idModificacionesCuerpo'=>40, 'nombre' => 'OTRO'],
            //DEDO MENIQUE IZQUIERDO
            ['idModificacionesCuerpo'=>39, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>39, 'nombre' => 'TATUADO'],
            ['idModificacionesCuerpo'=>39, 'nombre' => 'PERFORADA'],
            ['idModificacionesCuerpo'=>39, 'nombre' => 'PEARCING'],
            ['idModificacionesCuerpo'=>39, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>39, 'nombre' => 'PROTESIS'],
            ['idModificacionesCuerpo'=>39, 'nombre' => 'OTRO'],

            //DEDO PULGAR DERECHO
            ['idModificacionesCuerpo'=>42, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>42, 'nombre' => 'TATUADO'],
            ['idModificacionesCuerpo'=>42, 'nombre' => 'PERFORADA'],
            ['idModificacionesCuerpo'=>42, 'nombre' => 'PEARCING'],
            ['idModificacionesCuerpo'=>42, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>42, 'nombre' => 'PROTESIS'],
            ['idModificacionesCuerpo'=>42, 'nombre' => 'OTRO'],
            //DEDO PULGAR IZQUIERDO
            ['idModificacionesCuerpo'=>41, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>41, 'nombre' => 'TATUADO'],
            ['idModificacionesCuerpo'=>41, 'nombre' => 'PERFORADA'],
            ['idModificacionesCuerpo'=>41, 'nombre' => 'PEARCING'],
            ['idModificacionesCuerpo'=>41, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>41, 'nombre' => 'PROTESIS'],
            ['idModificacionesCuerpo'=>41, 'nombre' => 'OTRO'],


            //ESPALDA
            ['idModificacionesCuerpo'=>43, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>43, 'nombre' => 'TATUADA'],
            ['idModificacionesCuerpo'=>43, 'nombre' => 'PERFORADA'],
            ['idModificacionesCuerpo'=>43, 'nombre' => 'PEARCING'],
            ['idModificacionesCuerpo'=>43, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>43, 'nombre' => 'OTRO'],

            //ABDOMEN
            ['idModificacionesCuerpo'=>44, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>44, 'nombre' => 'TATUADO'],
            ['idModificacionesCuerpo'=>44, 'nombre' => 'PERFORADA'],
            ['idModificacionesCuerpo'=>44, 'nombre' => 'PEARCING'],
            ['idModificacionesCuerpo'=>44, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>44, 'nombre' => 'OTRO'],

            //CADERA
            ['idModificacionesCuerpo'=>45, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>45, 'nombre' => 'TATUADA'],
            ['idModificacionesCuerpo'=>45, 'nombre' => 'PERFORADA'],
            ['idModificacionesCuerpo'=>45, 'nombre' => 'PEARCING'],
            ['idModificacionesCuerpo'=>45, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>45, 'nombre' => 'OTRO'],

            //NALGA IZQUIERDA
            ['idModificacionesCuerpo'=>46, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>46, 'nombre' => 'TATUADA'],
            ['idModificacionesCuerpo'=>46, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>46, 'nombre' => 'OTRO'],

            //NALGA DERECHA
            ['idModificacionesCuerpo'=>47, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>47, 'nombre' => 'TATUADA'],
            ['idModificacionesCuerpo'=>47, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>47, 'nombre' => 'OTRO'],

            //MUSLO IZQUIERDO
            ['idModificacionesCuerpo'=>49, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>49, 'nombre' => 'TATUADA'],
            ['idModificacionesCuerpo'=>49, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>49, 'nombre' => 'OTRO'],

            //MUSLO DERECHO
            ['idModificacionesCuerpo'=>50, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>50, 'nombre' => 'TATUADA'],
            ['idModificacionesCuerpo'=>50, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>50, 'nombre' => 'OTRO'],

            //OMBLIGO
            ['idModificacionesCuerpo'=>51, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>51, 'nombre' => 'TATUADO'],
            ['idModificacionesCuerpo'=>51, 'nombre' => 'PERFORADA'],
            ['idModificacionesCuerpo'=>51, 'nombre' => 'PEARCING'],
            ['idModificacionesCuerpo'=>51, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>51, 'nombre' => 'OTRO'],

            //PIERNA IZQUIERDA
            ['idModificacionesCuerpo'=>52, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>52, 'nombre' => 'TATUADA'],
            ['idModificacionesCuerpo'=>52, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>52, 'nombre' => 'OTRO'],

            //PIERNA DERECHA
            ['idModificacionesCuerpo'=>53, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>53, 'nombre' => 'TATUADA'],
            ['idModificacionesCuerpo'=>53, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>53, 'nombre' => 'OTRO'],

            //RODILLA IZQUIERDA
            ['idModificacionesCuerpo'=>54, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>54, 'nombre' => 'TATUADA'],
            ['idModificacionesCuerpo'=>54, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>54, 'nombre' => 'OTRO'],

            //RODILLA DERECHA
            ['idModificacionesCuerpo'=>55, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>55, 'nombre' => 'TATUADA'],
            ['idModificacionesCuerpo'=>55, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>55, 'nombre' => 'OTRO'],

            //TALÓN IZQUIERDA
            ['idModificacionesCuerpo'=>56, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>56, 'nombre' => 'TATUADO'],
            ['idModificacionesCuerpo'=>56, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>56, 'nombre' => 'OTRO'],

            //TALÓN DERECHA
            ['idModificacionesCuerpo'=>57, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>57, 'nombre' => 'TATUADO'],
            ['idModificacionesCuerpo'=>57, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>57, 'nombre' => 'OTRO'],

            //PIE IZQUIERDA
            ['idModificacionesCuerpo'=>58, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>58, 'nombre' => 'TATUADO'],
            ['idModificacionesCuerpo'=>58, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>58, 'nombre' => 'OTRO'],

            //PIE DERECHA
            ['idModificacionesCuerpo'=>59, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>59, 'nombre' => 'TATUADO'],
            ['idModificacionesCuerpo'=>59, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>59, 'nombre' => 'OTRO'],

            //PECHO DERECHO
            ['idModificacionesCuerpo'=>60, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>60, 'nombre' => 'TATUADO'],
            ['idModificacionesCuerpo'=>60, 'nombre' => 'PERFORADA'],
            ['idModificacionesCuerpo'=>60, 'nombre' => 'PEARCING'],
            ['idModificacionesCuerpo'=>60, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>60, 'nombre' => 'OTRO'],

            //PECHO IZQUIERDO
            ['idModificacionesCuerpo'=>61, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>61, 'nombre' => 'TATUADO'],
            ['idModificacionesCuerpo'=>61, 'nombre' => 'PERFORADA'],
            ['idModificacionesCuerpo'=>61, 'nombre' => 'PEARCING'],
            ['idModificacionesCuerpo'=>61, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>61, 'nombre' => 'OTRO'],

            //PANTORRILLA IZQUIERDA
            ['idModificacionesCuerpo'=>62, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>62, 'nombre' => 'TATUADO'],
            ['idModificacionesCuerpo'=>62, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>62, 'nombre' => 'OTRO'],

            //PANTORRILLA DERECHA
            ['idModificacionesCuerpo'=>63, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>63, 'nombre' => 'TATUADO'],
            ['idModificacionesCuerpo'=>63, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>63, 'nombre' => 'OTRO'],

            //TOBILLO IZQUIERDA
            ['idModificacionesCuerpo'=>64, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>64, 'nombre' => 'TATUADO'],
            ['idModificacionesCuerpo'=>64, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>64, 'nombre' => 'OTRO'],

            //TOBILLO DERECHA
            ['idModificacionesCuerpo'=>65, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>65, 'nombre' => 'TATUADO'],
            ['idModificacionesCuerpo'=>65, 'nombre' => 'CIRUGÍA'],
            ['idModificacionesCuerpo'=>65, 'nombre' => 'OTRO'],

            //UÑAS
            ['idModificacionesCuerpo'=>66, 'nombre' => 'SIN INFORMACIÓN'],
            ['idModificacionesCuerpo'=>66, 'nombre' => 'UÑAS POSTIZAS'],
            ['idModificacionesCuerpo'=>66, 'nombre' => 'POLISH'],
            ['idModificacionesCuerpo'=>66, 'nombre' => 'OTRO'],

            //ESPINILLA IZQUIERDA
            ['idParticularidadesCuerpo'=>74, 'nombre' => 'SIN INFORMACION'],
            ['idParticularidadesCuerpo'=>74, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>74, 'nombre' => 'MANCHAS'],
            ['idParticularidadesCuerpo'=>74, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>74, 'nombre' => 'QUEMADURA'],
            ['idParticularidadesCuerpo'=>74, 'nombre' => 'OTRO'],

            //ESPINILLA DERECHA
            ['idParticularidadesCuerpo'=>75, 'nombre' => 'SIN INFORMACION'],
            ['idParticularidadesCuerpo'=>75, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>75, 'nombre' => 'MANCHAS'],
            ['idParticularidadesCuerpo'=>75, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>75, 'nombre' => 'QUEMADURA'],
            ['idParticularidadesCuerpo'=>75, 'nombre' => 'OTRO'],

        ]);

    }
}
