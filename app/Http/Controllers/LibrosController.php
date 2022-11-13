<?php

namespace App\Http\Controllers;

use App\Models\libros;
use Illuminate\Http\Request;
use App\Models\editoriales;
use App\Models\categorias;
use App\Models\autores;

class LibrosController extends Controller
{
   function __construct()
    {
         $this->middleware('permission:ver-libro|crear-libro|editar-libro|borrar-libro', ['only' => ['index']]);
         $this->middleware('permission:crear-libro', ['only' => ['create','store']]);
         $this->middleware('permission:editar-libro', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-libro', ['only' => ['destroy']]);
    }

    public function index()
    {

        /*
            Consulta
        SELECT libros.descripcion,libros.anio,editoriales.nombre_editorial,categorias.tipo_categoria from libros,editoriales,categorias WHERE editoriales.id=libros.id_editoriales and categorias.id=libros.id_categorias; 

        SELECT 
        libros.descripcion,
        libros.anio,
        editoriales.nombre_editorial,
        categorias.tipo_categoria 
        from libros 
        INNER JOIN editoriales ON editoriales.id=libros.id_editoriales 
        INNER JOIN categorias ON categorias.id=libros.id_categorias;

        $libro=libros::join("editoriales","editoriales.id","=","libros.id_editoriales")
        ->join("categorias","categorias.id","=","libros.id_categorias")
        ->select("libros.descripcion","libros.anio","editoriales.nombre_editorial","categorias.tipo_categorias")
        ->get();
        */


        //$libro=libros::all();
        $libro=libros::join("editoriales","editoriales.id","=","libros.id_editoriales")
        ->join("categorias","categorias.id","=","libros.id_categorias")
        ->join("autores","autores.id","=","libros.id_autor")
        ->select("libros.descripcion","libros.anio","editoriales.nombre_editorial","categorias.tipo_categoria","autores.nombre_autor","libros.id")
        ->get();
        return view("libros.TableLibros",compact("libro"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $editorial=editoriales::all();
        $categoria=categorias::all();
        $autores=autores::all();
        return view("libros.FormLibros",compact('editorial','categoria','autores'));
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
            "descripcion"=>"required",
            "anio"=>"required",
            "id_editoriales"=>"required", //buscar laa validacion correcta
            "id_categorias"=>"required",
            "id_autor"=>"required" //buscar laa validacion correcta
            ],[],["name"=>"nombre","content"=>"contenido"]);


        Libros::create(['descripcion'=>$request->descripcion,
                        'anio'=>$request->anio,
                        'id_editoriales'=>$request->id_editoriales,
                        'id_categorias'=>$request->id_categorias,
                        'id_autor'=>$request->id_autor,]);
        //dd($request);
        return redirect()->route('libros.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function show(libros $libros)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function edit(libros $libro)
    {
        $editorial=editoriales::all();
        $categoria=categorias::all();
        $autores=autores::all();
        return view("libros.updateLibros",compact('libro','editorial','categoria','autores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, libros $libro)
    {
        $request->validate([
            "descripcion"=>"required",
            "anio"=>"required",
            "id_editoriales"=>"required", //buscar laa validacion correcta
            "id_categorias"=>"required", //buscar laa validacion correcta
            ],[],["name"=>"nombre","content"=>"contenido"]);
        
        $libro->update(['descripcion'=>$request->descripcion,
                        'anio'=>$request->anio,
                        'id_editoriales'=>$request->id_editoriales,
                        'id_categorias'=>$request->id_categorias,
                        'id_autor'=>$request->id_autor]);
        
        return redirect()->route('libros.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function destroy(libros $libro)
    {
        $libro->delete();
        return redirect()->route('libros.index');
    }
}
