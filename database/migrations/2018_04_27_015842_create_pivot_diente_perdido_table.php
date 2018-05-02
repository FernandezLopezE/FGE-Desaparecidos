<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePivotDientePerdidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pivot_diente_perdido', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('idDiente')->unsigned()->nullable();           
            $table->foreign('idDiente')->references('id')->on('cat_dientes');

            $table->string('causaPerdida')->nullable();
            
            $table->integer('idDentadura')->unsigned()->nullable();           
            $table->foreign('idDentadura')->references('id')->on('desaparecido_dentadura');
            
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
        Schema::dropIfExists('pivot_diente_perdido');
    }
}
