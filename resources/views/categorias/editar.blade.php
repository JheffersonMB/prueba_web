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
    <form method="POST" action="{{ route('categoria.update', ['id'=>$categoria['id']]) }}" autocomplete="off" class="needs-validation" novalidate>
      @method('PUT')
      @csrf
        <div class="card card-secondary card-outline">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="nombre">Nombre</label> 
                            <input class="form-control" id="nombre" name="nombre" type="text" value="{{$categoria['nombre_categoria']}}"placeholder="ingrese el nombre " pattern=".*\S+.*"required/>
                            <div class="invalid-feedback">Introduzca nombre de la categoría.</div>
                            @error('nombre')
                              <small class="text-danger"> {{$message}}</small>
                            @enderror
                        </div>
                    </div>

                </div>

                  <div class="d-flex justify-content-end">
                      <div>
                        <button type="submit" class= "btn btn-success btn-sm">Actualizar</button> 
                        <a href="{{url('categoria')}}" class= "btn btn-secondary btn-sm">Regresar</a>  
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
