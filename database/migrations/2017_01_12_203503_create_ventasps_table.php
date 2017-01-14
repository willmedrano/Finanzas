<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentaspsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
        Schema::create('ventasps', function (Blueprint $table) {
            $table->increments('id');
            $table->double('preciov', 7, 2);  //   Equivalente a numeros reales con precisión, 7 digitos en total y 2 despues de el punto decimal
            $table->integer('cantidadv');        //Equivalente a numeros enteros
            $table->integer('idFact')->unsigned();
            $table->foreign('idFact')->references('id')->on('facturacions');  
             $table->integer('idProd')->unsigned();
            $table->foreign('idProd')->references('id')->on('productos');  
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
        Schema::drop('ventasps');
    }
}