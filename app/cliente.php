<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
	protected $table = "clientes";
  	protected $fillable = ['nomEmp','fotoEmp','apeEmp','NacEmp','DUIEmp','NITEmp','dirEmp','telEmp','sexEmp'];

}
