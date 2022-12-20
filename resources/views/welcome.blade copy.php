<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


        <!-- Styles -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="{{asset('/libreria/fontawesome-free/css/all.min.css')}}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset('/libreria/dist/css/adminlte.min.css')}}">
      
    </head>
   
 
    <body class="hold-transition layout-top-nav">
        <div class="wrapper">
          

          <!-- Navbar -->
          <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
        
            <div class="container">
              <a href="../../index3.html" class="navbar-brand">
                <img src="{{asset('vendor/adminlte/dist/img/hotburger.jpg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">HotBurger</span>
              </a>
        
              <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
        
              <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a href="index3.html" class="nav-link">Home</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">Contact</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Dropdown</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                      <li><a href="#" class="dropdown-item">Some action </a></li>
                      <li><a href="#" class="dropdown-item">Some other action</a></li>
        
                      <li class="dropdown-divider"></li>
        
                      <!-- Level two dropdown-->
                      <li class="dropdown-submenu dropdown-hover">
                        <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Hover for action</a>
                        <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                          <li>
                            <a tabindex="-1" href="#" class="dropdown-item">level 2</a>
                          </li>
        
                          <!-- Level three dropdown-->
                          <li class="dropdown-submenu">
                            <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                            <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                              <li><a href="#" class="dropdown-item">3rd level</a></li>
                              <li><a href="#" class="dropdown-item">3rd level</a></li>
                            </ul>
                          </li>
                          <!-- End Level three -->
        
                          <li><a href="#" class="dropdown-item">level 2</a></li>
                          <li><a href="#" class="dropdown-item">level 2</a></li>
                        </ul>
                      </li>
                      <!-- End Level two -->
                    </ul>
                  </li>
                </ul>
        
                <!-- SEARCH FORM -->
                <form class="form-inline ml-0 ml-md-3">
                  <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                      <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
        
              <!-- Right navbar links -->
              <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                <!-- Messages Dropdown Menu -->

                  <li class="nav-item dropdown">
                  <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="fas fa-comments"></i>
                    <span class="badge badge-danger navbar-badge">3</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                      <!-- Message Start -->
                      <div class="media">
                        <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                        <div class="media-body">
                          <h3 class="dropdown-item-title">
                            Brad Diesel
                            <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                          </h3>
                          <p class="text-sm">Call me whenever you can...</p>
                          <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                      </div>
                      <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
            
                    <a href="#" class="dropdown-item">
                      <!-- Message Start -->
                      <div class="media">
                        <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                        <div class="media-body">
                          <h3 class="dropdown-item-title">
                            John Pierce
                            <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                          </h3>
                          <p class="text-sm">I got your message bro</p>
                          <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                      </div>
                      <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                      <!-- Message Start -->
                      <div class="media">
                        <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                        <div class="media-body">
                          <h3 class="dropdown-item-title">
                            Nora Silvester
                            <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                          </h3>
                          <p class="text-sm">The subject goes here</p>
                          <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                      </div>
                      <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                  </div>
                </li>  
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                  <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                      <i class="fas fa-envelope mr-2"></i> 4 new messages
                      <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                      <i class="fas fa-users mr-2"></i> 8 friend requests
                      <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                      <i class="fas fa-file mr-2"></i> 3 new reports
                      <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications

                       
                    </a>
                  </div>
                </li>

                {{--  <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">   --}}
          
                    {{--  @if (Route::has('login'))
                
                         @auth
                             <a href="{{ url('/home') }}">Home</a>
                    @else
                         <a class="nav-link" data-toggle="dropdown" href="{{ route('login') }}" ><i class="fas fa-user"></i>
                         <i>  </i>
                         Iniciar Sesión</a> 
                   
                        @if (Route::has('register'))
                             <a class="nav-link" data-toggle="dropdown" href="{{ route('register') }}" ><i class="fas fa-user-plus"></i>
                            <i>  </i>
                            Registrarse</a>
                        @endif
                        @endauth
                    @endif          --}}
                {{--  </ul>          --}}
                <!-- Right navbar links -->
                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                  <!-- Notifications Dropdown Menu -->
                  @guest
                  <!-- Iniciar Sesion -->
                        
          
                  @if (Route::has('login'))
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('login') }}" class="dropdown-item">
                        <i class="fas fa-sign-in-alt mr-2"></i>{{ __('Login') }}
                    </a>
                  @endif
                  @if (Route::has('register'))
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('register') }}" class="dropdown-item ">
                        <i class="fas fa-address-card mr-2"></i>{{ __('Register') }}
                    </a>
                  @endif

                  @else
                    <li class="nav-item dropdown">
                      @if (Auth::user()->hasRole('Cliente') or Auth::user()->hasRole('Administrador') or Auth::user()->hasRole('Repartidor'))
                        @if (Auth::user()->hasRole('Cliente'))
                        <li class="nav-item">
                          <a class="nav-link"  href="">
                            <i class="fas fa-hard-hat"> Mis pedidos</i>
                          </a>
                        </li>
                        @endif
                        @if (Auth::user()->hasRole('Administrador'))
                          <li class="nav-item"> 
                            <a class="nav-link"  href="{{route('home')}}">
                              <i class="fas fa-chart-bar"> Administración</i>
                            </a>
                          </li>
                        @endif
                        @if (Auth::user()->hasRole('Repartidor'))
                        <li class="nav-item">
                          <a class="nav-link"  href="">
                            <i class="fas fa-motorcycle"> Delivery</i>
                          </a>
                        </li>
                        @endif 
                      @else
                        <li class="nav-item">
                          <a class="nav-link"  href="{{route('home')}}">
                            <i class="fas fa-cash-register"> Recepcion</i>
                          </a>
                        </li>
                      @endif

                      <li class="nav-item">
                      <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" ><i class="fas fa-sign-out-alt mr-2"></i>Cerrar sesión</a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                      </form>
                      </li>

                    </li>            
                    @endguest
          
                  @guest
                   
                  @else
                    @if (Auth::user()->hasRole('Cliente'))
                      <li class="nav-item dropdown">
                        <a class="nav-link" href="">
                          <i class="fa fa-shopping-cart"></i>
                           {{--  @if (count(Cart::getContent()))
                            <span class="badge badge-warning navbar-badge" id="ContadorCart" ><b>{{count(Cart::getContent())}}</b></span> 
                             <span class="badge badge-danger navbar-badge font-weight-bold"id="ContadorCart"><b>{{count(Cart::getContent())}}</b></span>
                          @else 
                            <span class="badge badge-danger navbar-badge font-weight-bold" id="ContadorCart"><b>0</b></span>
                          @endif  --}}
                        </a>
                      </li>
                    @endif
                  @endguest
          
                  
                   
             
                
                </ul>  

              </ul>
            </div>
          </nav>
          <!-- /.navbar -->
        
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
          <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
              Anything you want
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
          </footer>
        </div>
        <!-- ./wrapper -->
        
        <!-- REQUIRED SCRIPTS -->
        
        <!-- jQuery -->
        <script src="{{asset('/libreria/plugins/jquery/jquery.min.js')}}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{asset('/libreria/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset('/libreria/dist/js/adminlte.min.js')}}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{asset('/libreria/dist/js/demo.js')}}"></script>
        </body>


</html>
