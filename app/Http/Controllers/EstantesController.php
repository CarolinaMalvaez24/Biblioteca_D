<?php

namespace App\Http\Controllers;

use App\Models\estantes;
use Illuminate\Http\Request;
use App\Models\ejemplares;
use App\Models\libros;
use App\Http\Controllers\user;
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
                users.name,
                libros.titulo,
                ejemplares.num_copia
            from estantes
                INNER JOIN users on users.id=estantes.users_id
                INNER JOIN ejemplares on ejemplares.id=estantes.ejemplares_id
                INNER JOIN libros on libros.id=ejemplares.libros_id
                where estantes.users_id=1;
        */
        
        $estante=estantes::join("users","users.id","=","estantes.users_id")
            ->join("ejemplares","ejemplares.id","=","estantes.ejemplares_id")
            ->join("libros","libros.id","=","ejemplares.libros_id")
            ->select("estantes.id","users.name","libros.titulo","ejemplares.num_copia")
            ->orderby("estantes.id")
            ->where("estantes.users_id",auth()->user()->id)
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
        
        $libros = libros::all()->toJson(JSON_PRETTY_PRINT);
        
        /* $copias=ejemplares::where('libros_id', )->get(); */
        $copias = ejemplares::all()->toJson(JSON_PRETTY_PRINT);

        dd($copias);

        return view("estantes.FormEstantes",compact("copias","libros"));
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
        
        Estantes::Create(['users_id'=>$request->users_id,
                          'ejemplares_id'=>$request->ejemplares_id, ]);
        return redirect()->route('prestamos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\estantes  $estantes
     * @return \Illuminate\Http\Response
     */
    public function show(libros $libro)
    {
        $libros = libros::all();
        /* $copia = ejemplares::where('libros_id', $libro->id)->get(); */
        return view('estantes.FormEstantes', compact('libros')); 
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
        $libros = libros::all();
        $copias = ejemplares::all();
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
