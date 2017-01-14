<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarterasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carteras', function (Blueprint $table) {
            $table->increments('id');
            $table->double('saldo', 7, 2);   //   Equivalente a numeros reales con precisión, 7 digitos en total y 2 despues de el punto decimal
            $table->integer('cancompra');        //Equivalente a numeros enteros
            $table->integer('idcli')->unsigned();
            $table->foreign('idcli')->references('id')->on('clientes');
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
        Schema::drop('carteras');
    }
}
