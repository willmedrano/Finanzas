<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuxiliarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auxiliars', function (Blueprint $table) {
            $table->increments('id');
            $table->double('preciocomp2', 7, 2);  //   Equivalente a numeros reales con precisión, 7 digitos en total y 2 despues de el punto decimal
            $table->double('descompra2', 3, 2);   //   Equivalente a numeros reales con precisión, 3 digitos en total y 2 despues de el punto decimal
            $table->integer('cancompra2');        //Equivalente a numeros enteros
            $table->integer('idprods2')->unsigned();
            $table->foreign('idprods2')->references('id')->on('productos');
            
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
        Schema::drop('auxiliars');
    }
}
