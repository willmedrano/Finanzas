<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()//Aqui estomos creando la tabla compras y definimos los campos que tendra dicha tabla.
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipopago');
            $table->string('montocompra');
            $table->date('fechacompra');
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
        Schema::drop('compras');
    }
}
