@extends('adminlte::page')
{{--  /*//implementa la vista de adminlte*/  --}}

@section('title', 'Dashboard')
{{--  //agregamos un titulo   --}}

@section('content_header')
    <h1>INGREDIENTES</h1> 
@stop
{{--  //Agregamos un header a nuestra pagina   --}}

@section('content')
   
<div class="container-fluid">
   
    <form method="POST" action="{{url('ingrediente/update/'.$ingrediente['id'])}}" enctype="multipart/form-data" autocomplete="off">
        @method('PUT')
        @csrf
          <div class="card card-secondary card-outline">
              <div class="card-body">

                  <div class="row g-3">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="nombre_ingredientes">Nombre ingrediente</label> 
                              <input class="form-control" id="nombre_ingredientes" name="nombre_ingredientes" type="text" value="{{$ingrediente['nombre_ingredientes']}}"placeholder="ingrese el nombre " pattern=".*\S+.*" autofocus required/>
                              @error('nombre_ingredientes')
                                  <small class="text-danger"> {{$message}}</small>
                              @enderror  
                            
                              <label for="id_proveedor">proveedor</label> 
                              <select class="form-control"  id="id_proveedor" name="id_proveedor"  required>
                                <option selected disabled value="">Seleccionar categoría</option>
                                @foreach ($proveedores as $proveedor)
                                      <option value="{{$proveedor->id}}" 
                                        @if ($proveedor->id == $ingrediente->id_proveedor)
                                        {{'selected'}}
                                        @endif>{{$proveedor->razon_social}}</option>
                                @endforeach
                            </select>
                            @error('id_proveedor')
                            <small class="text-danger"> {{$message}}</small>
                            @enderror
<br>

                       
                          </div>
                      </div>



                      <div class="col-md-6">
                        <div class="form-group">
                            <label for="descripcion_ingredientes">descripcion</label> 
                            <input class="form-control" id="descripcion_ingredientes" name="descripcion_ingredientes" type="text" value="{{$ingrediente['descripcion_ingredientes']}}"placeholder="ingrese el descripcion " pattern=".*\S+.*" autofocus required/>
                            @error('descripcion_ingredientes')
                                  <small class="text-danger"> {{$message}}</small>
                              @enderror
                            <br>
                            <label for="id_almacen">almacen</label> 
                            <select class="form-control"  id="id_almacen" name="id_almacen"  required>
                                <option selected disabled value="">Seleccionar categoría</option>
                                @foreach ($almacenes as $almacen)
                                      <option value="{{$almacen->id}}" 
                                        @if ($almacen->id == $ingrediente->id_almacen)
                                        {{'selected'}}
                                        @endif>{{$almacen->nombre_almacen}}</option>
                                @endforeach
                            </select>
                            @error('id_almacen')
                            <small class="text-danger"> {{$message}}</small>
                            @enderror
                     
                        </div>
                    </div>  




                      
                </div>
                <div class="d-flex justify-content-end">
                    <div>
                      <button type="submit" class= "btn btn-success btn-sm">Guardar</button> 
                      <a href="{{route('ingrediente.index')}}" class= "btn btn-secondary btn-sm">Regresar</a>  
                    </div>
                </div>
         
            </div>

        </div>
    </form>
</div>  



@stop

{{--  //Contenido de nuestra pagina  --}}

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

{{--  //agregamos css  --}}

@section('js')
    <script> console.log('Hi!'); </script>
@stop
