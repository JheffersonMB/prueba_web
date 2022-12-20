<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $table = 'pedidos';
    protected $primaryKey ='id';
    protected $fillable = [
        'fecha_pedido',
        'fecha_entrega',
        'monto_total',
        'estadodelpedido',
        'estado',
        'id_ubicacion',
        'id_cliente',
        'id_empleado',
        'id_delivery',
        'id_categoria'
    ];
    public $timestamps=false;
}
