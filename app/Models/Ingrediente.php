<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    use HasFactory;
    protected $table = 'ingredientes';
    protected $primaryKey ='id';
    protected $fillable = [
        'nombre_ingredientes',
        'descripcion_ingredientes',
        'stock_ingredientes',
        'id_proveedor',
        'id_almacen',
        'estado'
    ];
    public $timestamps=true;
}
