<?php

use App\Http\Controllers\DireccionContrller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\PagosController;
use App\Http\Controllers\ProductoController;
use App\Models\Carrito;
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

Route::get('/prueba',function(){
    // dd('llegue xd xd');
    $carrito = Carrito::get();
    return view('prueba2',compact('carrito'));
 });


//carrito
Route::get('/prueba2', [PedidosController::class,'index'])->name('index');
Route::post('/add', [PedidosController::class,'add'])->name('add');


Route::get('/login',[LoginController::class, 'login'])->name('Login');
Route::post('/login',[LoginController::class, 'store'])->name('Login.Store');
Route::post('/logout',[LoginController::class, 'logout'])->name('Login.Logout');

Route::get('/user/registro',[LoginController::class, 'registro'])->name('Login.registro');
Route::get('/user/edit/{user}',[LoginController::class, 'edit'])->name('Login.edit');

Route::post('/user/registro',[LoginController::class, 'registroStore'])->name('Login.Registro.Store');
Route::post('/user/update',[LoginController::class, 'registroUpdate'])->name('Login.Registro.Update');




// Route::get('/Dashboard',[LoginController::class, 'dashboard'])->name('Dashboard');


// Route::get('/Clientes',[ClienteController::class, 'index']);


// Route::get('/Producto',[ProductoController::class, 'index'])->name('Producto.Index');
// // Route::get('/Producto',[ProductoController::class, 'index']);
// Route::get('/Producto/{producto}',[ProductoController::class, 'index'])->name('Producto.Index');


Route::get('/Pagos',[PagosController::class, 'index'])->name('Pagos.index');
// Route::get('/pagos',[PagosController::class, 'index'])->name('Pagos.index');



//ruta de productos
Route::get('/',[ProductoController::class, 'index'])->name('Producto.Index');
Route::get('/Productos/admin',[ProductoController::class, 'indexAdmin'])->name('Producto.indexAdmin');
Route::get('/Productos/create',[ProductoController::class, 'create'])->name('Producto.Create');
Route::post('/Productos/create',[ProductoController::class, 'store'])->name('Producto.Store');

Route::get('/Pedidos',[PagosController::class, 'pedidos'])->name('Pedidos');
Route::get('/Pedidos/{pedido}',[PagosController::class, 'pedidosShow'])->name('Pedidos.Show');


//direcciones
Route::get('/Direcciones',[DireccionContrller::class, 'index'])->name('Direccion.Index');
Route::get('/Direcciones/create',[DireccionContrller::class, 'create'])->name('Direccion.Create');
Route::post('/Direcciones/create',[DireccionContrller::class, 'store'])->name('Direccion.Store');

Route::post('/Direcciones/predeterminado/{dir}',[DireccionContrller::class, 'cambiarPredeterminado'])->name('Direccion.Predeterminado');

