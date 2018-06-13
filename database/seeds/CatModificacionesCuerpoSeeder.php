<?php

use Illuminate\Database\Seeder;

class CatModificacionesCuerpoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cat_modificaciones_cuerpo')->insert([
         	 //CABELLO

            ['idPartesCuerpo'=>2, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>2, 'nombre' => 'BASE/PERMANENTE'],
            ['idPartesCuerpo'=>2, 'nombre' => 'ALACIADO'],
            ['idPartesCuerpo'=>2, 'nombre' => 'MECHAS'],
            ['idPartesCuerpo'=>2, 'nombre' => 'EXTENSIONES'],
            ['idPartesCuerpo'=>2, 'nombre' => 'TRENZADO'],
            ['idPartesCuerpo'=>2, 'nombre' => 'RASTAS'],
            ['idPartesCuerpo'=>2, 'nombre' => 'PELUCA'],
            ['idPartesCuerpo'=>2, 'nombre' => 'BISOÑE'],
            ['idPartesCuerpo'=>2, 'nombre' => 'OTRO'],

            //FRENTE
            ['idPartesCuerpo'=>7, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>7, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>7, 'nombre' => 'PIERCING'],
            ['idPartesCuerpo'=>7, 'nombre' => 'OTRO'],

            //CEJA IZQUIERDA
            ['idPartesCuerpo'=>8, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>8, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>8, 'nombre' => 'PIERCING'],
            ['idPartesCuerpo'=>8, 'nombre' => 'TEÑIDA'],
            ['idPartesCuerpo'=>8, 'nombre' => 'RASURADA/DEPILADA'],
            ['idPartesCuerpo'=>8, 'nombre' => 'OTRO'],

            

            //OJO IZQUIERDO
            ['idPartesCuerpo'=>9, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>9, 'nombre' => 'LENTES DE CONTACTO/PUPILENTES'],
            ['idPartesCuerpo'=>9, 'nombre' => 'CIRUGÍA'],
            ['idPartesCuerpo'=>9, 'nombre' => 'OTRO'],

            

            //OREJA IZQUIERDA
            ['idPartesCuerpo'=>11, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>11, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>11, 'nombre' => 'PERFORADA'],
            ['idPartesCuerpo'=>11, 'nombre' => 'ARETES'],
            ['idPartesCuerpo'=>11, 'nombre' => 'PIERCING'],
            ['idPartesCuerpo'=>11, 'nombre' => 'PROTESIS AUDITIVA'],
            ['idPartesCuerpo'=>11, 'nombre' => 'EXPANSIONES'],
            ['idPartesCuerpo'=>11, 'nombre' => 'CIRUGÍA'],
            ['idPartesCuerpo'=>11, 'nombre' => 'OTRO'],

            


            //PATILLAS
            ['idPartesCuerpo'=>5, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>5, 'nombre' => 'TEÑIDA'],
            ['idPartesCuerpo'=>5, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>5, 'nombre' => 'LARGA'],
            ['idPartesCuerpo'=>5, 'nombre' => 'RASURADA'],
            ['idPartesCuerpo'=>5, 'nombre' => 'CERRADA'],
            ['idPartesCuerpo'=>5, 'nombre' => 'DEPILADA'],
            ['idPartesCuerpo'=>5, 'nombre' => 'OTRO'],

            //BIGOTE
            ['idPartesCuerpo'=>4, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>4, 'nombre' => 'TEÑIDA'],
            ['idPartesCuerpo'=>4, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>4, 'nombre' => 'LARGA'],
            ['idPartesCuerpo'=>4, 'nombre' => 'RASURADA'],
            ['idPartesCuerpo'=>4, 'nombre' => 'CERRADA'],
            ['idPartesCuerpo'=>4, 'nombre' => 'DEPILADA'],
            ['idPartesCuerpo'=>4, 'nombre' => 'OTRO'],

            //BARBA
            ['idPartesCuerpo'=>3, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>3, 'nombre' => 'TEÑIDA'],
            ['idPartesCuerpo'=>3, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>3, 'nombre' => 'LARGA'],
            ['idPartesCuerpo'=>3, 'nombre' => 'RASURADA'],
            ['idPartesCuerpo'=>3, 'nombre' => 'CERRADA'],
            ['idPartesCuerpo'=>3, 'nombre' => 'DEPILADA'],
            ['idPartesCuerpo'=>3, 'nombre' => 'OTRO'],
            
            //MEJILLAS
            ['idPartesCuerpo'=>12, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>12, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>12, 'nombre' => 'PERFORADA'],
            ['idPartesCuerpo'=>12, 'nombre' => 'PIERCING'],
            ['idPartesCuerpo'=>12, 'nombre' => 'EXPANSIONES'],
            ['idPartesCuerpo'=>12, 'nombre' => 'OTRO'],

            

            //NARIZ
            ['idPartesCuerpo'=>10, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>10, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>10, 'nombre' => 'PERFORADA'],
            ['idPartesCuerpo'=>10, 'nombre' => 'PIERCING'],
            ['idPartesCuerpo'=>10, 'nombre' => 'EXPANSIONES'],
            ['idPartesCuerpo'=>10, 'nombre' => 'CIRUGÍA'],
            ['idPartesCuerpo'=>10, 'nombre' => 'OTRO'],

           
            
            //LABIO INFERIOR
            ['idPartesCuerpo'=>14, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>14, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>14, 'nombre' => 'PERFORADA'],
            ['idPartesCuerpo'=>14, 'nombre' => 'PIERCING'],
            ['idPartesCuerpo'=>14, 'nombre' => 'EXPANSIONES'],
            ['idPartesCuerpo'=>14, 'nombre' => 'CIRUGÍA'],
            ['idPartesCuerpo'=>14, 'nombre' => 'OTRO'],

            


            //MENTÓN
            ['idPartesCuerpo'=>15, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>15, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>15, 'nombre' => 'PERFORADA'],
            ['idPartesCuerpo'=>15, 'nombre' => 'PIERCING'],
            ['idPartesCuerpo'=>15, 'nombre' => 'CIRUGÍA'],
            ['idPartesCuerpo'=>15, 'nombre' => 'OTRO'],

            //CUELLO
            ['idPartesCuerpo'=>16, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>16, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>16, 'nombre' => 'PERFORADA'],
            ['idPartesCuerpo'=>16, 'nombre' => 'PIERCING'],
            ['idPartesCuerpo'=>16, 'nombre' => 'OTRO'],

            //NUCA
            ['idPartesCuerpo'=>61, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>61, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>61, 'nombre' => 'PERFORADA'],
            ['idPartesCuerpo'=>61, 'nombre' => 'PIERCING'],
            ['idPartesCuerpo'=>61, 'nombre' => 'OTRO'],

            //HOMBRO IZQUIERDO
            ['idPartesCuerpo'=>18, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>18, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>18, 'nombre' => 'PERFORADA'],
            ['idPartesCuerpo'=>18, 'nombre' => 'PIERCING'],
            ['idPartesCuerpo'=>18, 'nombre' => 'CIRUGÍA'],
            ['idPartesCuerpo'=>18, 'nombre' => 'OTRO'],

            //HOMBRO DERECHO
            ['idPartesCuerpo'=>17, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>17, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>17, 'nombre' => 'PERFORADA'],
            ['idPartesCuerpo'=>17, 'nombre' => 'PIERCING'],
            ['idPartesCuerpo'=>17, 'nombre' => 'CIRUGÍA'],
            ['idPartesCuerpo'=>17, 'nombre' => 'OTRO'],


            //BRAZO IZQUIERDO
            ['idPartesCuerpo'=>20, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>20, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>20, 'nombre' => 'PERFORADA'],
            ['idPartesCuerpo'=>20, 'nombre' => 'PIERCING'],
            ['idPartesCuerpo'=>20, 'nombre' => 'CIRUGÍA'],
            ['idPartesCuerpo'=>20, 'nombre' => 'PROTESIS'],
            ['idPartesCuerpo'=>20, 'nombre' => 'OTRO'],

            //BRAZO DERECHO
            ['idPartesCuerpo'=>30, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>30, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>30, 'nombre' => 'PERFORADA'],
            ['idPartesCuerpo'=>30, 'nombre' => 'PIERCING'],
            ['idPartesCuerpo'=>30, 'nombre' => 'CIRUGÍA'],
            ['idPartesCuerpo'=>30, 'nombre' => 'PROTESIS'],
            ['idPartesCuerpo'=>30, 'nombre' => 'OTRO'],


            //ANTEBRAZO IZQUIERDO
            ['idPartesCuerpo'=>21, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>21, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>21, 'nombre' => 'PERFORADA'],
            ['idPartesCuerpo'=>21, 'nombre' => 'PIERCING'],
            ['idPartesCuerpo'=>21, 'nombre' => 'CIRUGÍA'],
            ['idPartesCuerpo'=>21, 'nombre' => 'OTRO'],

            //ANTEBRAZO DERECHO
            ['idPartesCuerpo'=>31, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>31, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>31, 'nombre' => 'PERFORADA'],
            ['idPartesCuerpo'=>31, 'nombre' => 'PIERCING'],
            ['idPartesCuerpo'=>31, 'nombre' => 'CIRUGÍA'],
            ['idPartesCuerpo'=>31, 'nombre' => 'OTRO'],

            //CODO IZQUIERDO
            ['idPartesCuerpo'=>22, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>22, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>22, 'nombre' => 'CIRUGÍA'],
            ['idPartesCuerpo'=>22, 'nombre' => 'OTRO'],

            //CODO DERECHO
            ['idPartesCuerpo'=>32, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>32, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>32, 'nombre' => 'CIRUGÍA'],
            ['idPartesCuerpo'=>32, 'nombre' => 'OTRO'],


            //MUÑECA IZQUIERDO
            ['idPartesCuerpo'=>43, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>43, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>43, 'nombre' => 'CIRUGÍA'],
            ['idPartesCuerpo'=>43, 'nombre' => 'OTRO'],

            //MUÑECA DERECHO
            ['idPartesCuerpo'=>42, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>42, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>42, 'nombre' => 'CIRUGÍA'],
            ['idPartesCuerpo'=>42, 'nombre' => 'OTRO'],


            //PALMA IZQUIERDO
            ['idPartesCuerpo'=>24, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>24, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>24, 'nombre' => 'PERFORADA'],
            ['idPartesCuerpo'=>24, 'nombre' => 'PIERCING'],
            ['idPartesCuerpo'=>24, 'nombre' => 'CIRUGÍA'],
            ['idPartesCuerpo'=>24, 'nombre' => 'OTRO'],

            //PALMA DERECHO
            ['idPartesCuerpo'=>34, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>34, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>34, 'nombre' => 'PERFORADA'],
            ['idPartesCuerpo'=>34, 'nombre' => 'PIERCING'],
            ['idPartesCuerpo'=>34, 'nombre' => 'CIRUGÍA'],
            ['idPartesCuerpo'=>34, 'nombre' => 'OTRO'],

            //MANO IZQUIERDA
            ['idPartesCuerpo'=>23, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>23, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>23, 'nombre' => 'PERFORADA'],
            ['idPartesCuerpo'=>23, 'nombre' => 'PIERCING'],
            ['idPartesCuerpo'=>23, 'nombre' => 'CIRUGÍA'],
            ['idPartesCuerpo'=>23, 'nombre' => 'PROTESIS'],
            ['idPartesCuerpo'=>23, 'nombre' => 'OTRO'],

            //MANO DERECHO
            ['idPartesCuerpo'=>33, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>33, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>33, 'nombre' => 'PERFORADA'],
            ['idPartesCuerpo'=>33, 'nombre' => 'PIERCING'],
            ['idPartesCuerpo'=>33, 'nombre' => 'CIRUGÍA'],
            ['idPartesCuerpo'=>33, 'nombre' => 'PROTESIS'],
            ['idPartesCuerpo'=>33, 'nombre' => 'OTRO'],

            //DEDO ANULAR DERECHO
            ['idPartesCuerpo'=>36, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>36, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>36, 'nombre' => 'PERFORADA'],
            ['idPartesCuerpo'=>36, 'nombre' => 'PIERCING'],
            ['idPartesCuerpo'=>36, 'nombre' => 'CIRUGÍA'],
            ['idPartesCuerpo'=>36, 'nombre' => 'PROTESIS'],
            ['idPartesCuerpo'=>36, 'nombre' => 'OTRO'],
            //DEDO ANULAR IZQUIERDO
            ['idPartesCuerpo'=>27, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>27, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>27, 'nombre' => 'PERFORADA'],
            ['idPartesCuerpo'=>27, 'nombre' => 'PIERCING'],
            ['idPartesCuerpo'=>27, 'nombre' => 'CIRUGÍA'],
            ['idPartesCuerpo'=>27, 'nombre' => 'PROTESIS'],
            ['idPartesCuerpo'=>27, 'nombre' => 'OTRO'],

            //DEDO INDICE DERECHO
            ['idPartesCuerpo'=>38, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>38, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>38, 'nombre' => 'PERFORADA'],
            ['idPartesCuerpo'=>38, 'nombre' => 'PIERCING'],
            ['idPartesCuerpo'=>38, 'nombre' => 'CIRUGÍA'],
            ['idPartesCuerpo'=>38, 'nombre' => 'PROTESIS'],
            ['idPartesCuerpo'=>38, 'nombre' => 'OTRO'],
            //DEDO INDICE IZQUIERDO
            ['idPartesCuerpo'=>29, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>29, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>29, 'nombre' => 'PERFORADA'],
            ['idPartesCuerpo'=>29, 'nombre' => 'PIERCING'],
            ['idPartesCuerpo'=>29, 'nombre' => 'CIRUGÍA'],
            ['idPartesCuerpo'=>29, 'nombre' => 'PROTESIS'],
            ['idPartesCuerpo'=>29, 'nombre' => 'OTRO'],

            //DEDO MEDIO DERECHO
            ['idPartesCuerpo'=>37, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>37, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>37, 'nombre' => 'PERFORADA'],
            ['idPartesCuerpo'=>37, 'nombre' => 'PIERCING'],
            ['idPartesCuerpo'=>37, 'nombre' => 'CIRUGÍA'],
            ['idPartesCuerpo'=>37, 'nombre' => 'PROTESIS'],
            ['idPartesCuerpo'=>37, 'nombre' => 'OTRO'],
            //DEDO MEDIO IZQUIERDO
            ['idPartesCuerpo'=>28, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>28, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>28, 'nombre' => 'PERFORADA'],
            ['idPartesCuerpo'=>28, 'nombre' => 'PIERCING'],
            ['idPartesCuerpo'=>28, 'nombre' => 'CIRUGÍA'],
            ['idPartesCuerpo'=>28, 'nombre' => 'PROTESIS'],
            ['idPartesCuerpo'=>28, 'nombre' => 'OTRO'],

            //DEDO MENIQUE DERECHO
            ['idPartesCuerpo'=>35, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>35, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>35, 'nombre' => 'PERFORADA'],
            ['idPartesCuerpo'=>35, 'nombre' => 'PIERCING'],
            ['idPartesCuerpo'=>35, 'nombre' => 'CIRUGÍA'],
            ['idPartesCuerpo'=>35, 'nombre' => 'PROTESIS'],
            ['idPartesCuerpo'=>35, 'nombre' => 'OTRO'],
            //DEDO MENIQUE IZQUIERDO
            ['idPartesCuerpo'=>26, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>26, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>26, 'nombre' => 'PERFORADA'],
            ['idPartesCuerpo'=>26, 'nombre' => 'PIERCING'],
            ['idPartesCuerpo'=>26, 'nombre' => 'CIRUGÍA'],
            ['idPartesCuerpo'=>26, 'nombre' => 'PROTESIS'],
            ['idPartesCuerpo'=>26, 'nombre' => 'OTRO'],

            //DEDO PULGAR DERECHO
            ['idPartesCuerpo'=>39, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>39, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>39, 'nombre' => 'PERFORADA'],
            ['idPartesCuerpo'=>39, 'nombre' => 'PIERCING'],
            ['idPartesCuerpo'=>39, 'nombre' => 'CIRUGÍA'],
            ['idPartesCuerpo'=>39, 'nombre' => 'PROTESIS'],
            ['idPartesCuerpo'=>39, 'nombre' => 'OTRO'],
            //DEDO PULGAR IZQUIERDO
            ['idPartesCuerpo'=>25, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>25, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>25, 'nombre' => 'PERFORADA'],
            ['idPartesCuerpo'=>25, 'nombre' => 'PIERCING'],
            ['idPartesCuerpo'=>25, 'nombre' => 'CIRUGÍA'],
            ['idPartesCuerpo'=>25, 'nombre' => 'PROTESIS'],
            ['idPartesCuerpo'=>25, 'nombre' => 'OTRO'],


            //ESPALDA
            ['idPartesCuerpo'=>62, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>62, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>62, 'nombre' => 'PERFORADA'],
            ['idPartesCuerpo'=>62, 'nombre' => 'PIERCING'],
            ['idPartesCuerpo'=>62, 'nombre' => 'CIRUGÍA'],
            ['idPartesCuerpo'=>62, 'nombre' => 'OTRO'],

            //ABDOMEN
            ['idPartesCuerpo'=>40, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>40, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>40, 'nombre' => 'PERFORADA'],
            ['idPartesCuerpo'=>40, 'nombre' => 'PIERCING'],
            ['idPartesCuerpo'=>40, 'nombre' => 'CIRUGÍA'],
            ['idPartesCuerpo'=>40, 'nombre' => 'OTRO'],

            //CADERA
            ['idPartesCuerpo'=>41, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>41, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>41, 'nombre' => 'PERFORADA'],
            ['idPartesCuerpo'=>41, 'nombre' => 'PIERCING'],
            ['idPartesCuerpo'=>41, 'nombre' => 'CIRUGÍA'],
            ['idPartesCuerpo'=>41, 'nombre' => 'OTRO'],

            //NALGA IZQUIERDA
            ['idPartesCuerpo'=>65, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>65, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>65, 'nombre' => 'CIRUGÍA'],
            ['idPartesCuerpo'=>65, 'nombre' => 'OTRO'],

            

            //MUSLO IZQUIERDO
            ['idPartesCuerpo'=>45, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>45, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>45, 'nombre' => 'CIRUGÍA'],
            ['idPartesCuerpo'=>45, 'nombre' => 'OTRO'],

            //MUSLO DERECHO
            ['idPartesCuerpo'=>54, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>54, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>54, 'nombre' => 'CIRUGÍA'],
            ['idPartesCuerpo'=>54, 'nombre' => 'OTRO'],

            //OMBLIGO
            ['idPartesCuerpo'=>52, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>52, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>52, 'nombre' => 'PERFORADA'],
            ['idPartesCuerpo'=>52, 'nombre' => 'PIERCING'],
            ['idPartesCuerpo'=>52, 'nombre' => 'CIRUGÍA'],
            ['idPartesCuerpo'=>52, 'nombre' => 'OTRO'],

            //PIERNA IZQUIERDA
            ['idPartesCuerpo'=>44, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>44, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>44, 'nombre' => 'CIRUGÍA'],
            ['idPartesCuerpo'=>44, 'nombre' => 'OTRO'],

            //PIERNA DERECHA
            ['idPartesCuerpo'=>53, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>53, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>53, 'nombre' => 'CIRUGÍA'],
            ['idPartesCuerpo'=>53, 'nombre' => 'OTRO'],

            //RODILLA IZQUIERDA
            ['idPartesCuerpo'=>46, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>46, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>46, 'nombre' => 'CIRUGÍA'],
            ['idPartesCuerpo'=>46, 'nombre' => 'OTRO'],

            //RODILLA DERECHA
            ['idPartesCuerpo'=>55, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>55, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>55, 'nombre' => 'CIRUGÍA'],
            ['idPartesCuerpo'=>55, 'nombre' => 'OTRO'],

            //TALÓN IZQUIERDA
            ['idPartesCuerpo'=>51, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>51, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>51, 'nombre' => 'CIRUGÍA'],
            ['idPartesCuerpo'=>51, 'nombre' => 'OTRO'],

            //TALÓN DERECHA
            ['idPartesCuerpo'=>59, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>59, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>59, 'nombre' => 'CIRUGÍA'],
            ['idPartesCuerpo'=>59, 'nombre' => 'OTRO'],

            //PIE IZQUIERDA
            ['idPartesCuerpo'=>49, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>49, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>49, 'nombre' => 'CIRUGÍA'],
            ['idPartesCuerpo'=>49, 'nombre' => 'OTRO'],

            //PIE DERECHA
            ['idPartesCuerpo'=>58, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>58, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>58, 'nombre' => 'CIRUGÍA'],
            ['idPartesCuerpo'=>58, 'nombre' => 'OTRO'],

            //PECHO DERECHO
            ['idPartesCuerpo'=>19, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>19, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>19, 'nombre' => 'PERFORADA'],
            ['idPartesCuerpo'=>19, 'nombre' => 'PIERCING'],
            ['idPartesCuerpo'=>19, 'nombre' => 'CIRUGÍA'],
            ['idPartesCuerpo'=>19, 'nombre' => 'OTRO'],


            //PANTORRILLA IZQUIERDA
            ['idPartesCuerpo'=>48, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>48, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>48, 'nombre' => 'CIRUGÍA'],
            ['idPartesCuerpo'=>48, 'nombre' => 'OTRO'],

            //PANTORRILLA DERECHA
            ['idPartesCuerpo'=>57, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>57, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>57, 'nombre' => 'CIRUGÍA'],
            ['idPartesCuerpo'=>57, 'nombre' => 'OTRO'],

            //TOBILLO IZQUIERDA
            ['idPartesCuerpo'=>50, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>50, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>50, 'nombre' => 'CIRUGÍA'],
            ['idPartesCuerpo'=>50, 'nombre' => 'OTRO'],

            //TOBILLO DERECHA
            ['idPartesCuerpo'=>60, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>60, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>60, 'nombre' => 'CIRUGÍA'],
            ['idPartesCuerpo'=>60, 'nombre' => 'OTRO'],

            //UÑAS
            ['idPartesCuerpo'=>64, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>64, 'nombre' => 'UÑAS POSTIZAS'],
            ['idPartesCuerpo'=>64, 'nombre' => 'POLISH'],
            ['idPartesCuerpo'=>64, 'nombre' => 'OTRO'],

            //ESPINILLA IZQUIERDA
            ['idPartesCuerpo'=>47, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>47, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>47, 'nombre' => 'CIRUGÍA'],
            ['idPartesCuerpo'=>47, 'nombre' => 'OTRO'],

            //ESPINILLA DERECHA
            ['idPartesCuerpo'=>56, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>56, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>56, 'nombre' => 'CIRUGÍA'],
            ['idPartesCuerpo'=>56, 'nombre' => 'OTRO'],

            //FEMORAL IZQUIERDO
            ['idPartesCuerpo'=>66, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>66, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>66, 'nombre' => 'CIRUGÍA'],
            ['idPartesCuerpo'=>66, 'nombre' => 'OTRO'],

            //FEMORAL DERECHO
            ['idPartesCuerpo'=>67, 'nombre' => 'SIN INFORMACIÓN'],
            ['idPartesCuerpo'=>67, 'nombre' => 'TATUAJE'],
            ['idPartesCuerpo'=>67, 'nombre' => 'CIRUGÍA'],
            ['idPartesCuerpo'=>67, 'nombre' => 'OTRO'],

    ]);
    }
}
