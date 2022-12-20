<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
   
    public function index()
    {
        //
        $categorias = Categoria::all()->where('estado',1);
        return view('categorias.index',compact('categorias'));
    }

    
    public function create()
    {
        return view('categorias.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required|max:30',
        ]);
        $categoria = new Categoria();
        $categoria->nombre_categoria = $request->nombre;
        $categoria->save();
        return redirect('/categoria');
    }

    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $categoria = Categoria::findOrFail($id);
        return view('categorias.editar',compact('categoria'));
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre'=>'required|max:30',
        ]);
        $categoria = Categoria::findOrFail($id);
        $categoria->nombre_categoria = $request->nombre;
        $categoria->update();
        return redirect('/categoria');//IR A ESA RUTA
    }

   
    public function destroy($id)
    {
        $categoria = Categoria::findOrFail($id);
        $categoria->estado = 0;
        $categoria->update();
        $categorias = Categoria::all()->where('estado',1);
        return view('categorias.index',compact('categorias'));
    }
}
