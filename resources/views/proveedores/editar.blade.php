@extends('adminlte::page')
{{--  /*//implementa la vista de adminlte*/  --}}

@section('title', 'Dashboard')
{{--  //agregamos un titulo   --}}

@section('content_header')
    <h1>Proveedores</h1> 
@stop
{{--  //Agregamos un header a nuestra pagina   --}}

@section('content')
<div class="container-fluid">
    <form method="POST" action="{{ route('proveedor.update', ['id'=>$proveedor['id']]) }}" autocomplete="off" class="needs-validation" novalidate>
        @method('PUT')
        @csrf
          <div class="card card-secondary card-outline">
              <div class="card-body">

                  <div class="row g-3">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="razon_social">Nombre Proveedor</label> 
                              <input class="form-control" id="razon_social" name="razon_social" type="text" value="{{$proveedor['razon_social']}}"placeholder="ingrese el nombre " pattern=".*\S+.*" autofocus required/>
                              <div class="invalid-feedback">Introduzca nombre de la categoría.</div>
                              @error('razon_social')
                                  <small class="text-danger"> {{$message}}</small>
                              @enderror  
                              <br>
                              <label for="telefono_proveedor">Telefono</label> 
                              <input class="form-control" id="telefono_proveedor" name="telefono_proveedor" type="text" value="{{$proveedor['telefono_proveedor']}}"placeholder="ingrese el Telefono " pattern=".*\S+.*" autofocus required/> 
                              @error('telefono_proveedor')
                                  <small class="text-danger"> {{$message}}</small>
                              @enderror
                       
                          </div>
                      </div>



                      <div class="col-md-6">
                        <div class="form-group">
                            <label for="direccion_proveedor">Direccion</label> 
                            <input class="form-control" id="direccion_proveedor" name="direccion_proveedor" type="text" value="{{$proveedor['direccion_proveedor']}}"placeholder="ingrese la Direccion " pattern=".*\S+.*" autofocus required/>
                            @error('direccion_proveedor')
                                  <small class="text-danger"> {{$message}}</small>
                              @enderror
                            <br>
                            <label for="razon_social">Correo</label> 

                            <input class="form-control" id="correo_proveedor" name="correo_proveedor" type="text" value="{{$proveedor['correo_proveedor']}}"placeholder="ingrese el Correo " pattern=".*\S+.*" autofocus required/>
                            @error('correo_proveedor')
                                <small class="text-danger"> {{$message}}</small>
                            @enderror
                     
                        </div>
                    </div>  




                      
                  </div>
                  
    
                    <div class="d-flex justify-content-end">
                        <div>
                          <button type="submit" class= "btn btn-success btn-sm">Guardar</button> 
                          <a href="{{url('proveedor')}}" class= "btn btn-secondary btn-sm">Regresar</a>  
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
