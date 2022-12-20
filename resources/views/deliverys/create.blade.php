@extends('adminlte::page')
{{--  /*//implementa la vista de adminlte*/  --}}

@section('title', 'Dashboard')
{{--  //agregamos un titulo   --}}

@section('content_header')
<h1>Deliverys</h1> 

@stop
{{--  //Agregamos un header a nuestra pagina   --}}

@section('content')
<div class="container-fluid">
    <form method="POST" action="{{ route('delivery.store') }}" autocomplete="off" class="needs-validation" novalidate>
        @method('POST')
        @csrf
          <div class="card card-secondary card-outline">
              <div class="card-body">

                  <div class="row g-3">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="nombre_delivery">Nombre delivery</label> 
                              <input class="form-control" id="nombre_delivery" name="nombre_delivery" type="text" value="{{old('nombre_delivery')}}"placeholder="ingrese el nombre " pattern=".*\S+.*" autofocus required/>
                              @error('nombre_delivery')
                                  <small class="text-danger"> {{$message}}</small>
                              @enderror  
                              <br>
                              <label for="telefono_delivery">Telefono</label> 
                              <input class="form-control" id="telefono_delivery" name="telefono_delivery" type="text" value="{{old('telefono_delivery')}}"placeholder="ingrese el Telefono " pattern=".*\S+.*" autofocus required/> 
                              @error('telefono_delivery')
                                  <small class="text-danger"> {{$message}}</small>
                              @enderror
<br>
                              <label for="placa">Placa</label> 
                              <input class="form-control" id="placa" name="placa" type="text" value="{{old('placa')}}"placeholder="ingrese el la Placa " pattern=".*\S+.*" autofocus required/> 
                              @error('placa')
                                  <small class="text-danger"> {{$message}}</small>
                              @enderror
                       
                          </div>
                      </div>



                      <div class="col-md-6">
                        <div class="form-group">
                            <label for="apellido_delivery">Apellido</label> 
                            <input class="form-control" id="apellido_delivery" name="apellido_delivery" type="text" value="{{old('apellido_delivery')}}"placeholder="ingrese el Apellido " pattern=".*\S+.*" autofocus required/>
                            @error('apellido_delivery')
                                  <small class="text-danger"> {{$message}}</small>
                              @enderror
                            <br>
                            <label for="nro_licencia">Nro. de Licencia</label> 

                            <input class="form-control" id="nro_licencia" name="nro_licencia" type="text" value="{{old('nro_licencia')}}"placeholder="Licencia " pattern=".*\S+.*" autofocus required/>
                            @error('nro_licencia')
                                <small class="text-danger"> {{$message}}</small>
                            @enderror
                     
                        </div>
                    </div>  




                      
                </div>
                  
    
                    <div class="d-flex justify-content-end">
                        <div>
                          <button type="submit" class= "btn btn-success btn-sm">Guardar</button> 
                          <a href="{{route('delivery.index')}}" class= "btn btn-secondary btn-sm">Regresar</a>  
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
