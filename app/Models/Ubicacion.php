<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    use HasFactory;
    protected $table ='ubicaciones';
    protected $primaryKey = 'id';
    protected $fillable = ['latitud','longitud','url','estado'];
}
