<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use producto;

class compras extends Model //Aqui escribimos campos de modelo
{
    // aqui se definen en nuestro modelo el nombre de la tabla que podremos utilizar para insertar en la base de datos.
    protected $table = "compras";      //Aqui se define el nombre de la tabla
    //tipopago;     Es para saber la forma en la institucion esta dispuesta apagar por la compra
    //montocompra;  Es el total apagar por la compra.
    //fechacompra;  Es para tener un contra de la fecha en que se compro dichos productos
    //idprovs;      Es saber a que proveedor le compro los productos.
    protected $fillable = ['tipopago', 'montocompra', 'fechacompra'];//Aqui creamos los campos de la tabla 

   public static function mostrarcompra(Request $id){
       return DB::table('productos')
            ->join('proveedores', 'productos.id', '=', $id)
            
            ->select('productos.cod','productos.nomProd','productos.marca','productos.uniCaja','productos.desc','productos.estado',  'proveedores.nom')
            ->get();
   }
   public static function mostrarcompra2(Request $id){
       return DB::table('productos')
            ->join('proveedores', 'productos.id', '=', $id)
            
            ->select('productos.cod','productos.nomProd','productos.marca','productos.uniCaja','productos.desc','productos.estado',  'proveedores.nom')
            ->get();
   }
   public static function Mostrarcompras(){
       return DB::table('compras')
            ->join('detalle_compras', 'detalle_compras.idcomps', '=', 'compras.id')
            ->join('productos', 'detalle_compras.idprods', '=', 'productos.id')
            
            ->select('compras.*',  'detalle_compras.*','productos.*','compras.id')
            ->orderBy('compras.id')
            ->get();
   }

}
