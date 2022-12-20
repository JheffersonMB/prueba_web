@extends('adminlte::page')
{{--  /*//implementa la vista de adminlte*/  --}}

@section('title', 'Dashboard')
{{--  //agregamos un titulo   --}}

@section('content_header')
    <h1>Proveedores</h1> 
@stop
{{--  //Agregamos un header a nuestra pagina   --}}


{{--  contenido de la vista principal de proveedores  --}}
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-end">
                        <div class="form-group">
                            <a href="{{ route('proveedor.create') }}" class="btn btn-info btn-sm">crear registro</a>
                        </div>
                    </div>
                    <table id="example2" class="table table-bordered table-sm table-hover table-striped ">
                        <thead>
                            <tr>
                                <th width="2%">id</th>
                                <th width="20%">Razon Social</th>
                                <th>Direccion</th>
                                <th>Correo</th>
                                <th width="10%">Telefono</th>
                                <th width="10%">action</th>
                            </tr>
                        </thead> 
                        <tbody>
                            @foreach ( $proveedores as $proveedor  )
                                 <tr>
                                     <td>{{$proveedor->id}}</td>
                                     <td>{{$proveedor->razon_social}}</td>
                                     <td>{{$proveedor->direccion_proveedor}}</td>
                                     <td>{{$proveedor->correo_proveedor}}</td>
                                     <td>{{$proveedor->telefono_proveedor}}</td>
                                     <td class="py-1 align-middle text-center">
                                        <div class="btn-group btn-group-sm">
                                          <a class="btn btn-warning" rel="tooltip" data-placement="top" title="Editar" href="{{ url('proveedor/edit/'.$proveedor->id)}}"><i class="fas fa-pencil-alt"></i></a>
                                          {{--  <a href="#" class="btn btn-danger" rel="tooltip" data-placement="top" title="Eliminar" data-href="{{url('categoria/destroy/'.$categoria->id)}}" data-toggle="modal" data-target="#modal-confirma"><i class="fas fa-trash"></i></a>  --}}
                                          <a class="btn btn-danger"  title="Eliminar" href="{{url('proveedor/destroy/'.$proveedor->id)}}"><i class="fas fa-trash"></i></a>
                                        </div>
                                      </td>
                                 </tr> 
                            @endforeach
                        </tbody>
                     </table>
                </div>  
            </div>
        </div>
    </div>
</div>
    

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

  </div>

</div>
<script>
    $('#modal-confirma').on('show.bs.modal', function(e) {
        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));});
</script>        


@stop



@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop



@section('js')
    <script> console.log('Hi!'); </script>
@stop
