<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesaparecidosFamiliaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desaparecidos_familiares', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('parentesco',['MADRE', 'PADRE', 'HIJO', 'PAREJA']);            
            $table->string('nombres', 50);
            $table->string('primerAp', 50);
            $table->string('segundoAp', 50);            
            $table->string('edad',3);

            $table->integer('idDesaparecido')->unsigned();
            $table->foreign('idDesaparecido')->references('id')->on('desaparecidos_personas')->onDelete('cascade');           

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('desaparecidos_familiares');
    }
}
