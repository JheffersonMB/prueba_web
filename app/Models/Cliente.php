<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table ='clientes';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre_cliente','apellido_cliente','correo_cliente','telefono_cliente','estado'];
}
