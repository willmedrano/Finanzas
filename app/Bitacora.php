<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bitacora extends Model
{
	protected $table = "bitacoras";
   
   protected $fillable = ['descripcion', 'hora', 'fecha', 'usuarios'];
}
