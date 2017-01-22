<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class ventasp extends Model
{
     //definimos las tabla creada como se llama
     protected $table = "ventasps";
    //protected $primaryKey="idventa"; por siqueremos hacer llaves primarias
     protected $fillable = ['cantidadv', 'preciov', 'idFact', 'idProd'];

      public static function pro2($id){
       return DB::table('productos')
       ->join('ventasps', 'ventasps.idProd', '=', 'productos.id')
       ->where('ventasps.idFact', '=', $id )
            //->where('detalle_compras.idcomps','=',$id);
          //->join('compras', 'compras.id', '=', )
            
            ->select('ventasps.*','productos.nomProd','productos.cPromedio','productos.gUni')
            //->orderBy('productos.id')
            ->get();
   } 



    public static function pro3($id){
       return DB::table('facturacions')
            ->join('ventasps', 'ventasps.idFact', '=', 'facturacions.id')
            ->where('ventasps.idProd', '=', $id)
            
            ->select('facturacions.*',  'ventasps.*','facturacions.id')
            ->orderBy('facturacions.id')
            ->get();
   }

   

}
