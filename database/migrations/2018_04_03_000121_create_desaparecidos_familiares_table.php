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
            $table->string('nombres', 50)->nullable();
            $table->string('primerAp', 50)->nullable();
            $table->string('segundoAp', 50)->nullable();
            $table->date('fechaNacimiento')->nullable();       
            $table->string('edad',250)->nullable();

            $table->integer('idParentesco')->unsigned();
            $table->foreign('idParentesco')->references('id')->on('cat_parentesco')->onDelete('cascade');
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
