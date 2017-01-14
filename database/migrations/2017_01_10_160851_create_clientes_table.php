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
             $table->string('DUIEmp')->unique();
             $table->string('NITEmp')->unique();
             $table->string('dirEmp');
             $table->string('telEmp')->unique();
             $table->string('sexEmp');
             $table->boolean('estadoEmp')->default(true);
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
