<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table = 'productos';
    protected $primaryKey ='id';
    protected $fillable = [
        'nombre_producto',
        'descripcion_producto',
        'precio_producto',
        'stock_producto',
        'id_categoria',
        'estado'
    ];
    public $timestamps=true;
}
