<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         

        Schema::create('facturacions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numfact');           
            $table->date('fechaf');
            $table->double('total', 7, 2);
            //$table->string('nomcli');
            //$table->double('iva_credito', 7, 2);
            $table->string('detalle');
            $table->integer('idcliente')->unsigned();
            $table->foreign('idcliente')->references('id')->on('clientes');  
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
        Schema::drop('facturacions');
    }
}
