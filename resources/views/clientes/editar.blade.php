@extends('adminlte::page')
{{--  /*//implementa la vista de adminlte*/  --}}

@section('title', 'Dashboard')
{{--  //agregamos un titulo   --}}

@section('content_header')
    <h1>Cliente</h1> 
@stop
{{--  //Agregamos un header a nuestra pagina   --}}

@section('content')
   
<div class="container-fluid">
    <form method="POST" action="{{ route('cliente.update', ['id'=>$cliente['id']]) }}" autocomplete="off" class="needs-validation" novalidate>
        @method('PUT')
        @csrf
          <div class="card card-secondary card-outline">
              <div class="card-body">

                  <div class="row g-3">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="nombre_cliente">Nombre cliente</label> 
                              <input class="form-control" id="nombre_cliente" name="nombre_cliente" type="text" value="{{$cliente['nombre_cliente']}}"placeholder="ingrese el nombre " pattern=".*\S+.*" autofocus required/>
                              <div class="invalid-feedback">Introduzca nombre de la categoría.</div>
                              @error('nombre_cliente')
                                  <small class="text-danger"> {{$message}}</small>
                              @enderror  
                              <br>
                              <label for="correo_cliente">correo</label> 
                              <input class="form-control" id="correo_cliente" name="correo_cliente" type="text" value="{{$cliente['correo_cliente']}}"placeholder="ingrese el correo " pattern=".*\S+.*" autofocus required/> 
                              @error('correo_cliente')
                                  <small class="text-danger"> {{$message}}</small>
                              @enderror
                          </div>
                      </div>



                      <div class="col-md-6">
                        <div class="form-group">
                            <label for="apellido_cliente">apellido</label> 
                            <input class="form-control" id="apellido_cliente" name="apellido_cliente" type="text" value="{{$cliente['apellido_cliente']}}"placeholder="ingrese el apellido " pattern=".*\S+.*" autofocus required/>
                            @error('apellido_cliente')
                                  <small class="text-danger"> {{$message}}</small>
                              @enderror
                            <br>
                            <label for="telefono_cliente">Licencia</label> 

                            <input class="form-control" id="telefono_cliente" name="telefono_cliente" type="text" value="{{$cliente['telefono_cliente']}}"placeholder="ingrese el numero de telefono" pattern=".*\S+.*" autofocus required/>
                            @error('telefono_cliente')
                                <small class="text-danger"> {{$message}}</small>
                            @enderror
                     
                        </div>
                    </div>  




                      
                  </div>
                  
    
                    <div class="d-flex justify-content-end">
                        <div>
                          <button type="submit" class= "btn btn-success btn-sm">Actualizar</button> 
                          <a href="{{url('cliente')}}" class= "btn btn-secondary btn-sm">Regresar</a>  
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
