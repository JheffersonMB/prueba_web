<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DeliveryController extends Controller
{
   
    public function index()
    {
     if (Auth::user()->hasPermissionTo('delivery')) 
     {
        $deliverys = Delivery::all()->where('estado',1);
        return view('deliverys.index',compact('deliverys'));
     }
     else{
        return "No puede acceder al sitio web";
     }
    }

    
    public function create()
    {
         return view('deliverys.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'nombre_delivery'=>'required',
            'apellido_delivery'=>'required',
            'telefono_delivery'=>'required|numeric',
            'nro_licencia'=>'required',
            'placa'=>'required',
        ]);
        $delivery = new Delivery();
        $delivery->nombre_delivery = $request->nombre_delivery;
        $delivery->apellido_delivery = $request->apellido_delivery;
        $delivery->telefono_delivery = $request->telefono_delivery;
        $delivery->nro_licencia = $request->nro_licencia;
        $delivery->placa = $request->placa;
        $delivery->save();
        return redirect('/delivery');
    }

    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $delivery = Delivery::findOrFail($id);
        return view('deliverys.editar',compact('delivery'));
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre_delivery'=>'required',
            'apellido_delivery'=>'required',
            'telefono_delivery'=>'required|numeric',
            'nro_licencia'=>'required',
            'placa'=>'required',
        ]);
        
        $delivery = Delivery::findOrFail($id);
       
         $delivery->nombre_delivery = $request->nombre_delivery;
         $delivery->apellido_delivery = $request->apellido_delivery;
         $delivery->telefono_delivery = $request->telefono_delivery;
         $delivery->nro_licencia = $request->nro_licencia;
         $delivery->placa = $request->placa;
     
        $delivery->update();
        
        return redirect('/delivery');//IR A ESA RUTA
    }

    
    public function destroy($id)
    {
        $delivery = Delivery::findOrFail($id);
        $delivery->estado = 0;
        $delivery->update();
        $deliverys = Delivery::all()->where('estado',1);
        return view('deliverys.index',compact('deliverys'));
    }
}
