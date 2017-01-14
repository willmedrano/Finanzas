<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class auxiliar extends Model
{
    //
   protected $table = "auxiliars";//Aqui se define el nombre de la tabla
    //definicion de campos 
    
    //preiocomp;     de compra
    //descimora; se recibio un descuento por compra
    //cancompra; es la cantidad de productos comprados
    //idprods;   es para saber la informacion de ese producto que sea adquirido
    //idcomps;   es para saber que compra que de que se adquirido.
    protected $fillable = ['preciocomp2', 'descompra2', 'cancompra2', 'idprods2'];//Aqui creamos los campos de la tabla 
    public static function auxComp(){
   		 return DB::table('auxiliars')
            ->join('productos', 'productos.id', '=', 'auxiliars.idprods2')
            ->select('auxiliars.*',  'productos.cod','productos.nomProd')
            ->orderBy('auxiliars.id')
            ->get();
   }
}
