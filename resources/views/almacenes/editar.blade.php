@extends('adminlte::page')
{{--  /*//implementa la vista de adminlte*/  --}}

@section('title', 'Dashboard')
{{--  //agregamos un titulo   --}}

@section('content_header')
    <h1>Dashboard</h1> 
@stop
{{--  //Agregamos un header a nuestra pagina   --}}

@section('content')
<div class="container-fluid">
    <form method="POST" action="{{ route('almacen.update', ['id'=>$almacen['id']]) }}" autocomplete="off" class="needs-validation" novalidate>
        @method('PUT')
        @csrf
          <div class="card card-secondary card-outline">
              <div class="card-body">

                  <div class="row g-3">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="nombre_almacen">Nombre almacen</label> 
                              <input class="form-control" id="nombre_almacen" name="nombre_almacen" type="text" value="{{$almacen['nombre_almacen']}}"placeholder="ingrese el nombre " pattern=".*\S+.*" autofocus required/>
                              <div class="invalid-feedback">Introduzca nombre de la categoría.</div>
                              @error('nombre_almacen')
                                  <small class="text-danger"> {{$message}}</small>
                              @enderror  
                          </div>
                      </div>
                  </div>
                  
    
                    <div class="d-flex justify-content-end">
                        <div>
                          <button type="submit" class= "btn btn-success btn-sm">Guardar</button> 
                          <a href="{{url('almacen')}}" class= "btn btn-secondary btn-sm">Regresar</a>  
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
