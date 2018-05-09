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
            [ 'id' => 1, 'nombre' => 'FACEBOOK', 'icono' => null],
            [ 'id' => 2, 'nombre' => 'YOUTUBE', 'icono' => null],
            [ 'id' => 3, 'nombre' => 'INSTAGRAM', 'icono' => null],
            [ 'id' => 4, 'nombre' => 'TWITTER', 'icono' => null],
            [ 'id' => 5, 'nombre' => 'WECHAT', 'icono' => null],
            [ 'id' => 6, 'nombre' => 'QQ', 'icono' => null],
            [ 'id' => 7, 'nombre' => 'QZONE', 'icono' => null],
            [ 'id' => 8, 'nombre' => 'TUMBLR', 'icono' => null],
            [ 'id' => 9, 'nombre' => 'LINKEDIN', 'icono' => null],
            [ 'id' => 10, 'nombre' => 'SNAPCHAT', 'icono' => null],
            [ 'id' => 11, 'nombre' => 'WEIBO', 'icono' => null],
            [ 'id' => 12, 'nombre' => 'SKYPE', 'icono' => null],
            [ 'id' => 13, 'nombre' => 'REDDIT', 'icono' => null],
            [ 'id' => 14, 'nombre' => 'SOUNDCLOUD', 'icono' => null],
            [ 'id' => 15, 'nombre' => 'BADOO', 'icono' => null],
            [ 'id' => 16, 'nombre' => 'VINE', 'icono' => null],
            [ 'id' => 17, 'nombre' => 'PINTEREST', 'icono' => null],
            [ 'id' => 18, 'nombre' => 'YY', 'icono' => null],
            [ 'id' => 19, 'nombre' => 'FLICKR', 'icono' => null],
            [ 'id' => 20, 'nombre' => 'GOOGLE+', 'icono' => null],
            [ 'id' => 21, 'nombre' => 'VK', 'icono' => null],
            [ 'id' => 22, 'nombre' => 'SPOTIFY', 'icono' => null],
            [ 'id' => 23, 'nombre' => 'TARINGA', 'icono' => null],
            [ 'id' => 24, 'nombre' => 'SLIDESHARE', 'icono' => null],
            [ 'id' => 25, 'nombre' => 'TAGGED', 'icono' => null]
        ]);//
    }
}