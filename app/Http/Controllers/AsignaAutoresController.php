<?php

namespace App\Http\Controllers;

use App\Models\asigna_autores;
use Illuminate\Http\Request;

class AsignaAutoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $As_autores=asigna_autores::all();
        return view("asigna_autores.TableAsignaAutores",compact("As_autores"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit(asigna_autores $asigna_autores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\asigna_autores  $asigna_autores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, asigna_autores $asigna_autores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\asigna_autores  $asigna_autores
     * @return \Illuminate\Http\Response
     */
    public function destroy(asigna_autores $asigna_autores)
    {
        //
    }
}
