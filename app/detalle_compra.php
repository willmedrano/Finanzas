<?php

namespace App;
use DB;
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

 public static function pro2($id){
       return DB::table('productos')
       ->join('detalle_compras', 'detalle_compras.idprods', '=', 'productos.id')
       ->where('detalle_compras.idcomps', '=', $id )
            //->where('detalle_compras.idcomps','=',$id);
       		//->join('compras', 'compras.id', '=', )
            
            ->select('detalle_compras.*','productos.nomProd')
            //->orderBy('productos.id')
            ->get();
   }

    public static function pro3($id){
       return DB::table('compras')
            ->join('detalle_compras', 'detalle_compras.idcomps', '=', 'compras.id')
            ->where('detalle_compras.idprods', '=', $id)
            
            ->select('compras.*',  'detalle_compras.*','compras.id')
            ->orderBy('compras.id')
            ->get();
   }

}
