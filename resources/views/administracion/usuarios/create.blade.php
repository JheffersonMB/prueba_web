@extends('adminlte::page')
{{--  /*//implementa la vista de adminlte*/  --}}

@section('title', 'Dashboard')
{{--  //agregamos un titulo   --}}

@section('content_header')
    <h1>Usuario</h1> 
@stop
{{--  //Agregamos un header a nuestra pagina   --}}

@section('content')
        <div class="container-fluid">
            <form method="POST" action="{{asset('administracion/usuarios/store')}}" autocomplete="off" class="needs-validation" novalidate>
              @csrf
                <div class="card card-secondary card-outline">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="nombre">Nombre</label> 
                                    <input class="form-control" id="nombre" name="nombre" type="text" value="{{old('nombre')}}"placeholder="ingrese su nombre " pattern=".*\S+.*" autofocus required />
                                    <div class="invalid-feedback">Introduzca nombre de usuario.</div>
                                    @error('nombre')
                                        <div class="alert alert-warning">
                                        {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Email</label> 
                                    <input class="form-control" id="email" name="email" type="text" pattern=".*\S+.*" placeholder="ingrese su nombre "value="{{old('email')}}" required />
                                    <div class="invalid-feedback">Por favor, coloque su nombre.</div>
                                    @error('email')
                                        <div class="alert alert-warning">
                                        {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Contrase??a</label>
                                    <input class="form-control" id="contrase??a" name="contrase??a" type="password"placeholder="ingrese su nombre " pattern=".*\S+.*" value="{{old('contrase??a')}}" required/>
                                    <div class="invalid-feedback">Introduzca una contrase??a.</div>
                                    @error('contrase??a')
                                        <div class="alert alert-warning">
                                        {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Repita contrase??a</label> 
                                    <input class="form-control" id="confirmar_contrase??a" name="confirmar_contrase??a" type="password" pattern=".*\S+.*" value="{{old('confirmar_contrase??a')}}" required/>
                                    <div class="invalid-feedback">Repita la contrase??a, porfavor.</div>
                                    @error('confirmar_contrase??a')
                                        <div class="alert alert-warning">
                                        {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
               
                            <div class="col-sm-6">
                                <div class="form-group">
                                <label>Rol</label>
                                    <select class="form-control"  id="id_rol" name="id_rol"  required>
                                    <option selected disabled value="">Seleccionar rol</option>
                                        @foreach ($roles as $rol)
                                        <option value="{{$rol->name}}">{{$rol->name}}</option>
                                        @endforeach
                                    </select>

                                    <div class="invalid-feedback">Seleccione un rol.</div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                   
                                </div>
                            </div>
                        </div>

                          <div class="d-flex justify-content-end">
                              <div>
                                <button type="submit" class= "btn btn-success btn-sm">Guardar</button> 
                                <a href="{{asset('administracion')}}" class= "btn btn-secondary btn-sm">Regresar</a>  
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
            <script>
            $('#modal-confirma').on('show.bs.modal', function(e) {
                $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));});
        </script>  
        @stop
    
