<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\LibrosController;

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
    
});

/*Route::resource("autores",\App\Http\Controllers\AutoresController::class);
Route::resource("asigna_autores",\App\Http\Controllers\AsignaAutoresController::class);
Route::resource("categorias",\App\Http\Controllers\CategoriasController::class);
Route::resource("consultas" ,\App\Http\Controllers\ConsultasController::class);
Route::resource("editoriales", \App\Http\Controllers\EditorialesController::class);
Route::resource("estantes",\App\Http\Controllers\EstantesController::class);
Route::resource("libros", \App\Http\Controllers\LibrosController::class);
Route::resource("tipos", \App\Http\Controllers\TiposController::class);
Route::resource("usuarios", \App\Http\Controllers\UsuariosController::class);*/
