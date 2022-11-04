<?php

namespace App\Http\Controllers;

use App\Models\tipos;
use Illuminate\Http\Request;

class TiposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $tipo=tipos::all();
        return view("tipos.TableTipos",compact("tipo"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ("tipos.FormTipos");
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
            "tipo"=>"required|min:3|max:100",
            ],[],["name"=>"nombre","content"=>"contenido"]);

        Tipos::create(['tipo'=>$request->tipo,]);
        //dd($request);
        return redirect()->route('tipos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tipos  $tipos
     * @return \Illuminate\Http\Response
     */
    public function show(tipos $tipos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tipos  $tipos
     * @return \Illuminate\Http\Response
     */
    public function edit(tipos $tipo)
    {
        return view("tipos.updateTipos",compact("tipo"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tipos  $tipos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tipos $tipo)
    {
        $request->validate([
            "tipo"=>"required|min:3|max:100|unique:tipos",
            ],[],["name"=>"nombre","content"=>"contenido"]);
        
        $tipo->update(['tipo'=>$request->tipo]);
        return redirect()->route('tipos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tipos  $tipos
     * @return \Illuminate\Http\Response
     */
    public function destroy(tipos $tipo)
    {
        $tipo->delete();
        return redirect()->route('tipos.index');
    }
}
