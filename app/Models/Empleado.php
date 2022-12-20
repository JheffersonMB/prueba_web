<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    protected $table ='empleados';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre_empleado','apellido_empleado','direccion_empleado','telefono_empleado','estado'];
}
