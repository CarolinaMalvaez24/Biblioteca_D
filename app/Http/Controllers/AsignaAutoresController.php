<?php

namespace App\Http\Controllers;

use App\Models\asigna_autores;
use Illuminate\Http\Request;
use App\Models\libros;
use App\Models\autores;


class AsignaAutoresController extends Controller
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
            asigna_autores.id,
            libros.descripcion,
            autores.nombre_autor 
            FROM asigna_autores 
            INNER JOIN autores on autores.id=asigna_autores.id_autores 
            INNER JOIN libros on libros.id=asigna_autores.id_libro; 

            $As_autores=asiga_autores::join("autores","autores.id","=","asigna_autores.id_autores")
        ->join("libros","libros.id","=","asigna_autores.id_libro")
        ->select("asigna_autores.id","libros.descripcion","autores.nombre_autor")
        ->get();

            SELECT asigna_autores.id,libros.descripcion,autores.nombre_autor FROM asigna_autores INNER JOIN autores on autores.id=asigna_autores.id_autores INNER JOIN libros on libros.id=asigna_autores.id_libro ORDER BY asigna_autores.id ASC;  

        */
        $As_autores=asigna_autores::join("autores","autores.id","=","asigna_autores.id_autores")
        ->join("libros","libros.id","=","asigna_autores.id_libro")
        ->select("asigna_autores.id","libros.descripcion","autores.nombre_autor")
        ->orderby("asigna_autores.id")
        ->get();
        return view("asigna_autores.TableAsignaAutores",compact("As_autores"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\asigna_autores  $asigna_autores
     * @return \Illuminate\Http\Response
     */
    public function show(asigna_autores $asigna_autores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\asigna_autores  $asigna_autores
     * @return \Illuminate\Http\Response
     */
    public function edit(asigna_autores $asigna_autore)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\asigna_autores  $asigna_autores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, asigna_autores $asigna_autore)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\asigna_autores  $asigna_autores
     * @return \Illuminate\Http\Response
     */
    public function destroy(asigna_autores $asigna_autore)
    {
        
    }
}
