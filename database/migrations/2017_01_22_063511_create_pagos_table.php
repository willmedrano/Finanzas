<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('pagos', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');  //   Equivalente a numeros reales con precisión, 7 digitos en total y 2 despues de el punto decimal
            $table->double('pendiente', 7, 2);        //Equivalente a numeros enteros\
            $table->double('monto', 7, 2);        //Equivalente a numeros enteros\
            $table->double('mora', 7, 2);        //Equivalente a numeros enteros\
            $table->integer('cuotas');
            $table->integer('idFact')->unsigned();
            $table->foreign('idFact')->references('id')->on('facturacions');  
             $table->integer('idCli')->unsigned();
            $table->foreign('idCli')->references('id')->on('clientes'); 
             $table->boolean('estado')->default(true);
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
        Schema::drop('pagos');
    }
}
