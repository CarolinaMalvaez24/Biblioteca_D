<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\autores;

class UserController extends Controller
{  
    public function __construct() {
        $this->middleware('can:autores.index')->only('index');
        $this->middleware('can:autores.edit')->only('edit', 'update');
        $this->middleware('can:autores.edit')->only('create', 'store');
        $this->middleware('can:autores.destroy')->only('destroy');
    }

    public function index() {
        $autores = autores::all();
        return view('autores.showautores', compact('autores'));
    }
    
    public function create() {
        return view('autores.FormAutores');
    }
    
    public function store(Request $request) {
        $request->validate([
            "nombre_autor"=>"required|min:3|max:100",
            ],[],["name"=>"nombre","content"=>"contenido"]);

        Autores::create(['nombre_autor'=>$request->nombre_autor,]);
        return redirect()->route('autores.index');
    }
 
    public function show(autores $autore) {
        return view('autores.showautores', compact('autore'));
    }
    
    public function edit(autores $autore) {
        return view('autores.UpdateAutores', compact('autore'));
    }
    
    public function update(Request $request, autores $autore) {   

        $request->validate([
            "nombre_autor"=>"required|min:3|max:100|unique:autores",
            ],[],["name"=>"nombre","content"=>"contenido"]);
        $autore->update(['nombre_autor'=>$request->nombre_autor]);
        return redirect()->route('autores.index');
    } 
    
    public function destroy(autores $autore) {
         $autore->delete();
        return redirect()->route('autores.index');
    }
}
