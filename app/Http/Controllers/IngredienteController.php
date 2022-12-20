<?php

namespace App\Http\Controllers;

use App\Models\Almacen;
use App\Models\Ingrediente;
use App\Models\Proveedor;
use Illuminate\Http\Request;

class IngredienteController extends Controller
{
    
    public function index()
    {
        $ingredientes=Ingrediente::select( 'ingredientes.id', 'ingredientes.nombre_ingredientes', 'ingredientes.descripcion_ingredientes', 'ingredientes.stock_ingredientes', 
        'ingredientes.id_proveedor', 'ingredientes.id_almacen', 
        'proveedores.razon_social', 'almacenes.nombre_almacen' ) 
        ->join('proveedores','ingredientes.id_proveedor','=','proveedores.id') 
        ->join('almacenes','ingredientes.id_almacen','=','almacenes.id') 
        ->where('ingredientes.estado','=',1) 
        ->orderBy('ingredientes.id','desc') 
        ->get(); 
        return view('ingredientes.index',compact('ingredientes'));

       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proveedores=Proveedor::all()->where('estado',1);
        $almacenes=Almacen::all()->where('estado',1);
       
        return view('ingredientes.create',compact('proveedores','almacenes')); 
        
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'nombre_ingredientes'=>'required',
            'descripcion_ingredientes'=>'required',
            'id_proveedor'=>'required',
            'id_almacen'=>'required',
        ]);
        $ingrediente = new Ingrediente();
        $ingrediente->nombre_ingredientes = $request->nombre_ingredientes;
        $ingrediente->descripcion_ingredientes = $request->descripcion_ingredientes;
        $ingrediente->id_proveedor = $request->id_proveedor;
        $ingrediente->id_almacen = $request->id_almacen;
        $ingrediente->save();
        //script para subir una imagen
        return redirect('/ingrediente');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $ingrediente = Ingrediente::findOrFail($id);
        $proveedores=Proveedor::all()->where('estado',1);
        $almacenes=Almacen::all()->where('estado',1);
        return view('ingredientes.editar',compact('ingrediente','proveedores','almacenes'));
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre_ingredientes'=>'required',
            'descripcion_ingredientes'=>'required',
            'id_proveedor'=>'required',
            'id_almacen'=>'required',
            
        ]);
        
        $ingrediente = Ingrediente::findOrFail($id);
       
        $ingrediente->nombre_ingredientes = $request->nombre_ingredientes;
        $ingrediente->descripcion_ingredientes = $request->descripcion_ingredientes;
        $ingrediente->id_proveedor = $request->id_proveedor;
        $ingrediente->id_almacen = $request->id_almacen;
        $ingrediente->update();
        return redirect('/ingrediente');//IR A ESA RUTA
    }

    
    public function destroy($id)
    {
        $ingrediente = Ingrediente::findOrFail($id);
        $ingrediente->estado = 0;
        $ingrediente->update();
        $ingredientes = Ingrediente::all()->where('estado',1);
        return view('ingredientes.index',compact('ingredientes'));
    }
}
