<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
             $table->increments('id');
             $table->string('fotoEmp');
             $table->string('nomEmp');
             $table->string('apeEmp');
             $table->date('NacEmp');
             $table->Double('ing');             
             $table->string('DUIEmp');
             $table->string('NITEmp');
             $table->string('dirEmp');
             $table->string('telEmp');
             $table->string('sexEmp');
             $table->boolean('estadoEmp')->default(true);
           
             $table->string('registro');
             $table->integer('categoria')->default(1);
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
        Schema::drop('clientes');
    }
}
