<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetallePedido extends Model
{
    use HasFactory;

    protected $table = 'detalle_pedidos';
    protected $primaryKey ='id';
    protected $fillable = [
        'id_producto',
        'id_pedido',
        'cantidad',
        'sub_total'
    ];
    public $timestamps=false;
}
