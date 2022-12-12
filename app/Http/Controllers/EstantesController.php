<?php

namespace App\Http\Controllers;

use App\Models\estantes;
use Illuminate\Http\Request;
use App\Models\user;
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
        
        $estante=estantes::join("users","users.id","=","estantes.users_id")
            ->join("libros","libros.id","=","estantes.libros_id")
            ->select("estantes.id","users.name","libros.titulo")
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
        $usuarios=user::all();
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
        //dd($request->all());
        $request->validate([
            "libros_id"=>"required", //buscar su validacion
            "users_id"=>"required",   //buscar su validacion
            ],[],["name"=>"nombre","content"=>"contenido"]);

        Estantes::firstOrCreate(['libros_id'=>$request->libros_id,
                          'users_id'=>$request->users_id, ]);
        return redirect()->route('prestamos.index');
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
    public function edit(estantes $prestamo)
    {
        $usuarios=user::all();
        $libros=libros::all();
        return view("estantes.updateEstantes",compact("prestamo","usuarios","libros"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\estantes  $estantes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, estantes $prestamo)
    {
        $request->validate([
            "usuarios_id"=>"required", //buscar su validacion
            "libros_id"=>"required",   //buscar su validacion
            ],[],["name"=>"nombre","content"=>"contenido"]);

        $prestamo->update(['users_id'=>$request->id_usuarios,
                          'libros_id'=>$request->id_libros]);
        return redirect()->route('prestamos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\estantes  $estantes
     * @return \Illuminate\Http\Response
     */
    public function destroy(estantes $prestamo)
    {
        $prestamo->delete();
        return redirect()->route("prestamos.index");
    }
}
