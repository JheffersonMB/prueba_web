<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $productos = Producto::all()->where('estado',1);
        return view('welcome',compact('productos'));
    }
}
