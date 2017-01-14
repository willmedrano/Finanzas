<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ventasp extends Model
{
     //definimos las tabla creada como se llama
     protected $table = "ventasps";
    //protected $primaryKey="idventa"; por siqueremos hacer llaves primarias
     protected $fillable = ['cantidadv', 'preciov', 'idFact', 'idProd'];
}
