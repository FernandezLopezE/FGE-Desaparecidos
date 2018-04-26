<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesaparecidoDentistaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desaparecido_dentista', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres', 200)->nullable();
            $table->string('primerAp', 50)->nullable();
            $table->string('segundoAp', 50)->nullable();
            $table->string('empresa');
            $table->string('telefono');
            $table->string('direccion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('desaparecido_dentista');
    }
}
