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
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-end">
                        <div class="form-group">
                            <a href="{{ route('producto.create') }}" class="btn btn-info btn-sm">crear registro</a>
                        </div>
                    </div>
                    <table id="example2" class="table table-bordered table-sm table-hover table-striped ">
                        <thead>
                            <tr>
                                <th width="2%">id</th>
                                <th width="20%">Nombre</th>
                                <th>descripcion</th>
                                <th width="10%">precio</th>
                                <th>stock</th>
                                <th>categoria</th>
                                <th>Img</th>
                                <th width="10%">action</th>
                            </tr>
                        </thead> 
                        <tbody>
                            @foreach ( $productos as $producto  )
                                 <tr>
                                     <td>{{$producto->id}}</td>
                                     <td>{{$producto->nombre_producto}}</td>
                                     <td>{{$producto->descripcion_producto}}</td>
                                     <td>{{$producto->precio_producto}}</td>
                                     <td>{{$producto->stock_producto}}</td>
                                     <td>{{$producto->categoria}}</td>
                                     <td><img width="30" height="30" src="{{asset('img/productos/'.$producto->id.'.jpg'.'?'.time())}}" alt=""></td>
                                     <td class="py-1 align-middle text-center">
                                        <div class="btn-group btn-group-sm">
                                          <a class="btn btn-warning" rel="tooltip" data-placement="top" title="Editar" href="{{ url('producto/edit/'.$producto->id)}}"><i class="fas fa-pencil-alt"></i></a>
                                          {{--  <a href="#" class="btn btn-danger" rel="tooltip" data-placement="top" title="Eliminar" data-href="{{url('categoria/destroy/'.$categoria->id)}}" data-toggle="modal" data-target="#modal-confirma"><i class="fas fa-trash"></i></a>  --}}
                                          <a class="btn btn-danger"  title="Eliminar" href="{{url('producto/destroy/'.$producto->id)}}"><i class="fas fa-trash"></i></a>
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
