<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
   
    public function index()
    {
        $clientes = Cliente::all()->where('estado',1);
        return view('clientes.index',compact('clientes'));
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_cliente'=>'required',
            'apellido_cliente'=>'required',
            'correo_cliente'=>'required',
            'telefono_cliente'=>'required|numeric',
        ]);
        $cliente = new Cliente();
        $cliente->nombre_cliente = $request->nombre_cliente;
        $cliente->apellido_cliente = $request->apellido_cliente;
        $cliente->correo_cliente = $request->correo_cliente;
        $cliente->telefono_cliente = $request->telefono_cliente;
        $cliente->save();
        return redirect('/cliente');
    }

    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.editar',compact('cliente'));
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre_cliente'=>'required',
            'apellido_cliente'=>'required',
            'correo_cliente'=>'required',
            'telefono_cliente'=>'required|numeric',
        ]);
        
        $cliente = Cliente::findOrFail($id);
       
        $cliente->nombre_cliente = $request->nombre_cliente;
        $cliente->apellido_cliente = $request->apellido_cliente;
        $cliente->correo_cliente = $request->correo_cliente;
        $cliente->telefono_cliente = $request->telefono_cliente;
     
        $cliente->update();
        
        return redirect('/cliente');//IR A ESA RUTA
    }

    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->estado = 0;
        $cliente->update();
        $clientes = Cliente::all()->where('estado',1);
        return view('clientes.index',compact('clientes'));
    }
}
