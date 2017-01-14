<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class facturacion extends Model
{
    //definimos las tabla creada como se llama
     protected $table = "facturacions";
    //protected $primaryKey="idventa"; por siqueremos hacer llaves primarias
     protected $fillable = ['numfact','fechaf', 'total', 'detalle', 'idcliente'];
}
