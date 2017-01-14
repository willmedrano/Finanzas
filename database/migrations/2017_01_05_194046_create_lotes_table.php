<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lotes', function (Blueprint $table) {
            $table->increments('id');
            $table->double('preciolote', 7, 2);  //   Equivalente a numeros reales con precisión, 7 digitos en total y 2 despues de el punto decimal
            $table->double('deslote', 3, 2);   //   Equivalente a numeros reales con precisión, 3 digitos en total y 2 despues de el punto decimal
            $table->integer('canlote');        //Equivalente a numeros enteros
            $table->integer('idprodsl')->unsigned();
            $table->foreign('idprodsl')->references('id')->on('productos');
            $table->integer('idcompsl')->unsigned();
            $table->foreign('idcompsl')->references('id')->on('compras');
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
        Schema::drop('lotes');
    }
}
