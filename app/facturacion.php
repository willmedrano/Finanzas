<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class facturacion extends Model
{
    //definimos las tabla creada como se llama
     protected $table = "facturacions";
    //protected $primaryKey="idventa"; por siqueremos hacer llaves primarias
     protected $fillable = ['numfact','fechaf', 'total', 'detalle', 'idcliente'];
   
     public static function emp(){
         return DB::table('facturacions')
          ->join('clientes', 'clientes.id', '=', 'facturacions.idcliente')
            ->select('facturacions.*', 'clientes.nomEmp')
            ->orderBy('facturacions.id')
            ->get();
   }
}
