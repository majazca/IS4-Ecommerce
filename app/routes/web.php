<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\VendedoresController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;

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

Route::get("/", [HomeController::class, 'index']);                                                                    // Home Ñemuha
Route::get('/productos/{nombre}', [ProductosController::class, 'productosNombre'])->name('productos.productosNombre');                         // Lista de productos por nombre
Route::get('/productos/categorias/{id_categoria}', [ProductosController::class, 'index']);                                       // Lista de productos por categoría  

// Vendedores
Route::get("/vendedores/{id}", [VendedoresController::class, 'index']);                                                    // Home Vendedores
Route::post("/vendedores/guardar", [VendedoresController::class, 'guardar'])->name('vendedores.guardar');
Route::get("/vendedores/{id_vendedor}/CargarProducto", [VendedoresController::class, 'cargarProducto']);              // Carga de Producto Vendedores
Route::get("/vendedores/{id_vendedor}/ListaProductos", [VendedoresController::class, 'listaProducto']); 
Route::get("/vendedores/{id_vendedor}/datos", [VendedoresController::class, 'datos']); 
Route::post("/vendedores/actualizarDatos", [VendedoresController::class, 'actualizarDatos'])->name('vendedores.actualizarDatos');  

Route::get("/register", [RegisterController::class, 'create'])->name ('register.index');
Route::post("/register", [RegisterController::class, 'store'])->name ('register.store');

Route::get("/login", [SessionsController::class, 'create'])->name ('login.index');
Route::post("/login", [SessionsController::class, 'store'])->name ('login.store');

Route::get("/recovery", [SessionsController::class, 'recovery'])->name ('recovery.index');
Route::post("/recovery", [SessionsController::class, 'recoverypost'])->name ('recovery.guardar');


//Route::get("/{id}", [HomeController::class, 'index']);  
//Route::post("/login/ingresar", [SessionsController::class, 'ingresar'])->name ('login.ingresar');