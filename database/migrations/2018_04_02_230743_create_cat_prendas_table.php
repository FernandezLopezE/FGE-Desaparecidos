<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatPrendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_prendas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',50);
            $table->char('sexo',1)->nullable();
            $table->string('imagen',20)->nullable();
            $table->integer('idVestimenta')->unsigned();
            $table->foreign('idVestimenta')->references('id')->on('cat_vestimentas');
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
        Schema::dropIfExists('cat_prendas');
    }
}
