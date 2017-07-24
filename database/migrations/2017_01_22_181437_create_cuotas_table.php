<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuotas', function (Blueprint $table) {
            $table->increments('id');
            $table->double('monto', 7, 2);
            $table->date('fecha');
            $table->double('mora', 7, 2);
            $table->double('total', 7, 2);
            $table->integer('idPago')->unsigned();
            $table->foreign('idPago')->references('id')->on('pagos'); 
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
        Schema::drop('cuotas');
    }
}
