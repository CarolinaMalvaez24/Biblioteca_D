<?php

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
    return view('welcome');
});

require __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function () {    
   
    Route::get('/home', function () { return view('home'); })->name('dashboard');
    
    /* USERS */
    Route::get('autores', [UserController::class, 'index'])/*->middleware('can:users.index')*/->name('autores.index');
    Route::get('autores/create', [UserController::class, 'create'])->name('autores.create');
    Route::post('autores', [UserController::class, 'store'])->name('autores.store');
    Route::get('autores/{autore}', [UserController::class, 'show'])->name('autores.show');
    Route::get('autores/{autore}/edit', [UserController::class, 'edit'])->name('autores.edit');
    Route::put('autores/{autore}', [UserController::class, 'update'])->name('autores.update');
    Route::delete('autores/{autore}/destroy', [UserController::class, 'destroy'])->name('autores.destroy');
});

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::resource("autores",\App\Http\Controllers\AutoresController::class);
//Route::resource("asigna_autores",\App\Http\Controllers\AsignaAutoresController::class);
//Route::resource("categorias",\App\Http\Controllers\CategoriasController::class);
//Route::resource("consultas" ,\App\Http\Controllers\ConsultasController::class);
//Route::resource("editoriales", \App\Http\Controllers\EditorialesController::class);
//Route::resource("estantes",\App\Http\Controllers\EstantesController::class);
//Route::resource("libros", \App\Http\Controllers\LibrosController::class);
//Route::resource("tipos", \App\Http\Controllers\TiposController::class);
//Route::resource("usuarios", \App\Http\Controllers\UsuariosController::class);
