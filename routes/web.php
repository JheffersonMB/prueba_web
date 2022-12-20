<?php

use App\Http\Controllers\Administracion;
use App\Http\Controllers\AlmacenController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\IngredienteController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\UbicacionController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/');
    // return view('welcome');
});

Route::get('/',[WelcomeController::class,'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(CategoriaController::class)->group(function (){
    Route::get('categoria','index')->name('categoria.index');
    Route::get('categoria/create','create')->name('categoria.create');
    Route::post('categoria/store','store')->name('categoria.store');
    Route::get('/categoria/edit/{id}','edit');
    Route::put('/categoria/update/{id}','update')->name('categoria.update');
    Route::get('/categoria/destroy/{id}','destroy');

});


Route::controller(ProveedorController::class)->group(function (){
    Route::get('proveedor','index')->name('proveedor.index');
    Route::get('proveedor/create','create')->name('proveedor.create');
    Route::post('proveedor/store','store')->name('proveedor.store');
    Route::get('/proveedor/edit/{id}','edit');
    Route::put('/proveedor/update/{id}','update')->name('proveedor.update');
    Route::get('/proveedor/destroy/{id}','destroy');

});


Route::controller(AlmacenController::class)->group(function (){
    Route::get('almacen','index')->name('almacen.index');
    Route::get('almacen/create','create')->name('almacen.create');
    Route::post('almacen/store','store')->name('almacen.store');
    Route::get('/almacen/edit/{id}','edit');
    Route::put('/almacen/update/{id}','update')->name('almacen.update');
    Route::get('/almacen/destroy/{id}','destroy');

});


Route::controller(DeliveryController::class)->group(function (){
    Route::get('delivery','index')->name('delivery.index');
    Route::get('delivery/create','create')->name('delivery.create');
    Route::post('delivery/store','store')->name('delivery.store');
    Route::get('/delivery/edit/{id}','edit');
    Route::put('/delivery/update/{id}','update')->name('delivery.update');
    Route::get('/delivery/destroy/{id}','destroy');

});

Route::controller(ClienteController::class)->group(function (){
    Route::get('cliente','index')->name('cliente.index');
    Route::get('cliente/create','create')->name('cliente.create');
    Route::post('cliente/store','store')->name('cliente.store');
    Route::get('/cliente/edit/{id}','edit');
    Route::put('/cliente/update/{id}','update')->name('cliente.update');
    Route::get('/cliente/destroy/{id}','destroy');

});



Route::controller(UbicacionController::class)->group(function (){
    Route::get('ubicacion','index')->name('ubicacion.index');
    Route::get('ubicacion/create','create')->name('ubicacion.create');
    Route::post('ubicacion/store','store')->name('ubicacion.store');
    Route::get('/ubicacion/edit/{id}','edit');
    Route::put('/ubicacion/update/{id}','update')->name('ubicacion.update');
    Route::get('/ubicacion/destroy/{id}','destroy');

});

Route::controller(EmpleadoController::class)->group(function (){
    Route::get('empleado','index')->name('empleado.index');
    Route::get('empleado/create','create')->name('empleado.create');
    Route::post('empleado/store','store')->name('empleado.store');
    Route::get('/empleado/edit/{id}','edit');
    Route::put('/empleado/update/{id}','update')->name('empleado.update');
    Route::get('/empleado/destroy/{id}','destroy');

});

Route::controller(ProductoController::class)->group(function (){
    Route::get('producto','index')->name('producto.index');
    Route::get('producto/create','create')->name('producto.create');
    Route::post('producto/store','store')->name('producto.store');
    Route::get('/producto/edit/{id}','edit');
    Route::put('/producto/update/{id}','update')->name('producto.update');
    Route::get('/producto/destroy/{id}','destroy');
    Route::get('/card-checkout','create_pedido')->name('cart.checkout');

});

Route::controller(IngredienteController::class)->group(function (){
    Route::get('ingrediente','index')->name('ingrediente.index');
    Route::get('ingrediente/create','create')->name('ingrediente.create');
    Route::post('ingrediente/store','store')->name('ingrediente.store');
    Route::get('/ingrediente/edit/{id}','edit');
    Route::put('/ingrediente/update/{id}','update')->name('ingrediente.update');
    Route::get('/ingrediente/destroy/{id}','destroy');

});

Route::controller(PedidoController::class)->group(function (){
    Route::get('pedido','index')->name('pedido.index');
    Route::get('pedido/create','create')->name('pedido.create');
    Route::post('pedido/store','store')->name('pedido.store');
    Route::get('/pedido/edit/{id}','edit');
    Route::put('/pedido/update/{id}','update')->name('pedido.update');
    Route::get('/pedido/destroy/{id}','destroy');

});


//administracion de usuario
Route::get('administracion', [Administracion::class,'index']);
Route::get('administracion/usuarios/eliminados', [Administracion::class,'eliminados']);
Route::get('administracion/usuarios/create', [Administracion::class,'create']);
Route::get('administracion/usuarios/restaurar/{id}',[ Administracion::class , 'restaurar']);
Route::get('administracion/usuarios/destroy/{id}',[ Administracion::class , 'destroy']);
Route::post('administracion/usuarios/store', [Administracion::class,'store']);
Route::get('administracion/usuarios/edit/{id}', [Administracion::class,'edit']);// ->can('administracion');
Route::post('administracion/usuarios/update/{id}', [Administracion::class,'update']);

//roles
Route::get('administracion/roles', [Administracion::class,'indexROL']);
Route::get('administracion/roles/create', [Administracion::class,'createROL']);
Route::post('administracion/roles/store', [Administracion::class,'storeROL']);
Route::get('administracion/roles/destroy/{id}',[ Administracion::class , 'destroyROL']);
Route::get('administracion/roles/eliminados', [Administracion::class,'eliminadosROL']);
Route::get('administracion/roles/restaurar/{id}',[ Administracion::class , 'restaurarROL']);
Route::get('administracion/roles/edit/{id}', [Administracion::class,'editROL']);
Route::post('administracion/roles/update/{id}', [Administracion::class,'updateROL']);
//permiso

Route::get('administracion/permisos/{id}', [Administracion::class,'indexPERMISO']);
Route::post('administracion/permisos/update/{id}', [Administracion::class,'updatePERMISO']);
