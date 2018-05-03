<?php

use Illuminate\Database\Seeder;

class CatRedesSocialesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_redes_sociales')->insert([
            [ 'id' => 1, 'nombre' => 'FACEBOOK'],
            [ 'id' => 2, 'nombre' => 'YOUTUBE'],
            [ 'id' => 3, 'nombre' => 'INSTAGRAM'],
            [ 'id' => 4, 'nombre' => 'TWITTER'],
            [ 'id' => 5, 'nombre' => 'WECHAT'],
            [ 'id' => 6, 'nombre' => 'QQ'],
            [ 'id' => 7, 'nombre' => 'QZONE'],
            [ 'id' => 8, 'nombre' => 'TUMBLR'],
            [ 'id' => 9, 'nombre' => 'LINKEDIN'],
            [ 'id' => 10, 'nombre' => 'SNAPCHAT'],
            [ 'id' => 11, 'nombre' => 'WEIBO'],
            [ 'id' => 12, 'nombre' => 'SKYPE'],
            [ 'id' => 13, 'nombre' => 'REDDIT'],
            [ 'id' => 14, 'nombre' => 'SOUNDCLOUD'],
            [ 'id' => 15, 'nombre' => 'BADOO'],
            [ 'id' => 16, 'nombre' => 'VINE'],
            [ 'id' => 17, 'nombre' => 'PINTEREST'],
            [ 'id' => 18, 'nombre' => 'YY'],
            [ 'id' => 19, 'nombre' => 'FLICKR'],
            [ 'id' => 20, 'nombre' => 'GOOGLE+'],
            [ 'id' => 21, 'nombre' => 'VK'],
            [ 'id' => 22, 'nombre' => 'SPOTIFY'],
            [ 'id' => 23, 'nombre' => 'TARINGA'],
            [ 'id' => 24, 'nombre' => 'SLIDESHARE'],
            [ 'id' => 25, 'nombre' => 'TAGGED']
        ]);//
    }
}