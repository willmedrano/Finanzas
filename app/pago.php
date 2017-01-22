<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pago extends Model
{
    //
    protected $table = "pagos";
    //protected $primaryKey="idventa"; por siqueremos hacer llaves primarias
     protected $fillable = ['fecha', 'pendiente','monto','mora','cuotas' ,'idFact', 'idCli','estado'];
}
