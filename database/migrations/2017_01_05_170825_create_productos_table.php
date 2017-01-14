<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cod');
            $table->string('nomProd');
            $table->string('marca');
            $table->Integer('idProve')->unsigned();
            $table->foreign('idProve')->references('id')->on('proveedores');
            $table->Integer('gUni');
            $table->string('desc');
            $table->Double('cPromedio', 7, 2)->default(0.00);
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
        Schema::drop('productos');
    }
}