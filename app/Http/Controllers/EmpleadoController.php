<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Ubicacion;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
   
    public function index()
    {
        $empleados = Empleado::all()->where('estado',1);
        return view('empleados.index',compact('empleados'));
    }

    
    public function create()
    {
        return view('empleados.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_empleado'=>'required',
            'apellido_empleado'=>'required',
            'direccion_empleado'=>'required',
            'telefono_empleado'=>'required|numeric',
        ]);
        $empleado = new Empleado();
        $empleado->nombre_empleado = $request->nombre_empleado;
        $empleado->apellido_empleado = $request->apellido_empleado;
        $empleado->direccion_empleado = $request->direccion_empleado;
        $empleado->telefono_empleado = $request->telefono_empleado;
        $empleado->save();
        return redirect('/empleado');
    }

   
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $empleado = Empleado::findOrFail($id);
        return view('empleados.editar',compact('empleado'));
    }

   
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre_empleado'=>'required',
            'apellido_empleado'=>'required',
            'direccion_empleado'=>'required',
            'telefono_empleado'=>'required|numeric',
        ]);
        
        $empleado = Empleado::findOrFail($id);
       
        $empleado->nombre_empleado = $request->nombre_empleado;
        $empleado->apellido_empleado = $request->apellido_empleado;
        $empleado->direccion_empleado = $request->direccion_empleado;
        $empleado->telefono_empleado = $request->telefono_empleado;
     
        $empleado->update();
        
        return redirect('/empleado');//IR A ESA RUTA
    }

    
    public function destroy($id)
    {
        $empleado = Empleado::findOrFail($id);
        $empleado->estado = 0;
        $empleado->update();
        $empleados = Empleado::all()->where('estado',1);
        return view('empleados.index',compact('empleados'));
    }
}
