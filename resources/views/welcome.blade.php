@extends('layouts.basehome')

@section('content')
    
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">



    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"> Disponible</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Layout</a></li>
            <li class="breadcrumb-item active">Top Navigation</li>
          </ol>
          
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div  class="content">
    <div class="container">

      
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach ($productos as $producto)
           <div class="col">
              <div  class="card shadow-sm">
                <img src="{{asset('img/productos/'.$producto->id.'.jpg'.'?'.time())}}" class="card-img-top" alt="...">
                <div class="card-body">

                  <h4>{{$producto->nombre_producto}}</h2>

                  {{--  <p class="card-text" height="200">{{$producto->descripcion_producto}}</p>  --}}
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Detalle</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Agregar al Carrito</button>
                    </div>
                    <small class="text-muted">{{$producto->precio_producto}} Bs</small>
                  </div>
                </div>
              </div>
          </div> 
        @endforeach
          
            
         
      </div>
    

    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->


@endsection

          