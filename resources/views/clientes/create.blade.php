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
    <form method="POST" action="{{ route('cliente.store') }}" autocomplete="off" class="needs-validation" novalidate>
        @method('POST')
        @csrf
          <div class="card card-secondary card-outline">
              <div class="card-body">

                  <div class="row g-3">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="nombre_cliente">Nombre </label> 
                              <input class="form-control" id="nombre_cliente" name="nombre_cliente" type="text" value="{{old('nombre_cliente')}}"placeholder="ingrese el nombre " pattern=".*\S+.*" autofocus required/>
                              @error('nombre_cliente')
                                  <small class="text-danger"> {{$message}}</small>
                              @enderror  
                              <br>
                              <label for="correo_cliente">Correo</label> 
                              <input class="form-control" id="correo_cliente" name="correo_cliente" type="text" value="{{old('correo_cliente')}}"placeholder="ingrese el correo " pattern=".*\S+.*" autofocus required/> 
                              @error('correo_cliente')
                                  <small class="text-danger"> {{$message}}</small>
                              @enderror
                              <br>
                          </div>
                      </div>



                      <div class="col-md-6">
                        <div class="form-group">
                            <label for="apellido_cliente">Apellido</label> 
                            <input class="form-control" id="apellido_cliente" name="apellido_cliente" type="text" value="{{old('apellido_cliente')}}"placeholder="ingrese el Apellido " pattern=".*\S+.*" autofocus required/>
                            @error('apellido_cliente')
                                  <small class="text-danger"> {{$message}}</small>
                              @enderror
                            <br>
                            <label for="telefono_cliente">Telefono</label> 

                            <input class="form-control" id="telefono_cliente" name="telefono_cliente" type="text" value="{{old('telefono_cliente')}}"placeholder="Telefono " pattern=".*\S+.*" autofocus required/>
                            @error('telefono_cliente')
                                <small class="text-danger"> {{$message}}</small>
                            @enderror
                     
                        </div>
                    </div>  




                      
                </div>
                  
    
                    <div class="d-flex justify-content-end">
                        <div>
                          <button type="submit" class= "btn btn-success btn-sm">Guardar</button> 
                          <a href="{{route('cliente.index')}}" class= "btn btn-secondary btn-sm">Regresar</a>  
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
