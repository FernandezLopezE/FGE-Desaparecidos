<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatDestinatariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_destinatarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');            
            $table->string('cargo');
            $table->integer('id_dependencia')->unsigned();
            $table->foreign('id_dependencia')->references('id')->on('cat_dependencias')->onDelete('cascade');
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
        Schema::dropIfExists('cat_destinatarios');
    }
}
