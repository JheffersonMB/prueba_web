@extends('adminlte::page')
{{--  /*//implementa la vista de adminlte*/  --}}

@section('title', 'Dashboard')
{{--  //agregamos un titulo   --}}

@section('content_header')
    <h1>Productos</h1> 
@stop
{{--  //Agregamos un header a nuestra pagina   --}}

@section('content')
  
<div class="container-fluid">
    <form method="POST" action="{{url('producto/update/'.$producto['id'])}}" enctype="multipart/form-data" autocomplete="off">
        @method('PUT')
        @csrf
          <div class="card card-secondary card-outline">
              <div class="card-body">

                  <div class="row g-3">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="nombre_producto">Nombre producto</label> 
                              <input class="form-control" id="nombre_producto" name="nombre_producto" type="text" value="{{$producto['nombre_producto']}}"placeholder="ingrese el nombre " pattern=".*\S+.*" autofocus required/>
                              @error('nombre_producto')
                                  <small class="text-danger"> {{$message}}</small>
                              @enderror  
                              <br>
                              <label for="precio_producto">precio</label> 
                              <input class="form-control" id="precio_producto" name="precio_producto" type="text" value="{{$producto['precio_producto']}}"placeholder="ingrese el precio " pattern=".*\S+.*" autofocus required/> 
                              @error('precio_producto')
                                  <small class="text-danger"> {{$message}}</small>
                              @enderror
<br>
                            
                       
                          </div>
                      </div>



                      <div class="col-md-6">
                        <div class="form-group">
                            <label for="descripcion_producto">descripcion</label> 
                            <input class="form-control" id="descripcion_producto" name="descripcion_producto" type="text" value="{{$producto['descripcion_producto']}}"placeholder="ingrese el descripcion " pattern=".*\S+.*" autofocus required/>
                            @error('descripcion_producto')
                                  <small class="text-danger"> {{$message}}</small>
                              @enderror
                            <br>
                            <label for="id_categoria">categoria</label> 
                            <select class="form-control"  id="id_categoria" name="id_categoria"  required>
                                <option selected disabled value="">Seleccionar categoría</option>
                                @foreach ($categorias as $categoria)
                                      <option value="{{$categoria->id}}" 
                                        @if ($categoria->id == $producto->id_categoria)
                                        {{'selected'}}
                                        @endif>{{$categoria->nombre_categoria}}</option>
                                @endforeach
                            </select>
                            @error('id_categoria')
                            <small class="text-danger"> {{$message}}</small>
                            @enderror
                     
                        </div>
                    </div>  




                      
                </div>
                  
    
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                        <label for="customFile">Previsualizar imagen</label>
                            <div class="row col-sm-6">
                                <img id="blah" class="img-fluid" src="{{asset('img/productos/'.$producto['id'].'.jpg')}}" alt="Photo" style="max-height: 160px;">
                            </div>
                        </div>
                      </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="custom-file">
                            <input style="cursor: pointer;" type="file" id="img_producto" name="img_producto" class="custom-file-input" accept="image/jpeg,jpg" >
                           
                            @error('img_producto')
                            <small class="text-danger"> {{$message}}</small>
                            @enderror
                            <label class="custom-file-label align-middle" for="img_producto" data-browse="Buscar">Seleccione una foto</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex justify-content-end">
                            <div class="mt-4">
                                <button type="submit" class= "btn btn-success btn-sm">Guardar</button>
                                <a href="{{ route('producto.index') }}" class= "btn btn-secondary btn-sm">Regresar</a>
                            </div>
                        </div>
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
    <script type="text/javascript">
        function readImage (input) {
            if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
            }
        }
        $("#img_producto").change(function () {
            readImage(this);
        });
    </script>
@stop
