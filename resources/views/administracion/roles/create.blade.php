@extends('adminlte::page')
{{--  /*//implementa la vista de adminlte*/  --}}

@section('title', 'Dashboard')
{{--  //agregamos un titulo   --}}

@section('content_header')
    <h1>Roles</h1> 
@stop
{{--  //Agregamos un header a nuestra pagina   --}}

@section('content')
        <div class="container-fluid">
            <form method="POST" action="{{asset('administracion/roles/store')}}" autocomplete="off" class="needs-validation" novalidate>
              @csrf
                <div class="card card-secondary card-outline">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="nombre">Nombre</label> 
                                    <input class="form-control" id="nombre" name="nombre" type="text" value="{{old('nombre')}}"placeholder="ingrese su nombre " pattern=".*\S+.*" autofocus required />
                                    <div class="invalid-feedback">Introduzca nombre del rol.</div>
                                    @error('nombre')
                                        <div class="alert alert-warning">
                                        {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>
        
                        </div>
          
                          <div class="d-flex justify-content-end">
                              <div>
                                <button type="submit" class= "btn btn-success btn-sm">Guardar</button> 
                                <a href="{{asset('administracion/roles')}}" class= "btn btn-secondary btn-sm">Regresar</a>  
                              </div>
                          </div>

                    </div><!--/body card-->

                </div><!--/CARD FIN-->
            </form>

        </div><!-- /.container-fluid -->
   

        @stop



        @section('css')
            <link rel="stylesheet" href="/css/admin_custom.css">
        @stop
        
        
        
        @section('js')
            <script> console.log('Hi!'); </script>
        @stop
        
    