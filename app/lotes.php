<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class lotes extends Model
{
     // aqui se definen en nuestro modelo el nombre de la tabla que podremos utilizar para insertar en la base de datos.
    
    protected $table = "lotes";//Aqui se define el nombre de la tabla
    //definicion de campos 
    
    //preciolote;     que tinene ese producto por  lote
    //deslote;        por si desea aplicale un descuento al lote
    //canlote;        es la cantidad de productos que tengo en el lote
    //idprodsl;       es para saber la informacion de ese producto que sea adquirido
    //idcompsl;       es para saber que compra que de que se adquirido.
    protected $fillable = ['preciolote', 'deslote', 'canlote', 'idprodsl', 'idcompsl'];//Aqui creamos los campos de la tabla 
   public static function Llenarlotes( $id){
   	       return DB::table('lotes')
            ->select('lotes.*')
            ->where('idprodsl','=',$id)
            ->get();

   }
    public static function proLot(){
         return DB::table('lotes')
            ->join('productos', 'productos.id', '=', 'lotes.idprodsl')
            ->select('lotes.*',  'productos.cod','productos.cPromedio','productos.nomProd', 'productos.marca','productos.gUni','productos.desc')
            ->orderBy('productos.id')
            ->get();
   }


}
