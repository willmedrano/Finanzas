<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detalle_compra extends Model
{
    // aqui se definen en nuestro modelo el nombre de la tabla que podremos utilizar para insertar en la base de datos.
    
    protected $table = "detalle_compras";//Aqui se define el nombre de la tabla
    //definicion de campos 
    
    //preiocomp;     de compra
    //descimora; se recibio un descuento por compra
    //cancompra; es la cantidad de productos comprados
    //idprods;   es para saber la informacion de ese producto que sea adquirido
    //idcomps;   es para saber que compra que de que se adquirido.
    protected $fillable = ['preciocomp', 'descompra', 'cancompra', 'idprods', 'idcomps'];//Aqui creamos los campos de la tabla 
}
