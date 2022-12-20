<?php

namespace App\Http\Controllers;

use App\Models\Almacen;
use Illuminate\Http\Request;

class AlmacenController extends Controller
{
    
    public function index()
    {
        $almacenes = Almacen::all()->where('estado',1);
        return view('almacenes.index',compact('almacenes'));
    }

  
    public function create()
    {
        return view('almacenes.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'nombre_almacen'=>'required',
            
        ]);
        $almacen = new Almacen();
        $almacen->nombre_almacen = $request->nombre_almacen;
       
        $almacen->save();
        return redirect('/almacen');
    }

   
    public function show($id)
    {
       
    }

    
    public function edit($id)
    {
        $almacen = Almacen::findOrFail($id);
        return view('almacenes.editar',compact('almacen'));
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre_almacen'=>'required|max:30',
            
        ]);
        $almacen = Almacen::findOrFail($id);
        $almacen->nombre_almacen = $request->nombre_almacen;
        $almacen->update();
        return redirect('/almacen');//IR A ESA RUTA
    }

   
    public function destroy($id)
    {
        $almacen = Almacen::findOrFail($id);
        $almacen->estado = 0;
        $almacen->update();
        $almacenes = Almacen::all()->where('estado',1);
        return view('almacenes.index',compact('almacenes'));
    }
}
