<?php

namespace App\Http\Controllers;

use App\Models\Ubicacion;
use Illuminate\Http\Request;

class UbicacionController extends Controller
{
   
    public function index()
    {
        $ubicaciones = Ubicacion::all()->where('estado',1);
        return view('ubicaciones.index',compact('ubicaciones'));
    }

    
    public function create()
    {
        return view('ubicaciones.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'latitud'=>'required',
            'longitud'=>'required',
            'url'=>'required',
            
        ]);
        $ubicacion = new Ubicacion();
        $ubicacion->latidud = $request->latidud;
        $ubicacion->longitud = $request->longitud;
        $ubicacion->url = $request->url;
   
        $ubicacion->save();
        return redirect('/ubicacion');
    }

    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $ubicacion = Ubicacion::findOrFail($id);
        return view('ubicaciones.editar',compact('ubicacion'));
    }

   
    public function update(Request $request, $id)
    {
        $request->validate([
            'latitud'=>'required',
            'longitud'=>'required',
            'url'=>'required',
          
        ]);
        
        $ubicacion = Ubicacion::findOrFail($id);
       
        $ubicacion->latitud = $request->latitud;
        $ubicacion->longitud = $request->longitud;
        $ubicacion->url = $request->url;
       
     
        $ubicacion->update();
        
        return redirect('/ubicacion');//IR A ESA RUTA
    }

   
    public function destroy($id)
    {
        $ubicacion = Ubicacion::findOrFail($id);
        $ubicacion->estado = 0;
        $ubicacion->update();
        $ubicaciones = Ubicacion::all()->where('estado',1);
        return view('ubicaciones.index',compact('ubicaciones'));
    }
}
