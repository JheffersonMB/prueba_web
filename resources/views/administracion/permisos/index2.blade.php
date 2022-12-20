@extends('adminlte::page')
{{--  /*//implementa la vista de adminlte*/  --}}

@section('title', 'Dashboard')
{{--  //agregamos un titulo   --}}

@section('content_header')
    <h1>Permisos</h1> 
@stop
{{--  //Agregamos un header a nuestra pagina   --}}

@section('content')
        <div class="container-fluid">

        <form action="{{asset('administracion/permisos/update')}}/{{$id_aux}}" method="POST">
            @csrf

          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
            <div class="col">
              <div class="card mb-3">
                <div class="card-header text-center">ADMINISTRACION</div>
                <div class="card-body">
                  <label class="fw-bold">Usuarios</label>
                  @foreach ($permisos as $permiso)
                    @if ($permiso->tipo==2)
                      @php($per=$permiso['id'])
                      @php($sw=0)
                      @foreach ($rol_permiso as $rol_per)
                          @if ($per==$rol_per['permission_id'])
                          @php($sw=1)
                          @endif
                      @endforeach
                          <div class="custom-control custom-switch">
                              <input class="custom-control-input" type="checkbox" id="{{$permiso['id']}}" @if ($sw==1){{'checked'}} @endif value ="{{$permiso['id']}}" name= "permisos[]"/>
                              <label class="custom-control-label font-weight-normal" for="{{$permiso['id']}}">{{$permiso['subname']}}</label>
                          </div>
                    @endif
                  @endforeach
                  <label class="fw-bold">Roles</label>
                  @foreach ($permisos as $permiso)
                    @if ($permiso->tipo==3)
                      @php($per=$permiso['id'])
                      @php($sw=0)
                      @foreach ($rol_permiso as $rol_per)
                          @if ($per==$rol_per['permission_id'])
                          @php($sw=1)
                          @endif
                      @endforeach
                          <div class="custom-control custom-switch">
                              <input class="custom-control-input" type="checkbox" id="{{$permiso['id']}}" @if ($sw==1){{'checked'}} @endif value ="{{$permiso['id']}}" name= "permisos[]"/>
                              <label class="custom-control-label font-weight-normal" for="{{$permiso['id']}}" >{{$permiso['subname']}}</label>
                          </div>
                    @endif
                  @endforeach
                </div>
              </div>
              <div class="card mb-3">
                <div class="card-header text-center">PEDIDO</div>
                <div class="card-body">
                  <label class="fw-bold">Pedido</label>
                  @foreach ($permisos as $permiso)
                    @if ($permiso->tipo==12)
                      @php($per=$permiso['id'])
                      @php($sw=0)
                      @foreach ($rol_permiso as $rol_per)
                          @if ($per==$rol_per['permission_id'])
                          @php($sw=1)
                          @endif
                      @endforeach
                          <div class="custom-control custom-switch">
                              <input class="custom-control-input" type="checkbox" id="{{$permiso['id']}}" @if ($sw==1){{'checked'}} @endif value ="{{$permiso['id']}}" name= "permisos[]"/>
                              <label class="custom-control-label font-weight-normal" for="{{$permiso['id']}}">{{$permiso['subname']}}</label>
                          </div>
                    @endif
                  @endforeach
                  <label class="fw-bold">Empleado</label>
                  @foreach ($permisos as $permiso)
                    @if ($permiso->tipo==8)
                      @php($per=$permiso['id'])
                      @php($sw=0)
                      @foreach ($rol_permiso as $rol_per)
                          @if ($per==$rol_per['permission_id'])
                          @php($sw=1)
                          @endif
                      @endforeach
                          <div class="custom-control custom-switch">
                              <input class="custom-control-input" type="checkbox" id="{{$permiso['id']}}" @if ($sw==1){{'checked'}} @endif value ="{{$permiso['id']}}" name= "permisos[]"/>
                              <label class="custom-control-label font-weight-normal" for="{{$permiso['id']}}">{{$permiso['subname']}}</label>
                          </div>
                    @endif
                  @endforeach
                  <label class="fw-bold">Repartidor</label>
                  @foreach ($permisos as $permiso)
                    @if ($permiso->tipo==9)
                      @php($per=$permiso['id'])
                      @php($sw=0)
                      @foreach ($rol_permiso as $rol_per)
                          @if ($per==$rol_per['permission_id'])
                          @php($sw=1)
                          @endif
                      @endforeach
                          <div class="custom-control custom-switch">
                              <input class="custom-control-input" type="checkbox" id="{{$permiso['id']}}" @if ($sw==1){{'checked'}} @endif value ="{{$permiso['id']}}" name= "permisos[]"/>
                              <label class="custom-control-label font-weight-normal" for="{{$permiso['id']}}">{{$permiso['subname']}}</label>
                          </div>
                    @endif
                  @endforeach
                </div>
              </div>
            </div>

            <div class="col">                       
              <div class="card mb-3">
                <div class="card-header text-center">PRODUCCION</div>
                <div class="card-body">
                  <label class="fw-bold">produccion</label>
                  @foreach ($permisos as $permiso)
                    @if ($permiso->tipo==13)
                      @php($per=$permiso['id'])
                      @php($sw=0)
                      @foreach ($rol_permiso as $rol_per)
                          @if ($per==$rol_per['permission_id'])
                          @php($sw=1)
                          @endif
                      @endforeach
                          <div class="custom-control custom-switch">
                              <input class="custom-control-input" type="checkbox" id="{{$permiso['id']}}" @if ($sw==1){{'checked'}} @endif value ="{{$permiso['id']}}" name= "permisos[]"/>
                              <label class="custom-control-label font-weight-normal" for="{{$permiso['id']}}">{{$permiso['subname']}}</label>
                          </div>
                    @endif
                  @endforeach
                  <label class="fw-bold">provedor</label>
                  @foreach ($permisos as $permiso)
                    @if ($permiso->tipo==4)
                      @php($per=$permiso['id'])
                      @php($sw=0)
                      @foreach ($rol_permiso as $rol_per)
                          @if ($per==$rol_per['permission_id'])
                          @php($sw=1)
                          @endif
                      @endforeach
                          <div class="custom-control custom-switch">
                              <input class="custom-control-input" type="checkbox" id="{{$permiso['id']}}" @if ($sw==1){{'checked'}} @endif value ="{{$permiso['id']}}" name= "permisos[]"/>
                              <label class="custom-control-label font-weight-normal" for="{{$permiso['id']}}">{{$permiso['subname']}}</label>
                          </div>
                    @endif
                  @endforeach
                  <label class="fw-bold">ingrediente</label>
                  @foreach ($permisos as $permiso)
                    @if ($permiso->tipo==7)
                      @php($per=$permiso['id'])
                      @php($sw=0)
                      @foreach ($rol_permiso as $rol_per)
                          @if ($per==$rol_per['permission_id'])
                          @php($sw=1)
                          @endif
                      @endforeach
                          <div class="custom-control custom-switch">
                              <input class="custom-control-input" type="checkbox" id="{{$permiso['id']}}" @if ($sw==1){{'checked'}} @endif value ="{{$permiso['id']}}" name= "permisos[]"/>
                              <label class="custom-control-label font-weight-normal" for="{{$permiso['id']}}">{{$permiso['subname']}}</label>
                          </div>
                    @endif
                  @endforeach
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card mb-3">
                <div class="card-header text-center">CLIENTE</div>
                <div class="card-body">
                  <label class="fw-bold">cliente</label>
                  @foreach ($permisos as $permiso)
                    @if ($permiso->tipo==5)
                      @php($per=$permiso['id'])
                      @php($sw=0)
                      @foreach ($rol_permiso as $rol_per)
                          @if ($per==$rol_per['permission_id'])
                          @php($sw=1)
                          @endif
                      @endforeach
                          <div class="custom-control custom-switch">
                              <input class="custom-control-input" type="checkbox" id="{{$permiso['id']}}" @if ($sw==1){{'checked'}} @endif value ="{{$permiso['id']}}" name= "permisos[]"/>
                              <label class="custom-control-label font-weight-normal" for="{{$permiso['id']}}">{{$permiso['subname']}}</label>
                          </div>
                    @endif
                  @endforeach
                </div>
              </div>

              <div class="card mb-3">
                <div class="card-header text-center">PRODUCTO</div>
                <div class="card-body">
                  <label class="fw-bold">producto</label>
                  @foreach ($permisos as $permiso)
                    @if ($permiso->tipo==14)
                      @php($per=$permiso['id'])
                      @php($sw=0)
                      @foreach ($rol_permiso as $rol_per)
                          @if ($per==$rol_per['permission_id'])
                          @php($sw=1)
                          @endif
                      @endforeach
                          <div class="custom-control custom-switch">
                              <input class="custom-control-input" type="checkbox" id="{{$permiso['id']}}" @if ($sw==1){{'checked'}} @endif value ="{{$permiso['id']}}" name= "permisos[]"/>
                              <label class="custom-control-label font-weight-normal" for="{{$permiso['id']}}">{{$permiso['subname']}}</label>
                          </div>
                    @endif
                  @endforeach
                  <label class="fw-bold">categoria</label>
                  @foreach ($permisos as $permiso)
                    @if ($permiso->tipo==6)
                      @php($per=$permiso['id'])
                      @php($sw=0)
                      @foreach ($rol_permiso as $rol_per)
                          @if ($per==$rol_per['permission_id'])
                          @php($sw=1)
                          @endif
                      @endforeach
                          <div class="custom-control custom-switch">
                              <input class="custom-control-input" type="checkbox" id="{{$permiso['id']}}" @if ($sw==1){{'checked'}} @endif value ="{{$permiso['id']}}" name= "permisos[]"/>
                              <label class="custom-control-label font-weight-normal" for="{{$permiso['id']}}">{{$permiso['subname']}}</label>
                          </div>
                    @endif
                  @endforeach

                </div>
              </div>

            </div>

            <div class="col">                            
              <div class="card mb-3">
                <div class="card-header text-center">REPORTES</div>
                <div class="card-body">
                  <label class="fw-bold">Reportes</label>
                  @foreach ($permisos as $permiso)
                    @if ($permiso->tipo==10)
                      @php($per=$permiso['id'])
                      @php($sw=0)
                      @foreach ($rol_permiso as $rol_per)
                          @if ($per==$rol_per['permission_id'])
                          @php($sw=1)
                          @endif
                      @endforeach
                          <div class="custom-control custom-switch">
                              <input class="custom-control-input" type="checkbox" id="{{$permiso['id']}}" @if ($sw==1){{'checked'}} @endif value ="{{$permiso['id']}}" name= "permisos[]"/>
                              <label class="custom-control-label font-weight-normal" for="{{$permiso['id']}}">{{$permiso['subname']}}</label>
                          </div>
                    @endif
                  @endforeach
                  
                  <label class="fw-bold">graficos</label>
                  @foreach ($permisos as $permiso)
                    @if ($permiso->tipo==11)
                      @php($per=$permiso['id'])
                      @php($sw=0)
                      @foreach ($rol_permiso as $rol_per)
                          @if ($per==$rol_per['permission_id'])
                          @php($sw=1)
                          @endif
                      @endforeach
                          <div class="custom-control custom-switch">
                              <input class="custom-control-input" type="checkbox" id="{{$permiso['id']}}" @if ($sw==1){{'checked'}} @endif value ="{{$permiso['id']}}" name= "permisos[]"/>
                              <label class="custom-control-label font-weight-normal" for="{{$permiso['id']}}">{{$permiso['subname']}}</label>
                          </div>
                    @endif
                  @endforeach
                </div>
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-end">
            <div>
              <button type="submit" class= "btn btn-success btn-sm">Guardar</button> 
              <a href="{{asset('administracion/roles')}}" class= "btn btn-secondary btn-sm">Regresar</a>  
            </div>
          </div>
      </form>  

        </div><!-- /.container-fluid -->
        @stop



        @section('css')
            <link rel="stylesheet" href="/css/admin_custom.css">
        @stop
        
        
        
        @section('js')
            <script> console.log('Hi!'); </script>
        @stop