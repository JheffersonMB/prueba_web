@extends('adminlte::page')
{{--  /*//implementa la vista de adminlte*/  --}}

@section('title', 'Dashboard')
{{--  //agregamos un titulo   --}}

@section('content_header')
    <h1>Empleados</h1> 
@stop
{{--  //Agregamos un header a nuestra pagina   --}}

@section('content')
   
<div class="container-fluid">
    <form method="POST" action="{{ route('empleado.store') }}" autocomplete="off" class="needs-validation" novalidate>
        @method('POST')
        @csrf
          <div class="card card-secondary card-outline">
              <div class="card-body">

                  <div class="row g-3">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="nombre_empleado">Nombre </label> 
                              <input class="form-control" id="nombre_empleado" name="nombre_empleado" type="text" value="{{old('nombre_empleado')}}"placeholder="ingrese el nombre " pattern=".*\S+.*" autofocus required/>
                              @error('nombre_empleado')
                                  <small class="text-danger"> {{$message}}</small>
                              @enderror  
                              <br>
                              <label for="direccion_empleado">Direccion</label> 
                              <input class="form-control" id="direccion_empleado" name="direccion_empleado" type="text" value="{{old('direccion_empleado')}}"placeholder="ingrese la direccion " pattern=".*\S+.*" autofocus required/> 
                              @error('direccion_empleado')
                                  <small class="text-danger"> {{$message}}</small>
                              @enderror
                              <br>
                          </div>
                      </div>



                      <div class="col-md-6">
                        <div class="form-group">
                            <label for="apellido_empleado">Apellido</label> 
                            <input class="form-control" id="apellido_empleado" name="apellido_empleado" type="text" value="{{old('apellido_empleado')}}"placeholder="ingrese el Apellido " pattern=".*\S+.*" autofocus required/>
                            @error('apellido_empleado')
                                  <small class="text-danger"> {{$message}}</small>
                              @enderror
                            <br>
                            <label for="telefono_empleado">Telefono</label> 

                            <input class="form-control" id="telefono_empleado" name="telefono_empleado" type="text" value="{{old('telefono_empleado')}}"placeholder="Telefono " pattern=".*\S+.*" autofocus required/>
                            @error('telefono_empleado')
                                <small class="text-danger"> {{$message}}</small>
                            @enderror
                     
                        </div>
                    </div>  




                      
                </div>
                  
    
                    <div class="d-flex justify-content-end">
                        <div>
                          <button type="submit" class= "btn btn-success btn-sm">Guardar</button> 
                          <a href="{{route('empleado.index')}}" class= "btn btn-secondary btn-sm">Regresar</a>  
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
