<?php

namespace App\Http\Controllers;


use App\Models\autores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AutoresController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-autor|crear-autor|editar-autor|borrar-autor', ['only' => ['index']]);
         $this->middleware('permission:crear-autor', ['only' => ['create','store']]);
         $this->middleware('permission:editar-autor', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-autor', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autores=autores::all();
        return view("autores.TableAutores",compact("autores"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $autores=autores::all();
        return view ("autores.FormAutores", compact('autores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $autores=$request->validate([
            "nombre_autor"=>"required|min:3|max:100",
            ],[],["name"=>"nombre","content"=>"contenido"]);

        $autor=DB::select("CALL Cargar_Autor('$request->nombre_autor')");


        //Autores::firstOrCreate(['nombre_autor'=>$request->nombre_autor,]);
        //dd($request);
        return redirect()->route('autores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\autores  $autores
     * @return \Illuminate\Http\Response
     */
    public function show(autores $autore)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\autores  $autores
     * @return \Illuminate\Http\Response
     */

    public function edit(Autores $autore)
    {
        return view("autores.updateAutores",compact("autore"));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\autores  $autores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Autores $autore)
    {
        $request->validate([
            "nombre_autor"=>"required|min:3|max:100|unique:autores",
            ],[],["name"=>"nombre","content"=>"contenido"]);
        $autore->update(['nombre_autor'=>$request->nombre_autor]);
        return redirect()->route('autores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\autores  $autores
     * @return \Illuminate\Http\Response
     */
    public function destroy(autores $autore)
    {
        $autore->delete();
        return redirect()->route('autores.index');
    }
}
