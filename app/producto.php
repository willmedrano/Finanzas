<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class producto extends Model
{
    //
    protected $table = "productos";
   

   protected $fillable = ['cod','nomProd','marca','idProve','gUni','estado','desc','cPromedio'];

   //para sacar de dos tablas recordar poner use DB arriba
   public static function proPro(){
   		 return DB::table('productos')
            ->join('proveedores', 'productos.idProve', '=', 'proveedores.id')
            ->select('productos.*',  'proveedores.nom')
            ->orderBy('productos.id')
            ->get();
   }
   //fin
   public static function mostrar($id){
   		 return DB::table('productos')
            ->join('proveedores', 'productos.idProve', '=', 'proveedores.id', 'and', 'productos.id', '=', $id)
            
            ->select('productos.cod','productos.nomProd','productos.marca','productos.desc','productos.estado',  'proveedores.nom')
            ->get();
   }

}
 