<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cuota extends Model
{
    //
    protected $table = "cuotas";
    //protected $primaryKey="idventa"; por siqueremos hacer llaves primarias
     protected $fillable = ['monto','fecha', 'mora', 'total', 'idPago'];
   
}
