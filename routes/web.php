<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\LibrosController;
use \App\Http\Controllers\AutoresController;
use \App\Http\Controllers\CategoriasController;
use \App\Http\Controllers\EditorialesController;
use App\Http\Controllers\registrocategoriaLcontroller;
use App\Http\Controllers\reglibeditorialcontroller;
use App\Http\Controllers\registroautorcontroller;
use App\Http\Controllers\EstantesController;
use App\Http\Controllers\DevolucionesController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>['auth']],function(){
    Route::resource("roles",RolController::class);
    Route::resource("usuarios",UsuarioController::class);
    Route::resource("libros",LibrosController::class);
    Route::resource("autores",AutoresController::class);
    Route::resource("editoriales",EditorialesController::class);
    Route::resource("categorias",CategoriasController::class);
    Route::resource("aggedit",reglibeditorialcontroller::class);
    Route::resource('aggcategoria',registrocategoriaLcontroller::class);
    Route::resource("autorRegistro",registroautorcontroller::class);
    Route::resource("prestamos",EstantesController::class);
    Route::resource("devoluciones",DevolucionesController::class);
});

Route::get('categorias/{categoria}',[LibrosController::class,'asigna_categoria']);


