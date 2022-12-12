<?php

namespace App\Http\Controllers;


use App\Models\libros;
use Illuminate\Http\Request;
use App\Models\editoriales;
use App\Models\categorias;
use App\Models\autores;
use App\Models\categorias_libros;
use App\Models\autores_libros;
use App\Models\ejemplares;
use App\Models\user;

class LibrosController extends Controller
{
   function __construct()
    {
         $this->middleware('permission:ver-libro|crear-libro|editar-libro|borrar-libro', ['only' => ['index']]);
         $this->middleware('permission:crear-libro', ['only' => ['create','store']]);
         $this->middleware('permission:editar-libro', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-libro', ['only' => ['destroy']]);
         $this->middleware('permission:ver-libro', ['only' => ['show']]);
    }

    public function index()
    {
        $libro=libros::all();
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

        dd($request->all());
        //dd($request->numero);
        /*$request->validate([
            "titulo"=>"required",
            "anio"=>"required",

            "descripcion"=>"required",
            "id_editoriales"=>"required", //buscar la validacion correcta
            ],[],["name"=>"nombre","content"=>"contenido"]);*/

        $newLibro=Libros::firstOrCreate(['titulo'=>$request->titulo,
                        'anio'=>$request->anio,
                        'descripcion'=>$request->descripcion,
                        'editoriales_id'=>$request->id_editoriales,]);


        foreach ($request->id_autor as $autor) {
            //dd($autor);
            $asigna_autor=autores_libros::firstOrCreate(['libros_id'=>$newLibro->id,
                        'autores_id'=>$autor]);
        }

        foreach ($request->id_categoria as $categoria) {
            $categorias=categorias_libros::firstOrCreate(['libros_id'=>$newLibro->id,
                        'categorias_id'=>$categoria,]);
        }

       $ejemplar=ejemplares::Create(['libros_id'=>$newLibro->id,'num_copia'=>$request->num_copia,]);


        return redirect()->route('libros.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function show(libros $libro)
    {
        //consulta de eloquent
        $libros = libros::where('id', $libro->id)
        ->where('anio', $libro->anio)
        ->where('descripcion', $libro->descripcion)
        ->get();
         $usuarios=user::all();
       

        return view('libros.show', compact('libro','libros','usuarios'));
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

    public function asigna_categoria(categorias $categoria){
        


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
