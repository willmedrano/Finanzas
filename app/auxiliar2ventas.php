<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class auxiliar2ventas extends Model
{
    protected $table = "auxiliar2s";//Aqui se define el nombre de la tabla
    //definicion de campos 
    
    //preiocomp;     de compra
    //descimora; se recibio un descuento por compra
    //cancompra; es la cantidad de productos comprados
    //idprods;   es para saber la informacion de ese producto que sea adquirido
    //idcomps;   es para saber que compra que de que se adquirido.
    protected $fillable = ['preciocomp3', 'descompra3', 'cancompra3', 'idprods3'];//Aqui creamos los campos de la tabla 
    public static function auxComp3(){
   		 return DB::table('auxiliar2s')
            ->join('productos', 'productos.id', '=', 'auxiliar2s.idprods3')
            ->select('auxiliar2s.*',  'productos.cod','productos.nomProd')
            ->orderBy('auxiliar2s.id')
            ->get();
   }
}
 