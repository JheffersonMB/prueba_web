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
              <div class="row">
                  <div class="col-12">
                      <div class="card">

                          <!-- /.card-header -->
                          <div class="card-body">
                              <div class="d-flex justify-content-end">
                                  <div class="form-group">
                                      <a class="btn btn-info btn-sm" href="{{asset('administracion/roles/create')}}"><i class="fas fa-plus"></i>&nbsp;&nbsp;Agregar</a>
                                      <a class="btn btn-danger btn-sm" href="{{asset('administracion/roles/eliminados')}}"><i class="far fa-trash-alt"></i>&nbsp;Eliminados</a>
                                  </div>
                              </div>
                              <table id="example2" class="table table-bordered table-sm table-hover table-striped ">
                                  <thead>
                                      <tr>
                                        <th> id </th>
                                        <th> nombre </th>
                   
                                          @can('producto.producto')
                                              <th width="7px">Acción</th>
                                          @else
                                              @can('producto', true)
                                                  <th width="7px">Acción</th>
                                              @else
                                                <th width="7px">Acción</th>
                                              @endcan
                                          @endcan
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @foreach ($roles as $rol)
                                          <tr>
                                            <td>{{$rol['id']}}</td>
                                            <td>{{$rol['name']}}</td>
                                                  
                                            
                                            @can('producto.producto')
                                              <td class="py-1 align-middle text-center">
                                                <div class="btn-group btn-group-sm">
                                                    <a class="btn btn-success" rel="tooltip" data-placement="top" title="Asignar permisos" href="{{asset('administracion/permisos')}}/{{$rol['id']}}"><i class="fas fa-user-lock"></i></a>
                                                  <a class="btn btn-warning" rel="tooltip" data-placement="top" title="Editar" href="{{asset('administracion/roles/edit')}}/{{$rol['id']}}"><i class="fas fa-pencil-alt"></i></a>
                                                    @can('producto', true)
                                                      <a href="#" class="btn btn-danger" rel="tooltip" data-placement="top" title="Eliminar" data-href="{{asset('administracion/roles/destroy')}}/{{$rol['id']}}" data-toggle="modal" data-target="#modal-confirma"><i class="fas fa-trash"></i></a>
                                                    @endcan
                                                </div>
                                              </td>
                                              @else
                                                @can('producto', true)
                                                  <td class="py-1 align-middle text-center">
                                                    <div class="btn-group btn-group-sm">
                                                      <a class="btn btn-success" rel="tooltip" data-placement="top" title="Asignar permisos" href="{{asset('administracion/permisos')}}/{{$rol['id']}}"><i class="fas fa-user-lock"></i></a>
                                                      <a href="#" class="btn btn-danger" rel="tooltip" data-placement="top" title="Eliminar" data-href="{{asset('administracion/roles/destroy')}}/{{$rol['id']}}" data-toggle="modal" data-target="#modal-confirma"><i class="fas fa-trash"></i></a>
                                                    </div>
                                                  </td>
                                                @else
                                                <td class="py-1 align-middle text-center">
                                                    <div class="btn-group btn-group-sm">
                                                     <a class="btn btn-success" rel="tooltip" data-placement="top" title="Asignar permisos" href="{{asset('administracion/permisos')}}/{{$rol['id']}}"><i class="fas fa-user-lock"></i></i></a>
                                                    </div>
                                                </td>
                                                 @endcan
                                              @endcan
                                          </tr>
                                      @endforeach
                                  </tbody>
                              </table>
                          </div>
                          <!-- /.card-body -->

                      </div>
                      <!-- /.card -->

                  </div>
                  <!-- /.col -->
              </div>
              <!-- /.row -->
          </div>
          <!-- /.container-fluid -->


  <!-- Modal -->
  <div class="modal fade" id="modal-confirma" data-backdrop="static">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Eliminar Registro</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>¿Desea Eliminar este registro?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-danger btn-ok btn-sm">Confirmar</a>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
    <!-- /.modal -->

    @stop



    @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">
    @stop
    
    
    
    @section('js')
        <script> console.log('Hi!'); </script>
    @stop
    
