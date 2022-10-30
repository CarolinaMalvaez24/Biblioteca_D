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
        //
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
    public function edit(tipos $tipos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tipos  $tipos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tipos $tipos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tipos  $tipos
     * @return \Illuminate\Http\Response
     */
    public function destroy(tipos $tipos)
    {
        //
    }
}
