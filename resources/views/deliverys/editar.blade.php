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
    <form method="POST" action="{{ route('delivery.update', ['id'=>$delivery['id']]) }}" autocomplete="off" class="needs-validation" novalidate>
        @method('PUT')
        @csrf
          <div class="card card-secondary card-outline">
              <div class="card-body">

                  <div class="row g-3">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="nombre_delivery">Nombre delivery</label> 
                              <input class="form-control" id="nombre_delivery" name="nombre_delivery" type="text" value="{{$delivery['nombre_delivery']}}"placeholder="ingrese el nombre " pattern=".*\S+.*" autofocus required/>
                              <div class="invalid-feedback">Introduzca nombre de la categoría.</div>
                              @error('nombre_delivery')
                                  <small class="text-danger"> {{$message}}</small>
                              @enderror  
                              <br>
                              <label for="telefono_delivery">Telefono</label> 
                              <input class="form-control" id="telefono_delivery" name="telefono_delivery" type="text" value="{{$delivery['telefono_delivery']}}"placeholder="ingrese el Telefono " pattern=".*\S+.*" autofocus required/> 
                              @error('telefono_delivery')
                                  <small class="text-danger"> {{$message}}</small>
                              @enderror

                              <br>
                              <label for="placa">Placa</label> 
                              <input class="form-control" id="placa" name="placa" type="text" value="{{$delivery['placa']}}"placeholder="ingrese la placa " pattern=".*\S+.*" autofocus required/> 
                              @error('placa')
                                  <small class="text-danger"> {{$message}}</small>
                              @enderror
                       
                          </div>
                      </div>



                      <div class="col-md-6">
                        <div class="form-group">
                            <label for="apellido_delivery">apellido</label> 
                            <input class="form-control" id="apellido_delivery" name="apellido_delivery" type="text" value="{{$delivery['apellido_delivery']}}"placeholder="ingrese el apellido " pattern=".*\S+.*" autofocus required/>
                            @error('apellido_delivery')
                                  <small class="text-danger"> {{$message}}</small>
                              @enderror
                            <br>
                            <label for="nro_licencia">Licencia</label> 

                            <input class="form-control" id="nro_licencia" name="nro_licencia" type="text" value="{{$delivery['nro_licencia']}}"placeholder="ingrese la Licencia " pattern=".*\S+.*" autofocus required/>
                            @error('nro_licencia')
                                <small class="text-danger"> {{$message}}</small>
                            @enderror
                     
                        </div>
                    </div>  




                      
                  </div>
                  
    
                    <div class="d-flex justify-content-end">
                        <div>
                          <button type="submit" class= "btn btn-success btn-sm">Actualizar</button> 
                          <a href="{{url('delivery')}}" class= "btn btn-secondary btn-sm">Regresar</a>  
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
