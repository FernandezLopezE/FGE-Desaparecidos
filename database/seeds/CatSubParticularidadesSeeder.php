<?php

use Illuminate\Database\Seeder;

class CatSubParticularidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('cat_sub_particularidades')->insert([
         	//CABELLO
            ['idParticularidadesCuerpo'=>1, 'nombre' => 'LACIO'],
            ['idParticularidadesCuerpo'=>1, 'nombre' => 'SEMIONDULADO'],
            ['idParticularidadesCuerpo'=>1, 'nombre' => 'ONDULADO'],
            ['idParticularidadesCuerpo'=>1, 'nombre' => 'RIZADO'],
            ['idParticularidadesCuerpo'=>1, 'nombre' => 'CRESPO'],
            ['idParticularidadesCuerpo'=>1, 'nombre' => 'CALVO'],
            ['idParticularidadesCuerpo'=>1, 'nombre' => 'ALOPECIA FRONTAL'],
            ['idParticularidadesCuerpo'=>1, 'nombre' => 'ALOPECIA CORONAL'],
            ['idParticularidadesCuerpo'=>1, 'nombre' => 'ALOPECIA TONSURAL'],
            ['idParticularidadesCuerpo'=>1, 'nombre' => 'ALOPECIA BILATERAL'],
            ['idParticularidadesCuerpo'=>1, 'nombre' => 'ALOPECIA INCIPIENTE'],
            ['idParticularidadesCuerpo'=>1, 'nombre' => 'OTRO'],
            
            //FRENTE
            ['idParticularidadesCuerpo'=>2, 'nombre' => 'ACNÉ'],
            ['idParticularidadesCuerpo'=>2, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>2, 'nombre' => 'MANCHAS'],
            ['idParticularidadesCuerpo'=>2, 'nombre' => 'PECAS'],
            ['idParticularidadesCuerpo'=>2, 'nombre' => 'VERRUGAS'],
            ['idParticularidadesCuerpo'=>2, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>2, 'nombre' => 'DEFORMACIÓN'],
            ['idParticularidadesCuerpo'=>2, 'nombre' => 'NEVO'],
            ['idParticularidadesCuerpo'=>2, 'nombre' => 'QUEMADURA'],

            //CEJA IZQUIERDA
            ['idParticularidadesCuerpo'=>3, 'nombre' => 'POBLADA'],
            ['idParticularidadesCuerpo'=>3, 'nombre' => 'REGULAR'],
            ['idParticularidadesCuerpo'=>3, 'nombre' => 'ESCASA'],
            ['idParticularidadesCuerpo'=>3, 'nombre' => 'DEPILADA'],
            ['idParticularidadesCuerpo'=>3, 'nombre' => 'RASURADA'],
            ['idParticularidadesCuerpo'=>3, 'nombre' => 'SIN CEJA'],
            ['idParticularidadesCuerpo'=>3, 'nombre' => 'CICATRIZ'],

            //CEJA DERECHA
            ['idParticularidadesCuerpo'=>4, 'nombre' => 'POBLADA'],
            ['idParticularidadesCuerpo'=>4, 'nombre' => 'REGULAR'],
            ['idParticularidadesCuerpo'=>4, 'nombre' => 'ESCASA'],
            ['idParticularidadesCuerpo'=>4, 'nombre' => 'DEPILADA'],
            ['idParticularidadesCuerpo'=>4, 'nombre' => 'RASURADA'],
            ['idParticularidadesCuerpo'=>4, 'nombre' => 'SIN CEJA'],
            ['idParticularidadesCuerpo'=>4, 'nombre' => 'CICATRIZ'],

            //OJO IZQUIERDO
         	['idParticularidadesCuerpo'=>5, 'nombre' => 'COLOR DIFERENTE'],
            ['idParticularidadesCuerpo'=>5, 'nombre' => 'CATARATA'],
            ['idParticularidadesCuerpo'=>5, 'nombre' => 'CIEGO'],
            ['idParticularidadesCuerpo'=>5, 'nombre' => 'BIZCO'],
            ['idParticularidadesCuerpo'=>5, 'nombre' => 'OJO DE VIDRIO'],
            ['idParticularidadesCuerpo'=>5, 'nombre' => 'LENTES DE CONTACTO'],
            ['idParticularidadesCuerpo'=>5, 'nombre' => 'ANTEOJOS/GAFAS'],
            ['idParticularidadesCuerpo'=>5, 'nombre' => 'FALTA OJO'],
            ['idParticularidadesCuerpo'=>5, 'nombre' => 'LUNARES'],

            //OJO DERECHO
            ['idParticularidadesCuerpo'=>6, 'nombre' => 'COLOR DIFERENTE'],
            ['idParticularidadesCuerpo'=>6, 'nombre' => 'CATARATA'],
            ['idParticularidadesCuerpo'=>6, 'nombre' => 'CIEGO'],
            ['idParticularidadesCuerpo'=>6, 'nombre' => 'BIZCO'],
            ['idParticularidadesCuerpo'=>6, 'nombre' => 'OJO DE VIDRIO'],
            ['idParticularidadesCuerpo'=>6, 'nombre' => 'LENTES DE CONTACTO'],
            ['idParticularidadesCuerpo'=>6, 'nombre' => 'ANTEOJOS/GAFAS'],
            ['idParticularidadesCuerpo'=>6, 'nombre' => 'FALTA OJO'],
            ['idParticularidadesCuerpo'=>6, 'nombre' => 'LUNARES'],

            //OREJA IZQUIERDA
            ['idParticularidadesCuerpo'=>7, 'nombre' => 'COMPLETA'],
            ['idParticularidadesCuerpo'=>7, 'nombre' => 'INCOMPLETA'],
            ['idParticularidadesCuerpo'=>7, 'nombre' => 'OBLITERADA (OBSTRUIDA/CERRADA)'],
            ['idParticularidadesCuerpo'=>7, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>7, 'nombre' => 'DEFORMACIÓN'],
            ['idParticularidadesCuerpo'=>7, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>7, 'nombre' => 'MANCHAS'],
            ['idParticularidadesCuerpo'=>7, 'nombre' => 'NEVO'],
            ['idParticularidadesCuerpo'=>7, 'nombre' => 'QUEMADURA'],

            //OREJA DERECHA
            ['idParticularidadesCuerpo'=>8, 'nombre' => 'COMPLETA'],
            ['idParticularidadesCuerpo'=>8, 'nombre' => 'INCOMPLETA'],
            ['idParticularidadesCuerpo'=>8, 'nombre' => 'OBLITERADA (OBSTRUIDA/CERRADA)'],
            ['idParticularidadesCuerpo'=>8, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>8, 'nombre' => 'DEFORMACIÓN'],
            ['idParticularidadesCuerpo'=>8, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>8, 'nombre' => 'MANCHAS'],
            ['idParticularidadesCuerpo'=>8, 'nombre' => 'NEVO'],
            ['idParticularidadesCuerpo'=>8, 'nombre' => 'QUEMADURA'],

            //PATILLAS
            ['idParticularidadesCuerpo'=>9, 'nombre' => 'POBLADA'],
            ['idParticularidadesCuerpo'=>9, 'nombre' => 'ESCASA'],
            ['idParticularidadesCuerpo'=>9, 'nombre' => 'LAMPIÑO'],

            //MEJILLAS
            ['idParticularidadesCuerpo'=>10, 'nombre' => 'ACNÉ'],
            ['idParticularidadesCuerpo'=>10, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>10, 'nombre' => 'MANCHAS'],
            ['idParticularidadesCuerpo'=>10, 'nombre' => 'PECAS'],
            ['idParticularidadesCuerpo'=>10, 'nombre' => 'VERRUGAS'],
            ['idParticularidadesCuerpo'=>10, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>10, 'nombre' => 'DEFORMACIÓN'],
            ['idParticularidadesCuerpo'=>10, 'nombre' => 'NEVO'],
            ['idParticularidadesCuerpo'=>10, 'nombre' => 'QUEMADURA'],

            //NARIZ
            ['idParticularidadesCuerpo'=>11, 'nombre' => 'CHATA/BOTÓN'],
            ['idParticularidadesCuerpo'=>11, 'nombre' => 'AGUILEÑA'],
            ['idParticularidadesCuerpo'=>11, 'nombre' => 'RESPINGADA/RECTA'],
            ['idParticularidadesCuerpo'=>11, 'nombre' => 'OBLITERADA (OBSTRUIDA/CERRADA)'],
            ['idParticularidadesCuerpo'=>11, 'nombre' => 'ACNÉ'],
            ['idParticularidadesCuerpo'=>11, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>11, 'nombre' => 'MANCHAS'],
            ['idParticularidadesCuerpo'=>11, 'nombre' => 'PECAS'],
            ['idParticularidadesCuerpo'=>11, 'nombre' => 'VERRUGAS'],
            ['idParticularidadesCuerpo'=>11, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>11, 'nombre' => 'DEFORMACIÓN'],
            ['idParticularidadesCuerpo'=>11, 'nombre' => 'NEVO'],
            ['idParticularidadesCuerpo'=>11, 'nombre' => 'QUEMADURA'],


            //BIGOTE
            ['idParticularidadesCuerpo'=>12, 'nombre' => 'POBLADO'],
            ['idParticularidadesCuerpo'=>12, 'nombre' => 'ESCASO'],
            ['idParticularidadesCuerpo'=>12, 'nombre' => 'LAMPIÑO'],

            //LABIO INFERIOR
            ['idParticularidadesCuerpo'=>13, 'nombre' => 'DELGADO'],
            ['idParticularidadesCuerpo'=>13, 'nombre' => 'MEDIANO'],
            ['idParticularidadesCuerpo'=>13, 'nombre' => 'GRUESO'],
            ['idParticularidadesCuerpo'=>13, 'nombre' => 'MIXTO'],
            ['idParticularidadesCuerpo'=>13, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>13, 'nombre' => 'DEFORMACIÓN'],
            ['idParticularidadesCuerpo'=>13, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>13, 'nombre' => 'QUEMADURA'],


            //LABIO SUPERIOR
            ['idParticularidadesCuerpo'=>14, 'nombre' => 'DELGADO'],
            ['idParticularidadesCuerpo'=>14, 'nombre' => 'MEDIANO'],
            ['idParticularidadesCuerpo'=>14, 'nombre' => 'GRUESO'],
            ['idParticularidadesCuerpo'=>14, 'nombre' => 'MIXTO'],
            ['idParticularidadesCuerpo'=>14, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>14, 'nombre' => 'DEFORMACIÓN'],
            ['idParticularidadesCuerpo'=>14, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>14, 'nombre' => 'QUEMADURA'],

            //MENTÓN
            ['idParticularidadesCuerpo'=>15, 'nombre' => 'SALIENTE'],
            ['idParticularidadesCuerpo'=>15, 'nombre' => 'RECTO'],
            ['idParticularidadesCuerpo'=>15, 'nombre' => 'RETRAÍDO'],
            ['idParticularidadesCuerpo'=>15, 'nombre' => 'ACNÉ'],
            ['idParticularidadesCuerpo'=>15, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>15, 'nombre' => 'MANCHAS'],
            ['idParticularidadesCuerpo'=>15, 'nombre' => 'PECAS'],
            ['idParticularidadesCuerpo'=>15, 'nombre' => 'VERRUGAS'],
            ['idParticularidadesCuerpo'=>15, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>15, 'nombre' => 'DEFORMACIÓN'],
            ['idParticularidadesCuerpo'=>15, 'nombre' => 'NEVO'],
            ['idParticularidadesCuerpo'=>15, 'nombre' => 'QUEMADURA'],

            //BARBA
            ['idParticularidadesCuerpo'=>16, 'nombre' => 'POBLADA'],
            ['idParticularidadesCuerpo'=>16, 'nombre' => 'ESCASA'],
            ['idParticularidadesCuerpo'=>16, 'nombre' => 'LAMPIÑO'],

            //CUELLO
            ['idParticularidadesCuerpo'=>17, 'nombre' => 'ACNÉ'],
            ['idParticularidadesCuerpo'=>17, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>17, 'nombre' => 'MANCHAS'],
            ['idParticularidadesCuerpo'=>17, 'nombre' => 'PECAS'],
            ['idParticularidadesCuerpo'=>17, 'nombre' => 'VERRUGAS'],
            ['idParticularidadesCuerpo'=>17, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>17, 'nombre' => 'NEVO'],
            ['idParticularidadesCuerpo'=>17, 'nombre' => 'QUEMADURA'],

            //NUCA
            ['idParticularidadesCuerpo'=>18, 'nombre' => 'ACNÉ'],
            ['idParticularidadesCuerpo'=>18, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>18, 'nombre' => 'MANCHAS'],
            ['idParticularidadesCuerpo'=>18, 'nombre' => 'PECAS'],
            ['idParticularidadesCuerpo'=>18, 'nombre' => 'VERRUGAS'],
            ['idParticularidadesCuerpo'=>18, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>18, 'nombre' => 'NEVO'],
            ['idParticularidadesCuerpo'=>18, 'nombre' => 'QUEMADURA'],

            //HOMBRO IZQUIERDO
            ['idParticularidadesCuerpo'=>19, 'nombre' => 'ACNÉ'],
            ['idParticularidadesCuerpo'=>19, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>19, 'nombre' => 'MANCHAS'],
            ['idParticularidadesCuerpo'=>19, 'nombre' => 'PECAS'],
            ['idParticularidadesCuerpo'=>19, 'nombre' => 'VERRUGAS'],
            ['idParticularidadesCuerpo'=>19, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>19, 'nombre' => 'NEVO'],
            ['idParticularidadesCuerpo'=>19, 'nombre' => 'QUEMADURA'],

            //HOMBRO DERECHO
            ['idParticularidadesCuerpo'=>20, 'nombre' => 'ACNÉ'],
            ['idParticularidadesCuerpo'=>20, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>20, 'nombre' => 'MANCHAS'],
            ['idParticularidadesCuerpo'=>20, 'nombre' => 'PECAS'],
            ['idParticularidadesCuerpo'=>20, 'nombre' => 'VERRUGAS'],
            ['idParticularidadesCuerpo'=>20, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>20, 'nombre' => 'NEVO'],
            ['idParticularidadesCuerpo'=>20, 'nombre' => 'QUEMADURA'],

            //BRAZO IZQUIERDO
            ['idParticularidadesCuerpo'=>21, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>21, 'nombre' => 'MANCHAS'],
            ['idParticularidadesCuerpo'=>21, 'nombre' => 'PECAS'],
            ['idParticularidadesCuerpo'=>21, 'nombre' => 'VERRUGAS'],
            ['idParticularidadesCuerpo'=>21, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>21, 'nombre' => 'NEVO'],
            ['idParticularidadesCuerpo'=>21, 'nombre' => 'QUEMADURA'],
            ['idParticularidadesCuerpo'=>21, 'nombre' => 'AMPUTACIÓN'],

            //BRAZO DERECHO
            ['idParticularidadesCuerpo'=>22, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>22, 'nombre' => 'MANCHAS'],
            ['idParticularidadesCuerpo'=>22, 'nombre' => 'PECAS'],
            ['idParticularidadesCuerpo'=>22, 'nombre' => 'VERRUGAS'],
            ['idParticularidadesCuerpo'=>22, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>22, 'nombre' => 'NEVO'],
            ['idParticularidadesCuerpo'=>22, 'nombre' => 'QUEMADURA'],
            ['idParticularidadesCuerpo'=>22, 'nombre' => 'AMPUTACIÓN'],

            //ANTEBRAZO IZQUIERDO
            ['idParticularidadesCuerpo'=>23, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>23, 'nombre' => 'MANCHAS'],
            ['idParticularidadesCuerpo'=>23, 'nombre' => 'PECAS'],
            ['idParticularidadesCuerpo'=>23, 'nombre' => 'VERRUGAS'],
            ['idParticularidadesCuerpo'=>23, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>23, 'nombre' => 'NEVO'],
            ['idParticularidadesCuerpo'=>23, 'nombre' => 'QUEMADURA'],
            ['idParticularidadesCuerpo'=>23, 'nombre' => 'AMPUTACIÓN'],

            //ANTEBRAZO DERECHO
            ['idParticularidadesCuerpo'=>24, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>24, 'nombre' => 'MANCHAS'],
            ['idParticularidadesCuerpo'=>24, 'nombre' => 'PECAS'],
            ['idParticularidadesCuerpo'=>24, 'nombre' => 'VERRUGAS'],
            ['idParticularidadesCuerpo'=>24, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>24, 'nombre' => 'NEVO'],
            ['idParticularidadesCuerpo'=>24, 'nombre' => 'QUEMADURA'],
            ['idParticularidadesCuerpo'=>24, 'nombre' => 'AMPUTACIÓN'],

            //CODO IZQUIERDO
            ['idParticularidadesCuerpo'=>25, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>25, 'nombre' => 'MANCHAS'],
            ['idParticularidadesCuerpo'=>25, 'nombre' => 'PECAS'],
            ['idParticularidadesCuerpo'=>25, 'nombre' => 'VERRUGAS'],
            ['idParticularidadesCuerpo'=>25, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>25, 'nombre' => 'NEVO'],
            ['idParticularidadesCuerpo'=>25, 'nombre' => 'QUEMADURA'],

            //CODO DERECHO
            ['idParticularidadesCuerpo'=>26, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>26, 'nombre' => 'MANCHAS'],
            ['idParticularidadesCuerpo'=>26, 'nombre' => 'PECAS'],
            ['idParticularidadesCuerpo'=>26, 'nombre' => 'VERRUGAS'],
            ['idParticularidadesCuerpo'=>26, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>26, 'nombre' => 'NEVO'],
            ['idParticularidadesCuerpo'=>26, 'nombre' => 'QUEMADURA'],

            //MUÑECA IZQUIERDO
            ['idParticularidadesCuerpo'=>27, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>27, 'nombre' => 'MANCHAS'],
            ['idParticularidadesCuerpo'=>27, 'nombre' => 'PECAS'],
            ['idParticularidadesCuerpo'=>27, 'nombre' => 'VERRUGAS'],
            ['idParticularidadesCuerpo'=>27, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>27, 'nombre' => 'NEVO'],
            ['idParticularidadesCuerpo'=>27, 'nombre' => 'QUEMADURA'],

            //MUÑECA DERECHA
            ['idParticularidadesCuerpo'=>28, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>28, 'nombre' => 'MANCHAS'],
            ['idParticularidadesCuerpo'=>28, 'nombre' => 'PECAS'],
            ['idParticularidadesCuerpo'=>28, 'nombre' => 'VERRUGAS'],
            ['idParticularidadesCuerpo'=>28, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>28, 'nombre' => 'NEVO'],
            ['idParticularidadesCuerpo'=>28, 'nombre' => 'QUEMADURA'],

            //PALMA IZQUIERDA
            ['idParticularidadesCuerpo'=>29, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>29, 'nombre' => 'MANCHAS'],
            ['idParticularidadesCuerpo'=>29, 'nombre' => 'VERRUGAS'],
            ['idParticularidadesCuerpo'=>29, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>29, 'nombre' => 'NEVO'],
            ['idParticularidadesCuerpo'=>29, 'nombre' => 'QUEMADURA'],

            //PALMA DERECHA
            ['idParticularidadesCuerpo'=>30, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>30, 'nombre' => 'MANCHAS'],
            ['idParticularidadesCuerpo'=>30, 'nombre' => 'VERRUGAS'],
            ['idParticularidadesCuerpo'=>30, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>30, 'nombre' => 'NEVO'],
            ['idParticularidadesCuerpo'=>30, 'nombre' => 'QUEMADURA'],

            //MANO IZQUIERDA
            ['idParticularidadesCuerpo'=>31, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>31, 'nombre' => 'MANCHAS'],
            ['idParticularidadesCuerpo'=>31, 'nombre' => 'VERRUGAS'],
            ['idParticularidadesCuerpo'=>31, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>31, 'nombre' => 'NEVO'],
            ['idParticularidadesCuerpo'=>31, 'nombre' => 'QUEMADURA'],
            ['idParticularidadesCuerpo'=>31, 'nombre' => 'AMPUTACIÓN'],
            ['idParticularidadesCuerpo'=>31, 'nombre' => 'DEFORMACIÓN'],
            ['idParticularidadesCuerpo'=>31, 'nombre' => 'CALLOSIDAD'],

            //MANO DERECHA
            ['idParticularidadesCuerpo'=>32, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>32, 'nombre' => 'MANCHAS'],
            ['idParticularidadesCuerpo'=>32, 'nombre' => 'VERRUGAS'],
            ['idParticularidadesCuerpo'=>32, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>32, 'nombre' => 'NEVO'],
            ['idParticularidadesCuerpo'=>32, 'nombre' => 'QUEMADURA'],
            ['idParticularidadesCuerpo'=>32, 'nombre' => 'AMPUTACIÓN'],
            ['idParticularidadesCuerpo'=>32, 'nombre' => 'DEFORMACIÓN'],
            ['idParticularidadesCuerpo'=>32, 'nombre' => 'CALLOSIDAD'],


            //DEDO ANULAR IZQUIERDO
            ['idParticularidadesCuerpo'=>33, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>33, 'nombre' => 'MANCHAS'],
            ['idParticularidadesCuerpo'=>33, 'nombre' => 'VERRUGAS'],
            ['idParticularidadesCuerpo'=>33, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>33, 'nombre' => 'NEVO'],
            ['idParticularidadesCuerpo'=>33, 'nombre' => 'QUEMADURA'],
            ['idParticularidadesCuerpo'=>33, 'nombre' => 'AMPUTACIÓN'],
            ['idParticularidadesCuerpo'=>33, 'nombre' => 'DEFORMACIÓN'],
            
            //DEDO ANULAR DERECHO
            ['idParticularidadesCuerpo'=>34, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>34, 'nombre' => 'MANCHAS'],
            ['idParticularidadesCuerpo'=>34, 'nombre' => 'VERRUGAS'],
            ['idParticularidadesCuerpo'=>34, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>34, 'nombre' => 'NEVO'],
            ['idParticularidadesCuerpo'=>34, 'nombre' => 'QUEMADURA'],
            ['idParticularidadesCuerpo'=>34, 'nombre' => 'AMPUTACIÓN'],
            ['idParticularidadesCuerpo'=>34, 'nombre' => 'DEFORMACIÓN'],
            //DEDO ÍNDICE IZQUIERDO
            ['idParticularidadesCuerpo'=>35, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>35, 'nombre' => 'MANCHAS'],
            ['idParticularidadesCuerpo'=>35, 'nombre' => 'VERRUGAS'],
            ['idParticularidadesCuerpo'=>35, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>35, 'nombre' => 'NEVO'],
            ['idParticularidadesCuerpo'=>35, 'nombre' => 'QUEMADURA'],
            ['idParticularidadesCuerpo'=>35, 'nombre' => 'AMPUTACIÓN'],
            ['idParticularidadesCuerpo'=>35, 'nombre' => 'DEFORMACIÓN'],
            //DEDO ÍNDICE DERECHO
            ['idParticularidadesCuerpo'=>36, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>36, 'nombre' => 'MANCHAS'],
            ['idParticularidadesCuerpo'=>36, 'nombre' => 'VERRUGAS'],
            ['idParticularidadesCuerpo'=>36, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>36, 'nombre' => 'NEVO'],
            ['idParticularidadesCuerpo'=>36, 'nombre' => 'QUEMADURA'],
            ['idParticularidadesCuerpo'=>36, 'nombre' => 'AMPUTACIÓN'],
            ['idParticularidadesCuerpo'=>36, 'nombre' => 'DEFORMACIÓN'],
            //DEDO MEDIO IZQUIERDO
            ['idParticularidadesCuerpo'=>37, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>37, 'nombre' => 'MANCHAS'],
            ['idParticularidadesCuerpo'=>37, 'nombre' => 'VERRUGAS'],
            ['idParticularidadesCuerpo'=>37, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>37, 'nombre' => 'NEVO'],
            ['idParticularidadesCuerpo'=>37, 'nombre' => 'QUEMADURA'],
            ['idParticularidadesCuerpo'=>37, 'nombre' => 'AMPUTACIÓN'],
            ['idParticularidadesCuerpo'=>37, 'nombre' => 'DEFORMACIÓN'],
            //DEDO MEDIO DERECHO
            ['idParticularidadesCuerpo'=>38, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>38, 'nombre' => 'MANCHAS'],
            ['idParticularidadesCuerpo'=>38, 'nombre' => 'VERRUGAS'],
            ['idParticularidadesCuerpo'=>38, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>38, 'nombre' => 'NEVO'],
            ['idParticularidadesCuerpo'=>38, 'nombre' => 'QUEMADURA'],
            ['idParticularidadesCuerpo'=>38, 'nombre' => 'AMPUTACIÓN'],
            ['idParticularidadesCuerpo'=>38, 'nombre' => 'DEFORMACIÓN'],
            //DEDO MENIQUE IZQUIERDO
            ['idParticularidadesCuerpo'=>39, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>39, 'nombre' => 'MANCHAS'],
            ['idParticularidadesCuerpo'=>39, 'nombre' => 'VERRUGAS'],
            ['idParticularidadesCuerpo'=>39, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>39, 'nombre' => 'NEVO'],
            ['idParticularidadesCuerpo'=>39, 'nombre' => 'QUEMADURA'],
            ['idParticularidadesCuerpo'=>39, 'nombre' => 'AMPUTACIÓN'],
            ['idParticularidadesCuerpo'=>39, 'nombre' => 'DEFORMACIÓN'],
            //DEDO MENIQUE DERECHO
            ['idParticularidadesCuerpo'=>40, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>40, 'nombre' => 'MANCHAS'],
            ['idParticularidadesCuerpo'=>40, 'nombre' => 'VERRUGAS'],
            ['idParticularidadesCuerpo'=>40, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>40, 'nombre' => 'NEVO'],
            ['idParticularidadesCuerpo'=>40, 'nombre' => 'QUEMADURA'],
            ['idParticularidadesCuerpo'=>40, 'nombre' => 'AMPUTACIÓN'],
            ['idParticularidadesCuerpo'=>40, 'nombre' => 'DEFORMACIÓN'],
            //DEDO PULGAR IZQUIERDO
            ['idParticularidadesCuerpo'=>41, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>41, 'nombre' => 'MANCHAS'],
            ['idParticularidadesCuerpo'=>41, 'nombre' => 'VERRUGAS'],
            ['idParticularidadesCuerpo'=>41, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>41, 'nombre' => 'NEVO'],
            ['idParticularidadesCuerpo'=>41, 'nombre' => 'QUEMADURA'],
            ['idParticularidadesCuerpo'=>41, 'nombre' => 'AMPUTACIÓN'],
            ['idParticularidadesCuerpo'=>41, 'nombre' => 'DEFORMACIÓN'],
            //DEDO PULGAR DERECHO
            ['idParticularidadesCuerpo'=>42, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>42, 'nombre' => 'MANCHAS'],
            ['idParticularidadesCuerpo'=>42, 'nombre' => 'VERRUGAS'],
            ['idParticularidadesCuerpo'=>42, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>42, 'nombre' => 'NEVO'],
            ['idParticularidadesCuerpo'=>42, 'nombre' => 'QUEMADURA'],
            ['idParticularidadesCuerpo'=>42, 'nombre' => 'AMPUTACIÓN'],
            ['idParticularidadesCuerpo'=>42, 'nombre' => 'DEFORMACIÓN'],


            //ESPALDA
            ['idParticularidadesCuerpo'=>43, 'nombre' => 'ACNÉ'],
            ['idParticularidadesCuerpo'=>43, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>43, 'nombre' => 'MANCHAS'],
            ['idParticularidadesCuerpo'=>43, 'nombre' => 'VERRUGAS'],
            ['idParticularidadesCuerpo'=>43, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>43, 'nombre' => 'NEVO'],
            ['idParticularidadesCuerpo'=>43, 'nombre' => 'QUEMADURA'],
            ['idParticularidadesCuerpo'=>43, 'nombre' => 'DEFORMACIÓN'],

            //ABDOMEN
            ['idParticularidadesCuerpo'=>44, 'nombre' => 'ACNÉ'],
            ['idParticularidadesCuerpo'=>44, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>44, 'nombre' => 'MANCHAS'],
            ['idParticularidadesCuerpo'=>44, 'nombre' => 'VERRUGAS'],
            ['idParticularidadesCuerpo'=>44, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>44, 'nombre' => 'NEVO'],
            ['idParticularidadesCuerpo'=>44, 'nombre' => 'QUEMADURA'],
            
            //CADERA
            ['idParticularidadesCuerpo'=>45, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>45, 'nombre' => 'MANCHAS'],
            ['idParticularidadesCuerpo'=>45, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>45, 'nombre' => 'NEVO'],
            ['idParticularidadesCuerpo'=>45, 'nombre' => 'QUEMADURA'],
            ['idParticularidadesCuerpo'=>45, 'nombre' => 'DEFORMACIÓN'],

            //NALGA IZQUIERDA
            ['idParticularidadesCuerpo'=>46, 'nombre' => 'ACNÉ'],
            ['idParticularidadesCuerpo'=>46, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>46, 'nombre' => 'MANCHAS'],
            ['idParticularidadesCuerpo'=>46, 'nombre' => 'VERRUGAS'],
            ['idParticularidadesCuerpo'=>46, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>46, 'nombre' => 'QUEMADURA'],

            //NALGA DERECHA
            ['idParticularidadesCuerpo'=>47, 'nombre' => 'ACNÉ'],
            ['idParticularidadesCuerpo'=>47, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>47, 'nombre' => 'MANCHAS'],
            ['idParticularidadesCuerpo'=>47, 'nombre' => 'VERRUGAS'],
            ['idParticularidadesCuerpo'=>47, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>47, 'nombre' => 'QUEMADURA'],

            //MUSLO IZQUIERDO
            ['idParticularidadesCuerpo'=>49, 'nombre' => 'ACNÉ'],
            ['idParticularidadesCuerpo'=>49, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>49, 'nombre' => 'MANCHAS'],
            ['idParticularidadesCuerpo'=>49, 'nombre' => 'VERRUGAS'],
            ['idParticularidadesCuerpo'=>49, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>49, 'nombre' => 'NEVO'],
            ['idParticularidadesCuerpo'=>49, 'nombre' => 'QUEMADURA'],

            //MUSLO DERECHO
            ['idParticularidadesCuerpo'=>50, 'nombre' => 'ACNÉ'],
            ['idParticularidadesCuerpo'=>50, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>50, 'nombre' => 'MANCHAS'],
            ['idParticularidadesCuerpo'=>50, 'nombre' => 'VERRUGAS'],
            ['idParticularidadesCuerpo'=>50, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>50, 'nombre' => 'NEVO'],
            ['idParticularidadesCuerpo'=>50, 'nombre' => 'QUEMADURA'],

            //OMBLIGO
            ['idParticularidadesCuerpo'=>51, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>51, 'nombre' => 'MANCHAS'],
            ['idParticularidadesCuerpo'=>51, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>51, 'nombre' => 'QUEMADURA'],


            //PIERNA IZQUIERDA
            ['idParticularidadesCuerpo'=>52, 'nombre' => 'ACNÉ'],
            ['idParticularidadesCuerpo'=>52, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>52, 'nombre' => 'MANCHAS'],
            ['idParticularidadesCuerpo'=>52, 'nombre' => 'VERRUGAS'],
            ['idParticularidadesCuerpo'=>52, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>52, 'nombre' => 'NEVO'],
            ['idParticularidadesCuerpo'=>52, 'nombre' => 'QUEMADURA'],

            //PIERNA DERECHA
            ['idParticularidadesCuerpo'=>53, 'nombre' => 'ACNÉ'],
            ['idParticularidadesCuerpo'=>53, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>53, 'nombre' => 'MANCHAS'],
            ['idParticularidadesCuerpo'=>53, 'nombre' => 'VERRUGAS'],
            ['idParticularidadesCuerpo'=>53, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>53, 'nombre' => 'NEVO'],
            ['idParticularidadesCuerpo'=>53, 'nombre' => 'QUEMADURA'],

            //RODILLA IZQUIERDA
            ['idParticularidadesCuerpo'=>54, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>54, 'nombre' => 'MANCHAS'],
            ['idParticularidadesCuerpo'=>54, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>54, 'nombre' => 'QUEMADURA'],
            ['idParticularidadesCuerpo'=>54, 'nombre' => 'DEFORMACIÓN'],

            //RODILLA DERECHA
            ['idParticularidadesCuerpo'=>55, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>55, 'nombre' => 'MANCHAS'],
            ['idParticularidadesCuerpo'=>55, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>55, 'nombre' => 'QUEMADURA'],
            ['idParticularidadesCuerpo'=>55, 'nombre' => 'DEFORMACIÓN'],


            //TALÓN IZQUIERDO
            ['idParticularidadesCuerpo'=>56, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>56, 'nombre' => 'MANCHAS'],
            ['idParticularidadesCuerpo'=>56, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>56, 'nombre' => 'QUEMADURA'],
            ['idParticularidadesCuerpo'=>56, 'nombre' => 'CALLOSIDAD'],
            //TALÓN DERECHO
            ['idParticularidadesCuerpo'=>57, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>57, 'nombre' => 'MANCHAS'],
            ['idParticularidadesCuerpo'=>57, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>57, 'nombre' => 'QUEMADURA'],
            ['idParticularidadesCuerpo'=>57, 'nombre' => 'CALLOSIDAD'],


            //PIE IZQUIERDO
            ['idParticularidadesCuerpo'=>58, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>58, 'nombre' => 'MANCHAS'],
            ['idParticularidadesCuerpo'=>58, 'nombre' => 'VERRUGAS'],
            ['idParticularidadesCuerpo'=>58, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>58, 'nombre' => 'NEVO'],
            ['idParticularidadesCuerpo'=>58, 'nombre' => 'QUEMADURA'],
            ['idParticularidadesCuerpo'=>58, 'nombre' => 'AMPUTACIÓN'],
            ['idParticularidadesCuerpo'=>58, 'nombre' => 'DEFORMACIÓN'],
            ['idParticularidadesCuerpo'=>58, 'nombre' => 'CALLOSIDAD'],

            //PIE DERECHO
            ['idParticularidadesCuerpo'=>59, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>59, 'nombre' => 'MANCHAS'],
            ['idParticularidadesCuerpo'=>59, 'nombre' => 'VERRUGAS'],
            ['idParticularidadesCuerpo'=>59, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>59, 'nombre' => 'NEVO'],
            ['idParticularidadesCuerpo'=>59, 'nombre' => 'QUEMADURA'],
            ['idParticularidadesCuerpo'=>59, 'nombre' => 'AMPUTACIÓN'],
            ['idParticularidadesCuerpo'=>59, 'nombre' => 'DEFORMACIÓN'],
            ['idParticularidadesCuerpo'=>59, 'nombre' => 'CALLOSIDAD'],

            //PECHO DERECHO
            ['idParticularidadesCuerpo'=>60, 'nombre' => 'ACNÉ'],
            ['idParticularidadesCuerpo'=>60, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>60, 'nombre' => 'MANCHAS'],
            ['idParticularidadesCuerpo'=>60, 'nombre' => 'VERRUGAS'],
            ['idParticularidadesCuerpo'=>60, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>60, 'nombre' => 'NEVO'],
            ['idParticularidadesCuerpo'=>60, 'nombre' => 'QUEMADURA'],
            
            //PECHO IZQUIERDO
            ['idParticularidadesCuerpo'=>61, 'nombre' => 'ACNÉ'],
            ['idParticularidadesCuerpo'=>61, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>61, 'nombre' => 'MANCHAS'],
            ['idParticularidadesCuerpo'=>61, 'nombre' => 'VERRUGAS'],
            ['idParticularidadesCuerpo'=>61, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>61, 'nombre' => 'NEVO'],
            ['idParticularidadesCuerpo'=>61, 'nombre' => 'QUEMADURA'],

            //PANTORRILLA IZQUIERDA
            ['idParticularidadesCuerpo'=>62, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>62, 'nombre' => 'MANCHAS'],
            ['idParticularidadesCuerpo'=>62, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>62, 'nombre' => 'QUEMADURA'],
            //PANTORRILLA DERECHA
            ['idParticularidadesCuerpo'=>63, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>63, 'nombre' => 'MANCHAS'],
            ['idParticularidadesCuerpo'=>63, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>63, 'nombre' => 'QUEMADURA'],

            //TOBILLO IZQUIERDO
            ['idParticularidadesCuerpo'=>64, 'nombre' => 'DEFORMACIÓN'],
            ['idParticularidadesCuerpo'=>64, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>64, 'nombre' => 'MANCHAS'],
            ['idParticularidadesCuerpo'=>64, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>64, 'nombre' => 'QUEMADURA'],
            //TOBILLO DERECHO
            ['idParticularidadesCuerpo'=>65, 'nombre' => 'DEFORMACIÓN'],
            ['idParticularidadesCuerpo'=>65, 'nombre' => 'CICATRIZ'],
            ['idParticularidadesCuerpo'=>65, 'nombre' => 'MANCHAS'],
            ['idParticularidadesCuerpo'=>65, 'nombre' => 'LUNARES'],
            ['idParticularidadesCuerpo'=>65, 'nombre' => 'QUEMADURA'],

            //UÑAS
            ['idParticularidadesCuerpo'=>66, 'nombre' => 'MANCHAS'],
            ['idParticularidadesCuerpo'=>66, 'nombre' => 'ENCARNADAS'],
            ['idParticularidadesCuerpo'=>66, 'nombre' => 'LARGAS'],
            ['idParticularidadesCuerpo'=>66, 'nombre' => 'CORTAS'],




            
            
        ]);
    }
}
