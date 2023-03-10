<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;
    protected $table ='deliverys';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre_delivery','apellido_delivery','telefono_delivery','nro_licencia','placa','estado'];
}
