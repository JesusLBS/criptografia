<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

class empleados extends Model
{
    //
    protected $table="empleados";
	protected $primaryKey = 'id_empleado';                 
    protected $fillable=["id_empleado", "name_empleado", "email_empleado", 
                         "password_empleado"];

}
 