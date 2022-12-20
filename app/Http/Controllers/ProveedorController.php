<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
  
    public function index()
    {
        $proveedores = Proveedor::all()->where('estado',1);
        return view('proveedores.index',compact('proveedores'));
    }

   
    public function create()
    {
        return view('proveedores.create');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'razon_social'=>'required|max:30',
            'telefono_proveedor'=>'required|numeric',
            'direccion_proveedor'=>'required',
            'correo_proveedor'=>'required',
        ]);
        $proveedor = new Proveedor();
        $proveedor->razon_social = $request->razon_social;
        $proveedor->telefono_proveedor = $request->telefono_proveedor;
        $proveedor->direccion_proveedor = $request->direccion_proveedor;
        $proveedor->correo_proveedor = $request->correo_proveedor;
        $proveedor->save();
        return redirect('/proveedor');
    }

   
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $proveedor = Proveedor::findOrFail($id);
        return view('proveedores.editar',compact('proveedor'));
    }

   
    public function update(Request $request, $id)
    {
        $request->validate([
            'razon_social'=>'required|max:30',
            'telefono_proveedor'=>'required|numeric',
            'direccion_proveedor'=>'required',
            'correo_proveedor'=>'required',
        ]);
        $proveedor = Proveedor::findOrFail($id);
        $proveedor->razon_social = $request->razon_social;
        $proveedor->telefono_proveedor = $request->telefono_proveedor;
        $proveedor->direccion_proveedor = $request->direccion_proveedor;
        $proveedor->correo_proveedor = $request->correo_proveedor;
        $proveedor->update();
        return redirect('/proveedor');//IR A ESA RUTA
    }

   
    public function destroy($id)
    {
        $proveedor = Proveedor::findOrFail($id);
        $proveedor->estado = 0;
        $proveedor->update();
        $proveedores = Proveedor::all()->where('estado',1);
        return view('proveedores.index',compact('proveedores'));
    }
}
