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
    <form method="POST" action="{{ route('empleado.update', ['id'=>$empleado['id']]) }}" autocomplete="off" class="needs-validation" novalidate>
        @method('PUT')
        @csrf
          <div class="card card-secondary card-outline">
              <div class="card-body">

                  <div class="row g-3">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="nombre_empleado">Nombre empleado</label> 
                              <input class="form-control" id="nombre_empleado" name="nombre_empleado" type="text" value="{{$empleado['nombre_empleado']}}"placeholder="ingrese el nombre " pattern=".*\S+.*" autofocus required/>
                              <div class="invalid-feedback">Introduzca nombre de la categoría.</div>
                              @error('nombre_empleado')
                                  <small class="text-danger"> {{$message}}</small>
                              @enderror  
                              <br>
                              <label for="direccion_empleado">Direccion</label> 
                              <input class="form-control" id="direccion_empleado" name="direccion_empleado" type="text" value="{{$empleado['direccion_empleado']}}"placeholder="ingrese la direccion " pattern=".*\S+.*" autofocus required/> 
                              @error('direccion_empleado')
                                  <small class="text-danger"> {{$message}}</small>
                              @enderror
                          </div>
                      </div>



                      <div class="col-md-6">
                        <div class="form-group">
                            <label for="apellido_empleado">apellido</label> 
                            <input class="form-control" id="apellido_empleado" name="apellido_empleado" type="text" value="{{$empleado['apellido_empleado']}}"placeholder="ingrese el apellido " pattern=".*\S+.*" autofocus required/>
                            @error('apellido_empleado')
                                  <small class="text-danger"> {{$message}}</small>
                              @enderror
                            <br>
                            <label for="telefono_empleado">Licencia</label> 

                            <input class="form-control" id="telefono_empleado" name="telefono_empleado" type="text" value="{{$empleado['telefono_empleado']}}"placeholder="ingrese el numero de telefono" pattern=".*\S+.*" autofocus required/>
                            @error('telefono_empleado')
                                <small class="text-danger"> {{$message}}</small>
                            @enderror
                     
                        </div>
                    </div>  




                      
                  </div>
                  
    
                    <div class="d-flex justify-content-end">
                        <div>
                          <button type="submit" class= "btn btn-success btn-sm">Actualizar</button> 
                          <a href="{{url('empleado')}}" class= "btn btn-secondary btn-sm">Regresar</a>  
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
