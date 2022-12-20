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
                        <div class="card card-secondary card-outline">

                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-sm table-hover table-striped ">
                                    <thead>
                                        <tr>
                                            <th> id </th>
                                            <th> nombre </th>
                                            <th width="4%"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($roles as $rol)     
                                        <tr>
                                            <td>{{$rol['id']}}</td>
                                            <td>{{$rol['name']}}</td>
                                            <td class="text-center">
                                                <a href="#" data-href="{{asset('administracion/roles/restaurar')}}/{{$rol['id']}}" rel="tooltip" title="Restaurar" data-toggle="modal" data-target="#modal-confirma" class="btn btn-secondary btn-sm"><i class="fas fa-arrow-alt-circle-up"></i></a>
                                            </td>
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
                    <h4 class="modal-title">Restaurar Registro</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>¿Desea Restaurar este registro?</p>
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
    
