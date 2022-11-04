<?php

namespace App\Http\Controllers;

use App\Models\estantes;
use Illuminate\Http\Request;
use App\Models\usuarios;
use App\Models\libros;
class EstantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*
            SELECT 
            estantes.id,
            usuarios.nombreUsuario,
            libros.descripcion 
            from estantes
            INNER JOIN usuarios on usuarios.id=estantes.id_usuarios
            INNER JOIN libros on libros.id=estantes.id_libros;
        */
        
        $estante=estantes::join("usuarios","usuarios.id","=","estantes.id_usuarios")
            ->join("libros","libros.id","=","estantes.id_libros")
            ->select("estantes.id","usuarios.nombreUsuario","libros.descripcion")
            ->orderby("estantes.id")
            ->get();
        return view("estantes.TableEstantes",compact("estante"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarios=usuarios::all();
        $libros=libros::all();
        return view("estantes.FormEstantes",compact("usuarios","libros"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "id_usuarios"=>"required", //buscar su validacion
            "id_libros"=>"required",   //buscar su validacion
            ],[],["name"=>"nombre","content"=>"contenido"]);

        Estantes::create(['id_usuarios'=>$request->id_usuarios,
                          'id_libros'=>$request->id_libros, ]);
        return redirect()->route('estantes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\estantes  $estantes
     * @return \Illuminate\Http\Response
     */
    public function show(estantes $estantes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\estantes  $estantes
     * @return \Illuminate\Http\Response
     */
    public function edit(estantes $estante)
    {
        $usuarios=usuarios::all();
        $libros=libros::all();
        return view("estantes.updateEstantes",compact("estante","usuarios","libros"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\estantes  $estantes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, estantes $estante)
    {
        $request->validate([
            "id_usuarios"=>"required", //buscar su validacion
            "id_libros"=>"required",   //buscar su validacion
            ],[],["name"=>"nombre","content"=>"contenido"]);

        $estante->update(['id_usuarios'=>$request->id_usuarios,
                          'id_libros'=>$request->id_libros]);
        return redirect()->route('estantes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\estantes  $estantes
     * @return \Illuminate\Http\Response
     */
    public function destroy(estantes $estante)
    {
        $estante->delete();
        return redirect()->route("estantes.index");
    }
}
