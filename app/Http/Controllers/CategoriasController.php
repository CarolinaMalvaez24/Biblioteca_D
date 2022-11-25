<?php

namespace App\Http\Controllers;

use App\Models\categorias;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-categoria|crear-categoria|editar-categoria|borrar-categoria', ['only' => ['index']]);
         $this->middleware('permission:crear-categoria', ['only' => ['create','store']]);
         $this->middleware('permission:editar-categoria', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-categoria', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categoria=categorias::all();
        return view("categorias.TableCategorias",compact("categoria"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoria=categorias::all();
        return view("categorias.FormCategorias",compact("categoria"));
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
            "tipo_categoria"=>"required|min:3|max:100",
            ],[],["name"=>"nombre","content"=>"contenido"]);


        Categorias::create(['tipo_categoria'=>$request->tipo_categoria,]);
        //dd($request);
        return redirect()->route('categorias.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\categorias  $categorias
     * @return \Illuminate\Http\Response
     */
    public function show(categorias $categorias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\categorias  $categorias
     * @return \Illuminate\Http\Response
     */
    public function edit(categorias $categoria)
    {
        return view("categorias.updateCategorias",compact("categoria"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\categorias  $categorias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, categorias $categoria)
    {
        $request->validate([
            "tipo_categoria"=>"required|min:3|max:100|unique:categorias",
            ],[],["name"=>"nombre","content"=>"contenido"]);
        $categoria->update(['tipo_categoria'=>$request->tipo_categoria]);
        return redirect()->route('categorias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\categorias  $categorias
     * @return \Illuminate\Http\Response
     */
    public function destroy(categorias $categoria)
    {
        $categoria->delete();
        return redirect()->route('categorias.index');
    }
}
