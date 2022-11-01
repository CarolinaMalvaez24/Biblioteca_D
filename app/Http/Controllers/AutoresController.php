<?php

namespace App\Http\Controllers;

use App\Models\autores;
use Illuminate\Http\Request;

class AutoresController extends Controller
{
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
        return view ("autores.FormAutores");
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
            "nombre_autor"=>"required|min:3|max:100",
            ],[],["name"=>"nombre","content"=>"contenido"]);


        Autores::create(['nombre_autor'=>$request->nombre_autor,]);
        //dd($request);
        return redirect()->route('autores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\autores  $autores
     * @return \Illuminate\Http\Response
     */
    public function show(autores $autores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\autores  $autores
     * @return \Illuminate\Http\Response
     */
    public function edit(autores $autores)

    {
        return view("autores.updateAutores",compact("autores"));
        //dd($autores);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\autores  $autores
     * @return \Illuminate\Http\Response
     */


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
