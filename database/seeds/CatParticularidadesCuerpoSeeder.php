<?php

use Illuminate\Database\Seeder;

class CatParticularidadesCuerpoSeeder extends Seeder
{
    /**
     * Run the database seeds. ]);
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('cat_particularidades_cuerpo')->insert([
         	//CABELLO
            ['idPartesCuerpo'=>2, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>2, 'nombre' => 'CORTE TIPO ESCOLAR'],
            ['idPartesCuerpo'=>2, 'nombre' => 'CORTE TIPO MILITAR'],
            ['idPartesCuerpo'=>2, 'nombre' => 'CORTE TIPO MOHICANO'],
            ['idPartesCuerpo'=>2, 'nombre' => 'ALOPECIA FRONTAL'],
            ['idPartesCuerpo'=>2, 'nombre' => 'ALOPECIA CORONAL'],
            ['idPartesCuerpo'=>2, 'nombre' => 'ALOPECIA TONSURAL'],
            ['idPartesCuerpo'=>2, 'nombre' => 'ALOPECIA BILATERAL'],
            ['idPartesCuerpo'=>2, 'nombre' => 'ALOPECIA INCIPIENTE'],
            ['idPartesCuerpo'=>2, 'nombre' => 'OTRO'],
            
            //FRENTE
            ['idPartesCuerpo'=>7, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>7, 'nombre' => 'ACNÉ'],
            ['idPartesCuerpo'=>7, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>7, 'nombre' => 'MANCHAS'],
            ['idPartesCuerpo'=>7, 'nombre' => 'PECAS'],
            ['idPartesCuerpo'=>7, 'nombre' => 'VERRUGAS'],
            ['idPartesCuerpo'=>7, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>7, 'nombre' => 'DEFORMACIÓN'],
            ['idPartesCuerpo'=>7, 'nombre' => 'NEVO'],
            ['idPartesCuerpo'=>7, 'nombre' => 'QUEMADURA'],
            ['idPartesCuerpo'=>7, 'nombre' => 'OTRO'],

            //CEJA IZQUIERDA
            ['idPartesCuerpo'=>8, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>8, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>8, 'nombre' => 'OTRO'],


            //OJO IZQUIERDO
            ['idPartesCuerpo'=>9, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>9, 'nombre' => 'COLOR DIFERENTE'],
            ['idPartesCuerpo'=>9, 'nombre' => 'CATARATA'],
            ['idPartesCuerpo'=>9, 'nombre' => 'CIEGO'],
            ['idPartesCuerpo'=>9, 'nombre' => 'BIZCO'],
            ['idPartesCuerpo'=>9, 'nombre' => 'OJO DE VIDRIO'],
            ['idPartesCuerpo'=>9, 'nombre' => 'FALTA OJO'],
            ['idPartesCuerpo'=>9, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>9, 'nombre' => 'OTRO'],


            //OREJA IZQUIERDA
            ['idPartesCuerpo'=>11, 'nombre' => 'SIN INFORMACION'],           
            ['idPartesCuerpo'=>11, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>11, 'nombre' => 'DEFORMACIÓN'],
            ['idPartesCuerpo'=>11, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>11, 'nombre' => 'MANCHAS'],
            ['idPartesCuerpo'=>11, 'nombre' => 'NEVO'],
            ['idPartesCuerpo'=>11, 'nombre' => 'QUEMADURA'],
            ['idPartesCuerpo'=>11, 'nombre' => 'OTRO'],


            //PATILLAS 9
            

            //AMBAS MEJILLAS
            ['idPartesCuerpo'=>12, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>12, 'nombre' => 'ACNÉ'],
            ['idPartesCuerpo'=>12, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>12, 'nombre' => 'MANCHAS'],
            ['idPartesCuerpo'=>12, 'nombre' => 'PECAS'],
            ['idPartesCuerpo'=>12, 'nombre' => 'VERRUGAS'],
            ['idPartesCuerpo'=>12, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>12, 'nombre' => 'DEFORMACIÓN'],
            ['idPartesCuerpo'=>12, 'nombre' => 'NEVO'],
            ['idPartesCuerpo'=>12, 'nombre' => 'QUEMADURA'],
            ['idPartesCuerpo'=>12, 'nombre' => 'OTRO'],

            

            //NARIZ
            ['idPartesCuerpo'=>10, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>10, 'nombre' => 'ACNÉ'],
            ['idPartesCuerpo'=>10, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>10, 'nombre' => 'MANCHAS'],
            ['idPartesCuerpo'=>10, 'nombre' => 'PECAS'],
            ['idPartesCuerpo'=>10, 'nombre' => 'VERRUGAS'],
            ['idPartesCuerpo'=>10, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>10, 'nombre' => 'DEFORMACIÓN'],
            ['idPartesCuerpo'=>10, 'nombre' => 'NEVO'],
            ['idPartesCuerpo'=>10, 'nombre' => 'QUEMADURA'],
            ['idPartesCuerpo'=>10, 'nombre' => 'DESVIADA'],
            ['idPartesCuerpo'=>10, 'nombre' => 'OTRO'],


            //BIGOTE 12
           

            //BOCA
            ['idPartesCuerpo'=>13, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>13, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>13, 'nombre' => 'DEFORMACIÓN'],
            ['idPartesCuerpo'=>13, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>13, 'nombre' => 'QUEMADURA'],
            ['idPartesCuerpo'=>13, 'nombre' => 'OTRO'],

            //LABIO INFERIOR
            ['idPartesCuerpo'=>14, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>14, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>14, 'nombre' => 'DEFORMACIÓN'],
            ['idPartesCuerpo'=>14, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>14, 'nombre' => 'QUEMADURA'],
            ['idPartesCuerpo'=>14, 'nombre' => 'OTRO'],

            

            //MENTÓN
            ['idPartesCuerpo'=>15, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>15, 'nombre' => 'ACNÉ'],
            ['idPartesCuerpo'=>15, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>15, 'nombre' => 'MANCHAS'],
            ['idPartesCuerpo'=>15, 'nombre' => 'PECAS'],
            ['idPartesCuerpo'=>15, 'nombre' => 'VERRUGAS'],
            ['idPartesCuerpo'=>15, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>15, 'nombre' => 'DEFORMACIÓN'],
            ['idPartesCuerpo'=>15, 'nombre' => 'NEVO'],
            ['idPartesCuerpo'=>15, 'nombre' => 'QUEMADURA'],
            ['idPartesCuerpo'=>15, 'nombre' => 'OTRO'],

            //BARBA 16
            

            //CUELLO
            ['idPartesCuerpo'=>16, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>16, 'nombre' => 'ACNÉ'],
            ['idPartesCuerpo'=>16, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>16, 'nombre' => 'MANCHAS'],
            ['idPartesCuerpo'=>16, 'nombre' => 'PECAS'],
            ['idPartesCuerpo'=>16, 'nombre' => 'VERRUGAS'],
            ['idPartesCuerpo'=>16, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>16, 'nombre' => 'NEVO'],
            ['idPartesCuerpo'=>16, 'nombre' => 'QUEMADURA'],
            ['idPartesCuerpo'=>16, 'nombre' => 'OTRO'],

            //NUCA
            ['idPartesCuerpo'=>61, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>61, 'nombre' => 'ACNÉ'],
            ['idPartesCuerpo'=>61, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>61, 'nombre' => 'MANCHAS'],
            ['idPartesCuerpo'=>61, 'nombre' => 'PECAS'],
            ['idPartesCuerpo'=>61, 'nombre' => 'VERRUGAS'],
            ['idPartesCuerpo'=>61, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>61, 'nombre' => 'NEVO'],
            ['idPartesCuerpo'=>61, 'nombre' => 'QUEMADURA'],
            ['idPartesCuerpo'=>61, 'nombre' => 'OTRO'],

            //HOMBRO IZQUIERDO
            ['idPartesCuerpo'=>18, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>18, 'nombre' => 'ACNÉ'],
            ['idPartesCuerpo'=>18, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>18, 'nombre' => 'MANCHAS'],
            ['idPartesCuerpo'=>18, 'nombre' => 'PECAS'],
            ['idPartesCuerpo'=>18, 'nombre' => 'VERRUGAS'],
            ['idPartesCuerpo'=>18, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>18, 'nombre' => 'NEVO'],
            ['idPartesCuerpo'=>18, 'nombre' => 'QUEMADURA'],
            ['idPartesCuerpo'=>18, 'nombre' => 'OTRO'],

            //HOMBRO DERECHO
            ['idPartesCuerpo'=>17, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>17, 'nombre' => 'ACNÉ'],
            ['idPartesCuerpo'=>17, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>17, 'nombre' => 'MANCHAS'],
            ['idPartesCuerpo'=>17, 'nombre' => 'PECAS'],
            ['idPartesCuerpo'=>17, 'nombre' => 'VERRUGAS'],
            ['idPartesCuerpo'=>17, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>17, 'nombre' => 'NEVO'],
            ['idPartesCuerpo'=>17, 'nombre' => 'QUEMADURA'],
            ['idPartesCuerpo'=>17, 'nombre' => 'OTRO'],

            //BRAZO IZQUIERDO
            ['idPartesCuerpo'=>20, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>20, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>20, 'nombre' => 'MANCHAS'],
            ['idPartesCuerpo'=>20, 'nombre' => 'PECAS'],
            ['idPartesCuerpo'=>20, 'nombre' => 'VERRUGAS'],
            ['idPartesCuerpo'=>20, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>20, 'nombre' => 'NEVO'],
            ['idPartesCuerpo'=>20, 'nombre' => 'QUEMADURA'],
            ['idPartesCuerpo'=>20, 'nombre' => 'AMPUTACIÓN'],
            ['idPartesCuerpo'=>20, 'nombre' => 'OTRO'],

            //BRAZO DERECHO
            ['idPartesCuerpo'=>30, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>30, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>30, 'nombre' => 'MANCHAS'],
            ['idPartesCuerpo'=>30, 'nombre' => 'PECAS'],
            ['idPartesCuerpo'=>30, 'nombre' => 'VERRUGAS'],
            ['idPartesCuerpo'=>30, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>30, 'nombre' => 'NEVO'],
            ['idPartesCuerpo'=>30, 'nombre' => 'QUEMADURA'],
            ['idPartesCuerpo'=>30, 'nombre' => 'AMPUTACIÓN'],
            ['idPartesCuerpo'=>30, 'nombre' => 'OTRO'],

            //ANTEBRAZO IZQUIERDO
            ['idPartesCuerpo'=>21, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>21, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>21, 'nombre' => 'MANCHAS'],
            ['idPartesCuerpo'=>21, 'nombre' => 'PECAS'],
            ['idPartesCuerpo'=>21, 'nombre' => 'VERRUGAS'],
            ['idPartesCuerpo'=>21, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>21, 'nombre' => 'NEVO'],
            ['idPartesCuerpo'=>21, 'nombre' => 'QUEMADURA'],
            ['idPartesCuerpo'=>21, 'nombre' => 'AMPUTACIÓN'],
            ['idPartesCuerpo'=>21, 'nombre' => 'OTRO'],

            //ANTEBRAZO DERECHO
            ['idPartesCuerpo'=>31, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>31, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>31, 'nombre' => 'MANCHAS'],
            ['idPartesCuerpo'=>31, 'nombre' => 'PECAS'],
            ['idPartesCuerpo'=>31, 'nombre' => 'VERRUGAS'],
            ['idPartesCuerpo'=>31, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>31, 'nombre' => 'NEVO'],
            ['idPartesCuerpo'=>31, 'nombre' => 'QUEMADURA'],
            ['idPartesCuerpo'=>31, 'nombre' => 'AMPUTACIÓN'],
            ['idPartesCuerpo'=>31, 'nombre' => 'OTRO'],

            //CODO IZQUIERDO
            ['idPartesCuerpo'=>22, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>22, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>22, 'nombre' => 'MANCHAS'],
            ['idPartesCuerpo'=>22, 'nombre' => 'PECAS'],
            ['idPartesCuerpo'=>22, 'nombre' => 'VERRUGAS'],
            ['idPartesCuerpo'=>22, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>22, 'nombre' => 'NEVO'],
            ['idPartesCuerpo'=>22, 'nombre' => 'QUEMADURA'],
            ['idPartesCuerpo'=>22, 'nombre' => 'OTRO'],

            //CODO DERECHO
            ['idPartesCuerpo'=>32, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>32, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>32, 'nombre' => 'MANCHAS'],
            ['idPartesCuerpo'=>32, 'nombre' => 'PECAS'],
            ['idPartesCuerpo'=>32, 'nombre' => 'VERRUGAS'],
            ['idPartesCuerpo'=>32, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>32, 'nombre' => 'NEVO'],
            ['idPartesCuerpo'=>32, 'nombre' => 'QUEMADURA'],
            ['idPartesCuerpo'=>32, 'nombre' => 'OTRO'],

            //MUÑECA IZQUIERDO
            ['idPartesCuerpo'=>43, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>43, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>43, 'nombre' => 'MANCHAS'],
            ['idPartesCuerpo'=>43, 'nombre' => 'PECAS'],
            ['idPartesCuerpo'=>43, 'nombre' => 'VERRUGAS'],
            ['idPartesCuerpo'=>43, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>43, 'nombre' => 'NEVO'],
            ['idPartesCuerpo'=>43, 'nombre' => 'QUEMADURA'],
            ['idPartesCuerpo'=>43, 'nombre' => 'OTRO'],

            //MUÑECA DERECHA
            ['idPartesCuerpo'=>42, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>42, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>42, 'nombre' => 'MANCHAS'],
            ['idPartesCuerpo'=>42, 'nombre' => 'PECAS'],
            ['idPartesCuerpo'=>42, 'nombre' => 'VERRUGAS'],
            ['idPartesCuerpo'=>42, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>42, 'nombre' => 'NEVO'],
            ['idPartesCuerpo'=>42, 'nombre' => 'QUEMADURA'],
            ['idPartesCuerpo'=>42, 'nombre' => 'OTRO'],

            //PALMA IZQUIERDA
            ['idPartesCuerpo'=>24, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>24, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>24, 'nombre' => 'MANCHAS'],
            ['idPartesCuerpo'=>24, 'nombre' => 'VERRUGAS'],
            ['idPartesCuerpo'=>24, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>24, 'nombre' => 'NEVO'],
            ['idPartesCuerpo'=>24, 'nombre' => 'QUEMADURA'],
            ['idPartesCuerpo'=>24, 'nombre' => 'OTRO'],

            //PALMA DERECHA
            ['idPartesCuerpo'=>34, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>34, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>34, 'nombre' => 'MANCHAS'],
            ['idPartesCuerpo'=>34, 'nombre' => 'VERRUGAS'],
            ['idPartesCuerpo'=>34, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>34, 'nombre' => 'NEVO'],
            ['idPartesCuerpo'=>34, 'nombre' => 'QUEMADURA'],
            ['idPartesCuerpo'=>34, 'nombre' => 'OTRO'],

            //MANO IZQUIERDA
            ['idPartesCuerpo'=>23, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>23, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>23, 'nombre' => 'MANCHAS'],
            ['idPartesCuerpo'=>23, 'nombre' => 'VERRUGAS'],
            ['idPartesCuerpo'=>23, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>23, 'nombre' => 'NEVO'],
            ['idPartesCuerpo'=>23, 'nombre' => 'QUEMADURA'],
            ['idPartesCuerpo'=>23, 'nombre' => 'AMPUTACIÓN'],
            ['idPartesCuerpo'=>23, 'nombre' => 'DEFORMACIÓN'],
            ['idPartesCuerpo'=>23, 'nombre' => 'CALLOSIDAD'],
            ['idPartesCuerpo'=>23, 'nombre' => 'OTRO'],

            //MANO DERECHA
            ['idPartesCuerpo'=>33, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>33, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>33, 'nombre' => 'MANCHAS'],
            ['idPartesCuerpo'=>33, 'nombre' => 'VERRUGAS'],
            ['idPartesCuerpo'=>33, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>33, 'nombre' => 'NEVO'],
            ['idPartesCuerpo'=>33, 'nombre' => 'QUEMADURA'],
            ['idPartesCuerpo'=>33, 'nombre' => 'AMPUTACIÓN'],
            ['idPartesCuerpo'=>33, 'nombre' => 'DEFORMACIÓN'],
            ['idPartesCuerpo'=>33, 'nombre' => 'CALLOSIDAD'],
            ['idPartesCuerpo'=>33, 'nombre' => 'OTRO'],


            //DEDO ANULAR IZQUIERDO
            ['idPartesCuerpo'=>27, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>27, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>27, 'nombre' => 'MANCHAS'],
            ['idPartesCuerpo'=>27, 'nombre' => 'VERRUGAS'],
            ['idPartesCuerpo'=>27, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>27, 'nombre' => 'NEVO'],
            ['idPartesCuerpo'=>27, 'nombre' => 'QUEMADURA'],
            ['idPartesCuerpo'=>27, 'nombre' => 'AMPUTACIÓN'],
            ['idPartesCuerpo'=>27, 'nombre' => 'DEFORMACIÓN'],
            ['idPartesCuerpo'=>27, 'nombre' => 'OTRO'],
            
            //DEDO ANULAR DERECHO
            ['idPartesCuerpo'=>36, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>36, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>36, 'nombre' => 'MANCHAS'],
            ['idPartesCuerpo'=>36, 'nombre' => 'VERRUGAS'],
            ['idPartesCuerpo'=>36, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>36, 'nombre' => 'NEVO'],
            ['idPartesCuerpo'=>36, 'nombre' => 'QUEMADURA'],
            ['idPartesCuerpo'=>36, 'nombre' => 'AMPUTACIÓN'],
            ['idPartesCuerpo'=>36, 'nombre' => 'DEFORMACIÓN'],
            ['idPartesCuerpo'=>36, 'nombre' => 'OTRO'],

            //DEDO ÍNDICE IZQUIERDO
            ['idPartesCuerpo'=>29, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>29, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>29, 'nombre' => 'MANCHAS'],
            ['idPartesCuerpo'=>29, 'nombre' => 'VERRUGAS'],
            ['idPartesCuerpo'=>29, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>29, 'nombre' => 'NEVO'],
            ['idPartesCuerpo'=>29, 'nombre' => 'QUEMADURA'],
            ['idPartesCuerpo'=>29, 'nombre' => 'AMPUTACIÓN'],
            ['idPartesCuerpo'=>29, 'nombre' => 'DEFORMACIÓN'],
            ['idPartesCuerpo'=>29, 'nombre' => 'OTRO'],

            //DEDO ÍNDICE DERECHO
            ['idPartesCuerpo'=>38, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>38, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>38, 'nombre' => 'MANCHAS'],
            ['idPartesCuerpo'=>38, 'nombre' => 'VERRUGAS'],
            ['idPartesCuerpo'=>38, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>38, 'nombre' => 'NEVO'],
            ['idPartesCuerpo'=>38, 'nombre' => 'QUEMADURA'],
            ['idPartesCuerpo'=>38, 'nombre' => 'AMPUTACIÓN'],
            ['idPartesCuerpo'=>38, 'nombre' => 'DEFORMACIÓN'],
            ['idPartesCuerpo'=>38, 'nombre' => 'OTRO'],

            //DEDO MEDIO IZQUIERDO
            ['idPartesCuerpo'=>28, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>28, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>28, 'nombre' => 'MANCHAS'],
            ['idPartesCuerpo'=>28, 'nombre' => 'VERRUGAS'],
            ['idPartesCuerpo'=>28, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>28, 'nombre' => 'NEVO'],
            ['idPartesCuerpo'=>28, 'nombre' => 'QUEMADURA'],
            ['idPartesCuerpo'=>28, 'nombre' => 'AMPUTACIÓN'],
            ['idPartesCuerpo'=>28, 'nombre' => 'DEFORMACIÓN'],
            ['idPartesCuerpo'=>28, 'nombre' => 'OTRO'],

            //DEDO MEDIO DERECHO
            ['idPartesCuerpo'=>37, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>37, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>37, 'nombre' => 'MANCHAS'],
            ['idPartesCuerpo'=>37, 'nombre' => 'VERRUGAS'],
            ['idPartesCuerpo'=>37, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>37, 'nombre' => 'NEVO'],
            ['idPartesCuerpo'=>37, 'nombre' => 'QUEMADURA'],
            ['idPartesCuerpo'=>37, 'nombre' => 'AMPUTACIÓN'],
            ['idPartesCuerpo'=>37, 'nombre' => 'DEFORMACIÓN'],
            ['idPartesCuerpo'=>37, 'nombre' => 'OTRO'],

            //DEDO MENIQUE IZQUIERDO
            ['idPartesCuerpo'=>26, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>26, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>26, 'nombre' => 'MANCHAS'],
            ['idPartesCuerpo'=>26, 'nombre' => 'VERRUGAS'],
            ['idPartesCuerpo'=>26, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>26, 'nombre' => 'NEVO'],
            ['idPartesCuerpo'=>26, 'nombre' => 'QUEMADURA'],
            ['idPartesCuerpo'=>26, 'nombre' => 'AMPUTACIÓN'],
            ['idPartesCuerpo'=>26, 'nombre' => 'DEFORMACIÓN'],
            ['idPartesCuerpo'=>26, 'nombre' => 'OTRO'],

            //DEDO MENIQUE DERECHO
            ['idPartesCuerpo'=>37, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>37, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>37, 'nombre' => 'MANCHAS'],
            ['idPartesCuerpo'=>37, 'nombre' => 'VERRUGAS'],
            ['idPartesCuerpo'=>37, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>37, 'nombre' => 'NEVO'],
            ['idPartesCuerpo'=>37, 'nombre' => 'QUEMADURA'],
            ['idPartesCuerpo'=>37, 'nombre' => 'AMPUTACIÓN'],
            ['idPartesCuerpo'=>37, 'nombre' => 'DEFORMACIÓN'],
            ['idPartesCuerpo'=>37, 'nombre' => 'OTRO'],

            //DEDO PULGAR IZQUIERDO
            ['idPartesCuerpo'=>25, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>25, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>25, 'nombre' => 'MANCHAS'],
            ['idPartesCuerpo'=>25, 'nombre' => 'VERRUGAS'],
            ['idPartesCuerpo'=>25, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>25, 'nombre' => 'NEVO'],
            ['idPartesCuerpo'=>25, 'nombre' => 'QUEMADURA'],
            ['idPartesCuerpo'=>25, 'nombre' => 'AMPUTACIÓN'],
            ['idPartesCuerpo'=>25, 'nombre' => 'DEFORMACIÓN'],
            ['idPartesCuerpo'=>25, 'nombre' => 'OTRO'],

            //DEDO PULGAR DERECHO
            ['idPartesCuerpo'=>39, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>39, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>39, 'nombre' => 'MANCHAS'],
            ['idPartesCuerpo'=>39, 'nombre' => 'VERRUGAS'],
            ['idPartesCuerpo'=>39, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>39, 'nombre' => 'NEVO'],
            ['idPartesCuerpo'=>39, 'nombre' => 'QUEMADURA'],
            ['idPartesCuerpo'=>39, 'nombre' => 'AMPUTACIÓN'],
            ['idPartesCuerpo'=>39, 'nombre' => 'DEFORMACIÓN'],
            ['idPartesCuerpo'=>39, 'nombre' => 'OTRO'],

            //ESPALDA
            ['idPartesCuerpo'=>62, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>62, 'nombre' => 'ACNÉ'],
            ['idPartesCuerpo'=>62, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>62, 'nombre' => 'MANCHAS'],
            ['idPartesCuerpo'=>62, 'nombre' => 'VERRUGAS'],
            ['idPartesCuerpo'=>62, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>62, 'nombre' => 'NEVO'],
            ['idPartesCuerpo'=>62, 'nombre' => 'QUEMADURA'],
            ['idPartesCuerpo'=>62, 'nombre' => 'DEFORMACIÓN'],
            ['idPartesCuerpo'=>62, 'nombre' => 'OTRO'],

            //ABDOMEN
            ['idPartesCuerpo'=>40, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>40, 'nombre' => 'ACNÉ'],
            ['idPartesCuerpo'=>40, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>40, 'nombre' => 'MANCHAS'],
            ['idPartesCuerpo'=>40, 'nombre' => 'VERRUGAS'],
            ['idPartesCuerpo'=>40, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>40, 'nombre' => 'NEVO'],
            ['idPartesCuerpo'=>40, 'nombre' => 'QUEMADURA'],
            ['idPartesCuerpo'=>40, 'nombre' => 'OTRO'],
            
            //CADERA
            ['idPartesCuerpo'=>41, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>41, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>41, 'nombre' => 'MANCHAS'],
            ['idPartesCuerpo'=>41, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>41, 'nombre' => 'NEVO'],
            ['idPartesCuerpo'=>41, 'nombre' => 'QUEMADURA'],
            ['idPartesCuerpo'=>41, 'nombre' => 'DEFORMACIÓN'],
            ['idPartesCuerpo'=>41, 'nombre' => 'OTRO'],

            

            //NALGA DERECHA
            ['idPartesCuerpo'=>65, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>65, 'nombre' => 'ACNÉ'],
            ['idPartesCuerpo'=>65, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>65, 'nombre' => 'MANCHAS'],
            ['idPartesCuerpo'=>65, 'nombre' => 'VERRUGAS'],
            ['idPartesCuerpo'=>65, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>65, 'nombre' => 'QUEMADURA'],
            ['idPartesCuerpo'=>65, 'nombre' => 'OTRO'],

            //MUSLO IZQUERDO
            ['idPartesCuerpo'=>45, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>45, 'nombre' => 'ACNÉ'],
            ['idPartesCuerpo'=>45, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>45, 'nombre' => 'MANCHAS'],
            ['idPartesCuerpo'=>45, 'nombre' => 'VERRUGAS'],
            ['idPartesCuerpo'=>45, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>45, 'nombre' => 'NEVO'],
            ['idPartesCuerpo'=>45, 'nombre' => 'QUEMADURA'],
            ['idPartesCuerpo'=>45, 'nombre' => 'OTRO'],

            //MUSLO DERECHO
            ['idPartesCuerpo'=>54, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>54, 'nombre' => 'ACNÉ'],
            ['idPartesCuerpo'=>54, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>54, 'nombre' => 'MANCHAS'],
            ['idPartesCuerpo'=>54, 'nombre' => 'VERRUGAS'],
            ['idPartesCuerpo'=>54, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>54, 'nombre' => 'NEVO'],
            ['idPartesCuerpo'=>54, 'nombre' => 'QUEMADURA'],
            ['idPartesCuerpo'=>54, 'nombre' => 'OTRO'],

            //OMBLIGO
            ['idPartesCuerpo'=>52, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>52, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>52, 'nombre' => 'MANCHAS'],
            ['idPartesCuerpo'=>52, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>52, 'nombre' => 'QUEMADURA'],
            ['idPartesCuerpo'=>52, 'nombre' => 'OTRO'],


            //PIERNA IZQUIERDA
            ['idPartesCuerpo'=>44, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>44, 'nombre' => 'ACNÉ'],
            ['idPartesCuerpo'=>44, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>44, 'nombre' => 'MANCHAS'],
            ['idPartesCuerpo'=>44, 'nombre' => 'VERRUGAS'],
            ['idPartesCuerpo'=>44, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>44, 'nombre' => 'NEVO'],
            ['idPartesCuerpo'=>44, 'nombre' => 'QUEMADURA'],
            ['idPartesCuerpo'=>44, 'nombre' => 'OTRO'],

            //PIERNA DERECHA
            ['idPartesCuerpo'=>53, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>53, 'nombre' => 'ACNÉ'],
            ['idPartesCuerpo'=>53, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>53, 'nombre' => 'MANCHAS'],
            ['idPartesCuerpo'=>53, 'nombre' => 'VERRUGAS'],
            ['idPartesCuerpo'=>53, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>53, 'nombre' => 'NEVO'],
            ['idPartesCuerpo'=>53, 'nombre' => 'QUEMADURA'],
            ['idPartesCuerpo'=>53, 'nombre' => 'OTRO'],

            //RODILLA IZQUIERDA
            ['idPartesCuerpo'=>46, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>46, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>46, 'nombre' => 'MANCHAS'],
            ['idPartesCuerpo'=>46, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>46, 'nombre' => 'QUEMADURA'],
            ['idPartesCuerpo'=>46, 'nombre' => 'DEFORMACIÓN'],
            ['idPartesCuerpo'=>46, 'nombre' => 'OTRO'],

            //RODILLA DERECHA
            ['idPartesCuerpo'=>55, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>55, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>55, 'nombre' => 'MANCHAS'],
            ['idPartesCuerpo'=>55, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>55, 'nombre' => 'QUEMADURA'],
            ['idPartesCuerpo'=>55, 'nombre' => 'DEFORMACIÓN'],
            ['idPartesCuerpo'=>55, 'nombre' => 'OTRO'],


            //TALÓN IZQUIERDO
            ['idPartesCuerpo'=>51, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>51, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>51, 'nombre' => 'MANCHAS'],
            ['idPartesCuerpo'=>51, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>51, 'nombre' => 'QUEMADURA'],
            ['idPartesCuerpo'=>51, 'nombre' => 'CALLOSIDAD'],
            ['idPartesCuerpo'=>51, 'nombre' => 'OTRO'],

            //TALÓN DERECHO
            ['idPartesCuerpo'=>59, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>59, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>59, 'nombre' => 'MANCHAS'],
            ['idPartesCuerpo'=>59, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>59, 'nombre' => 'QUEMADURA'],
            ['idPartesCuerpo'=>59, 'nombre' => 'CALLOSIDAD'],
            ['idPartesCuerpo'=>59, 'nombre' => 'OTRO'],

            //PIE IZQUIERDO
            ['idPartesCuerpo'=>49, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>49, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>49, 'nombre' => 'MANCHAS'],
            ['idPartesCuerpo'=>49, 'nombre' => 'VERRUGAS'],
            ['idPartesCuerpo'=>49, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>49, 'nombre' => 'NEVO'],
            ['idPartesCuerpo'=>49, 'nombre' => 'QUEMADURA'],
            ['idPartesCuerpo'=>49, 'nombre' => 'AMPUTACIÓN'],
            ['idPartesCuerpo'=>49, 'nombre' => 'DEFORMACIÓN'],
            ['idPartesCuerpo'=>49, 'nombre' => 'CALLOSIDAD'],
            ['idPartesCuerpo'=>49, 'nombre' => 'OTRO'],

            //PIE DERECHO
            ['idPartesCuerpo'=>58, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>58, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>58, 'nombre' => 'MANCHAS'],
            ['idPartesCuerpo'=>58, 'nombre' => 'VERRUGAS'],
            ['idPartesCuerpo'=>58, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>58, 'nombre' => 'NEVO'],
            ['idPartesCuerpo'=>58, 'nombre' => 'QUEMADURA'],
            ['idPartesCuerpo'=>58, 'nombre' => 'AMPUTACIÓN'],
            ['idPartesCuerpo'=>58, 'nombre' => 'DEFORMACIÓN'],
            ['idPartesCuerpo'=>58, 'nombre' => 'CALLOSIDAD'],
            ['idPartesCuerpo'=>58, 'nombre' => 'OTRO'],

            //PECHO DERECHO
            ['idPartesCuerpo'=>19, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>19, 'nombre' => 'ACNÉ'],
            ['idPartesCuerpo'=>19, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>19, 'nombre' => 'MANCHAS'],
            ['idPartesCuerpo'=>19, 'nombre' => 'VERRUGAS'],
            ['idPartesCuerpo'=>19, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>19, 'nombre' => 'NEVO'],
            ['idPartesCuerpo'=>19, 'nombre' => 'QUEMADURA'],
            ['idPartesCuerpo'=>19, 'nombre' => 'OTRO'],
            

            //PANTORRILLA IZQUIERDA
            ['idPartesCuerpo'=>48, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>48, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>48, 'nombre' => 'MANCHAS'],
            ['idPartesCuerpo'=>48, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>48, 'nombre' => 'QUEMADURA'],
            ['idPartesCuerpo'=>48, 'nombre' => 'OTRO'],

            //PANTORRILLA DERECHA
            ['idPartesCuerpo'=>57, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>57, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>57, 'nombre' => 'MANCHAS'],
            ['idPartesCuerpo'=>57, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>57, 'nombre' => 'QUEMADURA'],
            ['idPartesCuerpo'=>57, 'nombre' => 'OTRO'],

            //TOBILLO IZQUIERDO
            ['idPartesCuerpo'=>50, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>50, 'nombre' => 'DEFORMACIÓN'],
            ['idPartesCuerpo'=>50, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>50, 'nombre' => 'MANCHAS'],
            ['idPartesCuerpo'=>50, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>50, 'nombre' => 'QUEMADURA'],
            ['idPartesCuerpo'=>50, 'nombre' => 'OTRO'],

            //TOBILLO DERECHO
            ['idPartesCuerpo'=>60, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>60, 'nombre' => 'DEFORMACIÓN'],
            ['idPartesCuerpo'=>60, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>60, 'nombre' => 'MANCHAS'],
            ['idPartesCuerpo'=>60, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>60, 'nombre' => 'QUEMADURA'],
            ['idPartesCuerpo'=>60, 'nombre' => 'OTRO'],

            //UÑAS
            ['idPartesCuerpo'=>64, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>64, 'nombre' => 'MANCHAS'],
            ['idPartesCuerpo'=>64, 'nombre' => 'ENCARNADAS'],
            ['idPartesCuerpo'=>64, 'nombre' => 'LARGAS'],
            ['idPartesCuerpo'=>64, 'nombre' => 'CORTAS'],
            ['idPartesCuerpo'=>64, 'nombre' => 'OTRO'],

            //ESPINILLA IZQUIERDA
            ['idPartesCuerpo'=>47, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>47, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>47, 'nombre' => 'MANCHAS'],
            ['idPartesCuerpo'=>47, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>47, 'nombre' => 'QUEMADURA'],
            ['idPartesCuerpo'=>47, 'nombre' => 'OTRO'],

            //ESPINILLA DERECHA
            ['idPartesCuerpo'=>56, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>56, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>56, 'nombre' => 'MANCHAS'],
            ['idPartesCuerpo'=>56, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>56, 'nombre' => 'QUEMADURA'],
            ['idPartesCuerpo'=>56, 'nombre' => 'OTRO'],

            //FEMORAL IZQUERDO
            ['idPartesCuerpo'=>66, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>66, 'nombre' => 'ACNÉ'],
            ['idPartesCuerpo'=>66, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>66, 'nombre' => 'MANCHAS'],
            ['idPartesCuerpo'=>66, 'nombre' => 'VERRUGAS'],
            ['idPartesCuerpo'=>66, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>66, 'nombre' => 'NEVO'],
            ['idPartesCuerpo'=>66, 'nombre' => 'QUEMADURA'],
            ['idPartesCuerpo'=>66, 'nombre' => 'OTRO'],

            //FEMORAL DERECHO
            ['idPartesCuerpo'=>67, 'nombre' => 'SIN INFORMACION'],
            ['idPartesCuerpo'=>67, 'nombre' => 'ACNÉ'],
            ['idPartesCuerpo'=>67, 'nombre' => 'CICATRIZ'],
            ['idPartesCuerpo'=>67, 'nombre' => 'MANCHAS'],
            ['idPartesCuerpo'=>67, 'nombre' => 'VERRUGAS'],
            ['idPartesCuerpo'=>67, 'nombre' => 'LUNARES'],
            ['idPartesCuerpo'=>67, 'nombre' => 'NEVO'],
            ['idPartesCuerpo'=>67, 'nombre' => 'QUEMADURA'],
            ['idPartesCuerpo'=>67, 'nombre' => 'OTRO'],

    ]);
  }
}
