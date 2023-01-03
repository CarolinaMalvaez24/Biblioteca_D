<?php

namespace App\Http\Controllers;

use App\Models\Devoluciones;
use Illuminate\Http\Request;

class DevolucionesController extends Controller
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
                devoluciones.id,
                users.name,
                libros.titulo,
                ejemplares.num_copia,
                devoluciones.created_at,
                devoluciones.observaciones
            from devoluciones,estantes
                INNER JOIN users on users.id=estantes.users_id
                INNER JOIN ejemplares on ejemplares.id=estantes.ejemplares_id
                INNER JOIN libros on libros.id=ejemplares.libros_id
                WHERE  devoluciones.estantes_id=estantes.id;
        
        */
       /*  $devoluciones=devoluciones::join("users","users.id","=","estantes.users_id")
            ->join("ejemplares","ejemplares.id","=","estantes.ejemplares_id")
            ->join("libros","libros.id","=","ejemplares.libros_id")
            ->select( "devoluciones.id","users.name","libros.titulo","ejemplares.num_copia","devoluciones.created_at",
                "devoluciones.observaciones")
            ->where("devoluciones.estantes_id","estantes.id")
            ->get(); */
        $devoluciones = devoluciones::all();
        return view('devoluciones.index', compact('devoluciones'));
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
     * @param  \App\Models\Devoluciones  $devoluciones
     * @return \Illuminate\Http\Response
     */
    public function show(Devoluciones $devoluciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Devoluciones  $devoluciones
     * @return \Illuminate\Http\Response
     */
    public function edit(Devoluciones $devoluciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Devoluciones  $devoluciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Devoluciones $devoluciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Devoluciones  $devoluciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Devoluciones $devoluciones)
    {
        //
    }
}
