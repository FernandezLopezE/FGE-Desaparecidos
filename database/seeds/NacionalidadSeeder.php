<?php

use Illuminate\Database\Seeder;
use App\Models\CatNacionalidad;

class NacionalidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Basado en el catalogo de procesos
     * @return void
     */
    public function run()
    {
    	DB::table('cat_nacionalidad')->insert([
            ['id'=>  1,'nombre' => 'MEXICANA', 'lada' => '+52'],
            ['id'=>  2,'nombre' => 'FRANCESA', 'lada' => '+33'],
            ['id'=>  3,'nombre' => 'ARMENIANA', 'lada' => '+374'],
            ['id'=>  4,'nombre' => 'PORTUGUESA', 'lada' => '+351'],
            ['id'=>  5,'nombre' => 'RODESIANA', 'lada' => '+263'],
            ['id'=>  6,'nombre' => 'RUANDESA', 'lada' => '+250'],
            ['id'=>  7,'nombre' => 'RUMANA', 'lada' => '+40'],
            ['id'=>  8,'nombre' => 'SALVADOREÑA', 'lada' => '+503'],
            ['id'=>  9,'nombre' => 'SENEGALESA', 'lada' => '+221'],
            ['id'=> 10,'nombre' => 'SIERRALEONESA', 'lada' => '+232'],
            ['id'=> 11,'nombre' => 'SINGAPURESA', 'lada' => '+65'],
            ['id'=> 12,'nombre' => 'SIRIA', 'lada' => '+963'],
            ['id'=> 13,'nombre' => 'SOVIETICA', 'lada' => '+7'],
            ['id'=> 14,'nombre' => 'AUSTRALIANA', 'lada' => '+61'],
            ['id'=> 15,'nombre' => 'SUDAFRICANA', 'lada' => '+27'],
            ['id'=> 16,'nombre' => 'SUDANI', 'lada' => '+249'],
            ['id'=> 17,'nombre' => 'SUECA', 'lada' => '+46'],
            ['id'=> 18,'nombre' => 'SUIZA', 'lada' => '+41'],
            ['id'=> 19,'nombre' => 'SURINAMESA', 'lada' => '+597'],
            ['id'=> 20,'nombre' => 'TAIWANDESA', 'lada' => '+886'],
            ['id'=> 21,'nombre' => 'TANZANI', 'lada' => '+255'],
            ['id'=> 22,'nombre' => 'THAILANDESA', 'lada' => '+66'],
            ['id'=> 23,'nombre' => 'TONGANI', 'lada' => '+676'],
            ['id'=> 24,'nombre' => 'TONGOLESA', 'lada' => '+228'],
            ['id'=> 25,'nombre' => 'AUSTRIACA', 'lada' => '+43'],
            ['id'=> 26,'nombre' => 'TUNESINA', 'lada' => '+216'],
            ['id'=> 27,'nombre' => 'CURAZOLEÑO', 'lada' => '+599'],
            ['id'=> 28,'nombre' => 'UGANDESA', 'lada' => '+256'],
            ['id'=> 29,'nombre' => 'URUGUAYA', 'lada' => '+598'],
            ['id'=> 30,'nombre' => 'VATICANA', 'lada' => '+379'],
            ['id'=> 31,'nombre' => 'VENEZOLANA', 'lada' => '+58'],
            ['id'=> 32,'nombre' => 'VIETNAMITA', 'lada' => '+84'],
            ['id'=> 33,'nombre' => 'YEMENITA', 'lada' => '+967'],
            ['id'=> 34,'nombre' => 'YUGOSLAVA', 'lada' => '+381'],
            ['id'=> 35,'nombre' => 'ZAIRENSE', 'lada' => '+243'],
            ['id'=> 36,'nombre' => 'BELGA', 'lada' => '+32'],
            ['id'=> 37,'nombre' => 'ZAMBIANESA', 'lada' => '+260'],
            ['id'=> 38,'nombre' => 'ZIMBABWANESA', 'lada' => '+263'],
            ['id'=> 39,'nombre' => 'BELICEÑA', 'lada' => '+501'],
            ['id'=> 40,'nombre' => 'BENINESA', 'lada' => '+229'],
            ['id'=> 41,'nombre' => 'BIRMANA', 'lada' => '+95'],
            ['id'=> 42,'nombre' => 'BOLIVIANA', 'lada' => '+91'],
            ['id'=> 43,'nombre' => 'CHAGOSIANOS', 'lada' => '+246'],
            ['id'=> 44,'nombre' => 'BOTSWANESA', 'lada' => '+267'],
            ['id'=> 45,'nombre' => 'ALBANESA', 'lada' => '+355'],
            ['id'=> 46,'nombre' => 'BRASILEÑA', 'lada' => '+55'],
            ['id'=> 47,'nombre' => 'BULGARA', 'lada' => '+359'],
            ['id'=> 48,'nombre' => 'BURUNDESA', 'lada' => '+257'],
            ['id'=> 49,'nombre' => 'YIBUTIANO', 'lada' => '+253'],
            ['id'=> 50,'nombre' => 'BUTANI', 'lada' => '+975'],
            ['id'=> 51,'nombre' => 'CAMBOYANA', 'lada' => '+855'],
            ['id'=> 52,'nombre' => 'CAMERUNESA', 'lada' => '+237'],
            ['id'=> 53,'nombre' => 'CANADIENSE', 'lada' => '+1'],
            ['id'=> 54,'nombre' => 'CEILANDESA', 'lada' => '+94'],
            ['id'=> 55,'nombre' => 'CENTROAFRICANA', 'lada' => '+236'], 
            ['id'=> 56,'nombre' => 'ALEMANA', 'lada' => '+49'],
            ['id'=> 57,'nombre' => 'CHECOSLOVACA', 'lada' => '+420'],
            ['id'=> 58,'nombre' => 'CHILENA', 'lada' => '+56'],
            ['id'=> 59,'nombre' => 'CHINA', 'lada' => '+86'],
            ['id'=> 60,'nombre' => 'CHIPRIOTA', 'lada' => '+357'],
            ['id'=> 61,'nombre' => 'COLOMBIANA', 'lada' => '+57'],
            ['id'=> 62,'nombre' => 'CONGOLI', 'lada' => '+242'],
            ['id'=> 63,'nombre' => 'COREANA', 'lada' => '+850'],
            ['id'=> 64,'nombre' => 'COSTARRICENSE', 'lada' => '+506'],
            ['id'=> 65,'nombre' => 'CUBANA',  'lada' => '+53'],
            ['id'=> 66,'nombre' => 'ANDORREÑA', 'lada' => '+376'],
            ['id'=> 67,'nombre' => 'DANESA', 'lada' => '+45'],
            ['id'=> 68,'nombre' => 'DOMINICANA',  'lada' => '+1'],
            ['id'=> 69,'nombre' => 'ECUATORIANA', 'lada' => '+593'],
            ['id'=> 70,'nombre' => 'EGIPCIA', 'lada' => '+20'],
            ['id'=> 71,'nombre' => 'ESPAÑOLA', 'lada' => '+34'],
            ['id'=> 72,'nombre' => 'ETIOPE',  'lada' => '+251'],
            ['id'=> 73,'nombre' => 'FILIPINA', 'lada' => '+63'],
            ['id'=> 74,'nombre' => 'FINLANDESA', 'lada' => '+358'],
            ['id'=> 75,'nombre' => 'RUSA', 'lada' => '+7'],
            ['id'=> 76,'nombre' => 'GABONESA', 'lada' => '+241'],
            ['id'=> 77,'nombre' => 'ANGOLEÑA', 'lada' => '+502'],
            ['id'=> 78,'nombre' => 'GAMBIANA', 'lada' => '+220'],
            ['id'=> 79,'nombre' => 'MARFILEÑO', 'lada' => '+255'],
            ['id'=> 80,'nombre' => 'GRIEGA', 'lada' => '+30'],
            ['id'=> 81,'nombre' => 'GUATEMALTECA', 'lada' => '+47'],
            ['id'=> 82,'nombre' => 'GUINESA', 'lada' => '+224'],
            ['id'=> 83,'nombre' => 'HAITIANA', 'lada' => '+509'],
            ['id'=> 84,'nombre' => 'HAWAIANA', 'lada' => '+808'],
            ['id'=> 85,'nombre' => 'HINDU', 'lada' => '+91'],
            ['id'=> 86,'nombre' => 'HOLANDESA', 'lada' => '+31'],
            ['id'=> 87,'nombre' => 'HONDUREÑA', 'lada' => '+504'],
            ['id'=> 88,'nombre' => 'HUNGARA', 'lada' => '+36'],
            ['id'=> 89,'nombre' => 'INDONESA', 'lada' => '+62'],
            ['id'=> 90,'nombre' => 'INGLESA', 'lada' => '+44'],
            ['id'=> 91,'nombre' => 'IRAKI', 'lada' => '+964'],
            ['id'=> 92,'nombre' => 'IRANI', 'lada' => '+98'],
            ['id'=> 93,'nombre' => 'IRLANDESA', 'lada' => '+353'],
            ['id'=> 94,'nombre' => 'ISLANDESA', 'lada' => '+354'],
            ['id'=> 95,'nombre' => 'ISRAELI', 'lada' => '+972'],
            ['id'=> 96,'nombre' => 'ITALIANA', 'lada' => '+39'],
            ['id'=> 97,'nombre' => 'CABOVERDIANO', 'lada' => '+238'],
            ['id'=> 98,'nombre' => 'DOMINICA', 'lada' => '+246'],
            ['id'=> 99,'nombre' => 'EMIRATI',  'lada' => '+971'],
            ['id'=>100,'nombre' => 'ARABE', 'lada' => '+966'],
            ['id'=>101,'nombre' => 'JAPONESA', 'lada' => '+81'],
            ['id'=>102,'nombre' => 'JORDANA', 'lada' => '+962'],
            ['id'=>103,'nombre' => 'KENIANA', 'lada' => '+264'],
            ['id'=>104,'nombre' => 'CHECO', 'lada' => '+420'],
            ['id'=>105,'nombre' => 'LIBANESA', 'lada' => '+961'],
            ['id'=>106,'nombre' => 'LIBERIANA', 'lada' => '+231'],
            ['id'=>107,'nombre' => 'LIBIA', 'lada' => '+218'],
            ['id'=>108,'nombre' => 'LUXEMBURGESA', 'lada' => '+352'],
            ['id'=>109,'nombre' => 'MALASIA', 'lada' => '+60'],
            ['id'=>110,'nombre' => 'MALAWIANA', 'lada' => '+265'],
            ['id'=>111,'nombre' => 'ARGELINA', 'lada' => '+213'],
            ['id'=>112,'nombre' => 'MALIENSE', 'lada' => '+223'],
            ['id'=>113,'nombre' => 'MALTESA', 'lada' => '+356'],
            ['id'=>114,'nombre' => 'MARROQUI', 'lada' => '+212'],
            ['id'=>115,'nombre' => 'MAURITANA', 'lada' => '+222'],
            ['id'=>116,'nombre' => 'MONGOLICA', 'lada' => '+976'],
            ['id'=>117,'nombre' => 'MOZAMBIQUEÑA', 'lada' => '+258'],
            ['id'=>118,'nombre' => 'NABIMIANA', 'lada' => '+264'],
            ['id'=>119,'nombre' => 'NEOZELANDESA', 'lada' => '+64'],
            ['id'=>120,'nombre' => 'NEPALESA', 'lada' => '+977'],
            ['id'=>121,'nombre' => 'ARGENTINA', 'lada' => '+54'],
            ['id'=>122,'nombre' => 'NICARAGUENSA', 'lada' => '+505'],
            ['id'=>123,'nombre' => 'NIGERIANA', 'lada' => '+234'],
            ['id'=>124,'nombre' => 'NORTEAMERICANA', 'lada' => '+1'],
            ['id'=>125,'nombre' => 'NORUEGA', 'lada' => '+47'],
            ['id'=>126,'nombre' => 'PAKISTANI', 'lada' => '+92'],
            ['id'=>127,'nombre' => 'PANAMEÑA', 'lada' => '+507'],
            ['id'=>128,'nombre' => 'PARAGUAYA', 'lada' => '+595'],
            ['id'=>129,'nombre' => 'PERUANA', 'lada' => '+51'],
            ['id'=>130,'nombre' => 'POLACA', 'lada' => '+48'],
            ['id'=>131,'nombre' => 'NORCOREANO', 'lada' => '+850'],
            ['id'=>132,'nombre' => 'SURCOREANO', 'lada' => '+82'],
            ['id'=>133,'nombre' => 'COOKIANO', 'lada' => '+682'],
            ['id'=>134,'nombre' => 'PARAGUAYO', 'lada' => '+595'],
            ['id'=>135,'nombre' => 'UCRANIANA', 'lada' => '+380'],
            ['id'=>136,'nombre' => 'TURCO', 'lada' => '+90'],
            ['id'=>137,'nombre' => 'CAIMANES', 'lada' => +'1'],
            ['id'=>138,'nombre' => 'TAHITIANO', 'lada' => '+689'],
            ['id'=>139,'nombre' => 'SUAZI', 'lada' => '+268'],
            ['id'=>140,'nombre' => 'SOMALI', 'lada' => '+252'],
            ['id'=>141,'nombre' => 'CROATA', 'lada' => '+385'],
            ['id'=>142,'nombre' => 'BAHREINI', 'lada' => '+973'],
            ['id'=>143,'nombre' => 'BANGLADESI', 'lada' => '+880'],
            ['id'=>144,'nombre' => 'BURKINES', 'lada' => '+226'],
            ['id'=>145,'nombre' => 'AZERBAIYANO', 'lada' => '+994'],
            ['id'=>146,'nombre' => 'BIELORRUSO', 'lada' => '+252'],
            ['id'=>150,'nombre' => 'BRUNEANO', 'lada' => '+599'],
            ['id'=>147,'nombre' => 'BONAIRENSE', 'lada' => '+599'],
            ['id'=>148,'nombre' => 'BOSNIO', 'lada' => '+387'],
            ['id'=>149,'nombre' => 'SIN INFORMACION', 'lada' => '+000']
            /*
            */
        ]);
                  /*
        foreach( $this->arrayNacionalidades as $nacionalidad ) {
                  
                  $n = new Nacionalidad;
                  $n->nombre = $nacionalidad['nombre'];
                  $n->save();

                  DB::create(array(
                  'nombre'  =>  $nacionalidad['nombre']
            ));
            }
                  */
    }
}


